<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\srobd;
use App\Http\Requests\StoresrobdRequest;
use App\Http\Requests\UpdatesrobdRequest;

class SrobdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresrobdRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(srobd $srobd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(srobd $srobd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesrobdRequest $request, srobd $srobd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(srobd $srobd)
    {
        //
    }
    public function srobd(Request $request)
    {
        $entidad = $request->input('entidad');
        $servicio = $request->input('servicio');
        echo $entidad, ",", $servicio;
        exit;
    }

    public function generar($idPuerto)
    {
        $puerto = Puerto::with('servidor')->findOrFail($idPuerto);

        // Datos necesarios
        $entidadNombre = $puerto->descripcion ?? 'entidad';
        $dbHost = $puerto->ip;
        $dbPort = $puerto->puerto;
        $dbName = 'nombre_base_datos';
        $dbUser = 'usuario_db';
        $dbPassword = 'contraseña_db';

        // Generar nombre y ruta
        $backupFilename = $this->crearNombreArchivo($entidadNombre);
        $rutaBackup = "/home/backups/" . $backupFilename;

        // Comando
        $cmd = 'PGPASSWORD="' . $dbPassword . '" pg_dump --host ' . $dbHost . ' --port ' . $dbPort .
               ' --username "' . $dbUser . '" --format custom --blobs --verbose ' .
               '--file "' . $rutaBackup . '" "' . $dbName . '"';

        // Ejecutar comando
        $output = shell_exec($cmd . ' 2>&1');

        return response()->json([
            'mensaje' => 'Backup generado',
            'archivo' => $backupFilename,
            'output' => $output,
        ]);
    }
   
    public function eliminar(Request $request)
    {
        $archivo = $request->input('archivo');
        $rutaArchivo = '/home/backups/' . $archivo;

        if (!$archivo) {
            return response()->json(['error' => 'Archivo no especificado.'], 400);
        }

        if (!file_exists($rutaArchivo)) {
            return response()->json(['error' => 'El archivo no existe.'], 404);
        }

        if (unlink($rutaArchivo)) {
            return response()->json(['mensaje' => 'Archivo eliminado correctamente.']);
        } else {
            return response()->json(['error' => 'No se pudo eliminar el archivo.'], 500);
        }
    }
    /**
     * Genera un nombre de archivo con timestamp.
     */
    private function crearNombreArchivo($entidad)
    {
        return $entidad . '_' . now()->format('Ymd_His') . '.backup';
    }
}
