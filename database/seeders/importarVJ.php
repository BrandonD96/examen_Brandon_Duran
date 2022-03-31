<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class importarVJ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include 'mytable.php';
        foreach($mytable as $vj){
            DB::table('videogames')->insert([
                'titulo'=>$vj["title"],
                'miniatura'=>$vj["thumbnail"],
                'descripcion'=>$vj["short_description"],
                'url_vj'=>$vj["game_url"],
                'genero'=>$vj["genre"],
                'plataforma'=>$vj["platform"],
                'publisher'=>$vj["publisher"],
                'desarrollador'=>$vj["developer"],
                'fecha_estreno'=>$vj["release_date"],
                'perfil_freetogame_url'=>$vj["freetogame_profile_url"],
            ]);
        }
    }
}
