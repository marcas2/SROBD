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
        DB::table('entidades')->insert([
                ['nombre' => 'COMPUCONTA_SW_CC3', 'ip' => '10.142.0.5', 'port' => '5501','descripcion' => 'Sistema de informacion contable para Compuconta','db' => 'Compuconta','url' => 'https://compuconta-software.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'TUNARINO_CC3', 'ip' => '10.142.0.5', 'port' => '5502','descripcion' => 'Turnarino Almacen','db' => 'Compuconta','url' => 'http://hmorasurco.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'IEM_NORMAL_IN', 'ip' => '10.142.0.5', 'port' => '5503','descripcion' => 'IEM Normal Infraestructura','db' => 'Compuconta','url' => 'http://iemnormal.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'CLI_MONSERRATE_CC3', 'ip' => '10.142.0.5', 'port' => '5505','descripcion' => 'Clinica Monserrat - Activos fijos','db' => 'Compuconta','url' => 'http://montserrat.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ALC_RICAURTE_CC3_ACTIVOS', 'ip' => '10.142.0.5', 'port' => '5506','descripcion' => 'Alcaldia Municipal de Ricaurte - Activos fijos','db' => 'Compuconta','url' => 'http://alcricaurte.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'IPS_MUELLAMUES', 'ip' => '10.142.0.5', 'port' => '5507','descripcion' => 'IPS Muellamues','db' => 'Compuconta','url' => 'http://ipsmuellamues.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ESE_MALLAMA_CC3', 'ip' => '10.142.0.5', 'port' => '5522','descripcion' => 'ESE Mallama - Almacen','db' => 'Compuconta','url' => 'https://esemallama.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'CIUDAD_SOLAR_CC3', 'ip' => '10.142.0.5', 'port' => '5523','descripcion' => 'Ciudad Solar','db' => 'Compuconta','url' => 'https://ciudad-solar.compuconta.co/', 'version' => 'CC3'],
                ['nombre' => 'ALC_RICAURTE_CC3_IyC', 'ip' => '10.142.0.5', 'port' => '5525','descripcion' => 'Alcaldia Municipal de Ricaurte - Industria y Ccio','db' => 'Compuconta','url' => 'http://alcricaurteiyc.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ALC_PTOASIS_CC3', 'ip' => '10.142.0.5', 'port' => '5528','descripcion' => 'Alcaldia Municipal de Puerto Asis - Almacen CC3','db' => 'Compuconta','url' => 'http://alcptoasis.compuconta.com', 'version' => 'CC3'],
                ['nombre' => 'EMSERPUVAG', 'ip' => '10.142.0.5', 'port' => '5529','descripcion' => 'EMSERPUVAG','db' => 'Compuconta','url' => 'http://emserpuvag.compuconta.com', 'version' => 'CC3'],
                ['nombre' => 'CLI_PAREDES_CC3', 'ip' => '10.142.0.5', 'port' => '5530','descripcion' => 'Clinica Paredes','db' => 'Compuconta','url' => 'http://activos-paredes.compuconta.co', 'version' => 'CC3'],
                ['nombre' => 'IPS_GUAITARA', 'ip' => '10.142.0.5', 'port' => '5533','descripcion' => 'IPS Guaitara => Infraestructura','db' => 'Compuconta','url' => 'https://ipsguaitara.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ASOMPASC', 'ip' => '10.142.0.5', 'port' => '5538','descripcion' => 'Asompasc','db' => 'Compuconta','url' => 'http://asompasc.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'INGELEC', 'ip' => '10.142.0.5', 'port' => '5539','descripcion' => 'Ingelec','db' => 'Compuconta','url' => 'https://ingelec.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'UNION_SALUD_CC3', 'ip' => '10.142.0.5', 'port' => '5540','descripcion' => 'Union Salud - Facturacion electronica','db' => 'Compuconta','url' => 'https://ipsunionsalud.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'LAUNION_CC3', 'ip' => '10.142.0.5', 'port' => '5542','descripcion' => 'Industria y Ccio Munipio la Union','db' => 'Compuconta','url' => 'https://iyclaunion.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ALC_GUAITARILLA_CC3', 'ip' => '10.142.0.5', 'port' => '5535','descripcion' => 'Alcaldia Municipal de Guaitarilla - Activos fijos','db' => 'Compuconta','url' => 'https://alcaldia-guaitarilla-cc3.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'IPS_IMALLAMAS_CC3', 'ip' => '10.142.0.5', 'port' => '5562','descripcion' => 'IPS Indigena Mallamas CC3','db' => 'Compuconta','url' => 'https://ips-mallamas-cc3.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ECTINAR_CC3', 'ip' => '10.142.0.5', 'port' => '5556','descripcion' => 'Eticnar CC3','db' => 'Compuconta','url' => 'https://eticnar-cc3.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ESE_SAGRADOCORAZON_CC3', 'ip' => '10.142.0.5', 'port' => '5568','descripcion' => 'ESE Sagrado Corazon de Jesus','db' => 'Compuconta','url' => 'https://ese-sagrado-corazon.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ALC_SAMANIEGO_CC3', 'ip' => '10.142.0.5', 'port' => '5569','descripcion' => 'Alcaldia Municipal de Samaniego Infraestructura CC3','db' => 'Compuconta','url' => 'https://alcaldia-samaniego.compuconta.com', 'version' => 'CC3'],
                ['nombre' => 'BOMBEROS_PASTO', 'ip' => '10.142.0.5', 'port' => '5574','descripcion' => 'Cuerpo Bomberos Voluntarios de Pasto','db' => 'Compuconta','url' => 'https://pys-bomberospasto.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'TRANSGUAMUEZ', 'ip' => '10.142.0.5', 'port' => '5579','descripcion' => 'Transguamuez S.A','db' => 'Compuconta','url' => 'https://transguamuez.compuconta.com', 'version' => 'CC3'],
                ['nombre' => 'IPS_VIDAENCASA_CC3', 'ip' => '10.142.0.5', 'port' => '5578','descripcion' => 'IPS Vida en Casa CC3','db' => 'Compuconta','url' => 'https://vidaencasa-cc3.compuconta.com', 'version' => 'CC3'],
                ['nombre' => 'IPS_CONSTRUIMOSPRAGA', 'ip' => '10.142.0.5', 'port' => '5582','descripcion' => 'Construimos Praga SAS','db' => 'Compuconta','url' => 'https://construimos-praga.compuconta.com', 'version' => 'CC3'],
                ['nombre' => 'ALC-VALLEGUAMUEZ-CC3', 'ip' => '10.142.0.5', 'port' => '5558','descripcion' => 'Alcaldia Municipal del Valle del Guamuez CC3','db' => 'Compuconta','url' => 'https://alcaldia-valleguamuez-cc3.compuconta.com', 'version' => 'CC3'],
                ['nombre' => 'ALC_FUNES', 'ip' => '10.142.0.5', 'port' => '5585','descripcion' => 'Alcaldia de Funes CC3','db' => 'Compuconta','url' => 'https://alcaldia-funes.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ESE_LORENCITA_VILLEGAS', 'ip' => '10.142.0.5', 'port' => '5584','descripcion' => 'ESE Lorencita Villegas CC3','db' => 'Compuconta','url' => 'https://lorencitavillegas.compuconta.com', 'version' => 'CC3'],
                ['nombre' => 'EAAAP', 'ip' => '10.142.0.5', 'port' => '5586','descripcion' => 'Empresa De Acueducto Y Alcantarillado De Puerto Asis','db' => 'Compuconta','url' => 'https://eaaap.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'IEM_LUIS_EDUARDO_CC3', 'ip' => '10.142.0.5', 'port' => '5587','descripcion' => 'IEM Luis Eduardo Mora Osejo CC3','db' => 'Compuconta','url' => 'http://iemluiseduardomora-cc3.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ESE_FRONTERIZO-DORADA', 'ip' => '10.142.0.5', 'port' => '5590','descripcion' => 'E.S.E Hospital Fronterizo La Dorada','db' => 'Compuconta','url' => 'https://ese-fronterizodorada.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ESE_LUIS-ACOSTA', 'ip' => '10.142.0.5', 'port' => '5591','descripcion' => 'Centro de salud Municipal nivel I Luis Acosta E.S.E','db' => 'Compuconta','url' => 'https://ese-luisacosta.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ESE_LOURDES_CC3', 'ip' => '10.142.0.5', 'port' => '5645','descripcion' => 'E.S.E Centro de salud Virgen de Lourdes Buesaco (Almacen)','db' => 'Compuconta','url' => 'https://ese-virgen-lourdes.compuconta.com/', 'version' => 'CC3'],
                ['nombre' => 'ALC-TUQUERRES-CC3', 'ip' => '10.142.0.5', 'port' => '5649','descripcion' => 'Alcaldia Municipal de Tuquerres CC3','db' => 'Compuconta','url' => 'https://alcaldia-tuquerres-cc3.compuconta.com/', 'version' => 'CC3'],
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
