<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoJuego;
class VideoJuegoController extends Controller
{
    //Mostrar todo
    public function mostrarTodo(){
        $vj=VideoJuego::all(); //Mustra todos los videojuegos en la bd
        $randomNumber=rand(1,369); 
        $randomVJ=VideoJuego::find($randomNumber); //Muestra un Juego aleatorio de la bd
        //API
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET','https://api.nytimes.com/svc/movies/v2/reviews/picks.json?api-key=zAJhvJWAqEBi54766Z40CXLswqBymGsK');
        $datos = json_decode($response->getBody()->getContents(), true);
        //obtener elementos
        $item = [];
        foreach($datos['results'] as $items){
           $item[] = [
                'titulo' => $items['display_title'],
                'resumen' => $items['summary_short'],
                'url' => $items ['link']['url'],
                'imagen' => $items['multimedia']['src']
            ];
        }

        return view('index',['vj'=>$vj],['randomVJ'=>$randomVJ],['item' => $item]);
    }
    
    //mostrar juego individual
    public function mostrarJuego($id){
        $vj=VideoJuego::where('id',$id)->firstorFail();
        return view('Template/informacion',['vj'=>$vj]);
    }
    
    //Mortrar busqueda
    public function busquedaGenero($genero){
        $vj=VideoJuego::where('genero',$genero)->get();
        return view('Template/busqueda',['vj'=>$vj]);
    }
    
    public function busquedaPlataforma($plataforma){
        $vj=VideoJuego::where('plataforma',$plataforma)->get();
        return view('Template/busqueda',['vj'=>$vj]);
    }

   
}
