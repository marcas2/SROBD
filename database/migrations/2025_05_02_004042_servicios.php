<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('servicios')->insert([
            ['ip' => '10.142.0.7', 'port' => '5511', 'descripcion' => 'Compuconta3 Desarrollo', 'docker' => 'psql_cc3_dev'],
            ['ip' => '10.142.0.7', 'port' => '5512', 'descripcion' => 'Compuconta3 Analisis', 'docker' => 'psql_cc3_analisis'],
            ['ip' => '10.142.0.7', 'port' => '5513', 'descripcion' => 'Clinicas', 'docker' => 'psql_clinicas_dev'],
            ['ip' => '10.142.0.7', 'port' => '5514', 'descripcion' => 'Soporte', 'docker' => 'psql_soporte_cc2'],
            ['ip' => '10.142.0.7', 'port' => '5515', 'descripcion' => 'Servicios Compuconta', 'docker' => 'psql_services'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
