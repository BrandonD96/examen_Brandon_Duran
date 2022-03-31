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
        return view('index',['vj'=>$vj],['randomVJ'=>$randomVJ]);
    }
    
    //mostrar juego individual
    public function mostrarJuego($id){
        $vj=VideoJuego::where('id',$id)->firstorFail();
        //API
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET','https://api.nytimes.com/svc/movies/v2/reviews/picks.json?api-key=zAJhvJWAqEBi54766Z40CXLswqBymGsK');
        $datos = json_decode($response->getBody()->getContents(), true);
        //obtener elementos
        $movie = [];
        foreach($datos['results'] as $movies){
           $movie[] = [
                'titulo' => $movies['display_title'],
                'resumen' => $movies['summary_short'],
                'url' => $movies ['link']['url'],
                'imagen' => $movies['multimedia']['src']
            ];
        }
        return view('Template/informacion',['vj'=>$vj],['movie' => $movie]);
    }
    
    //Mortrar busqueda
    public function busquedaGenero($genero){
        $vj=VideoJuego::where('genero',$genero)->get();
        //API
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET','https://api.nytimes.com/svc/movies/v2/reviews/picks.json?api-key=zAJhvJWAqEBi54766Z40CXLswqBymGsK');
        $datos = json_decode($response->getBody()->getContents(), true);
        //obtener elementos
        $movie = [];
        foreach($datos['results'] as $movies){
           $movie[] = [
                'titulo' => $movies['display_title'],
                'resumen' => $movies['summary_short'],
                'url' => $movies ['link']['url'],
                'imagen' => $movies['multimedia']['src']
            ];
        }
        return view('Template/busqueda',['vj'=>$vj],['movie' => $movie]);
    }
    
    public function busquedaPlataforma($plataforma){
        $vj=VideoJuego::where('plataforma',$plataforma)->get();
        //API
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET','https://api.nytimes.com/svc/movies/v2/reviews/picks.json?api-key=zAJhvJWAqEBi54766Z40CXLswqBymGsK');
        $datos = json_decode($response->getBody()->getContents(), true);
        //obtener elementos
        $movie = [];
        foreach($datos['results'] as $movies){
           $movie[] = [
                'titulo' => $movies['display_title'],
                'resumen' => $movies['summary_short'],
                'url' => $movies ['link']['url'],
                'imagen' => $movies['multimedia']['src']
            ];
        }
        return view('Template/busqueda',['vj'=>$vj],['movie' => $movie]);
    }

   
}
