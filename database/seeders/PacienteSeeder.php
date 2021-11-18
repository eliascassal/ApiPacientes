<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
                'nombres'=> 'alex oscar',
                'apellidos'=> 'gamarra soliz',
                'edad'=> '28',
                'sexo'=> 'masculino',
                'ci'=> '2051849',
                'tipo_sangre'=>'Orh+',
                'correo'=>'alexoscar@gmail.com',
                'telefono'=>'15115141',
                'direccion'=>'calle comercio'
            ],
            [
                'nombres'=> 'juan manuel',
                'apellidos'=> 'huanca laura',
                'edad'=> '25',
                'sexo'=> 'masculino',
                'ci'=> '2525242',
                'tipo_sangre'=>'Orh+',
                'correo'=>'alexoscar@gmail.com',
                'telefono'=>'15115141',
                'direccion'=>'calle comercio'
            ],
            [
                'nombres'=> 'gustavo jose',
                'apellidos'=> 'palacios de los pirineos',
                'edad'=> '28',
                'sexo'=> 'masculino',
                'ci'=> '2051849',
                'tipo_sangre'=>'Arh+',
                'correo'=>'gustavojose@gmail.com',
                'telefono'=>'15115141',
                'direccion'=>'calle comercio'
            ],
            [
                'nombres'=> 'marcela ninoska',
                'apellidos'=> 'tegua anze',
                'edad'=> '19',
                'sexo'=> 'femenino',
                'ci'=> '2528292',
                'tipo_sangre'=>'ABrh+',
                'correo'=>'ninoskamar@gmail.com',
                'telefono'=>'15115141',
                'direccion'=>'calle comercio'
            ],
            [
                'nombres'=> 'lorena patricia',
                'apellidos'=> 'soliz ortuño',
                'edad'=> '21',
                'sexo'=> 'femenino',
                'ci'=> '2051849',
                'tipo_sangre'=>'Orh+',
                'correo'=>'loresolizortiño@gmail.com',
                'telefono'=>'75484574',
                'direccion'=>'calle  yatebute esq beni'
            ],
            [
                'nombres'=> 'ruben dario',
                'apellidos'=> 'Baldiviezo Maritnez',
                'edad'=> '48',
                'sexo'=> 'masculino',
                'ci'=> '1715187',
                'tipo_sangre'=>'Orh+',
                'correo'=>'rubendario@gmail.com',
                'telefono'=>'15115141',
                'direccion'=>'calle comercio'
            ],
            [
                'nombres'=> 'sebastian marcelo',
                'apellidos'=> 'zegarra mariño',
                'edad'=> '18',
                'sexo'=> 'masculino',
                'ci'=> '2524789',
                'tipo_sangre'=>'Orh+',
                'correo'=>'sebasmariño@gmail.com',
                'telefono'=>'75948123',
                'direccion'=>'calle ballivian entre benemeritos y cochabamba'
            ],
            [
                'nombres'=> 'Naira Rashel',
                'apellidos'=> 'Goitia soliz',
                'edad'=> '28',
                'sexo'=> 'femenino',
                'ci'=> '4545787',
                'tipo_sangre'=>'Brh+',
                'correo'=>'nairagoitia@gmail.com',
                'telefono'=>'74578759',
                'direccion'=>'calle comercio esq calle urundeles'
            ]
        ]);
    }
}
