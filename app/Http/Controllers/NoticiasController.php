<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;

class NoticiasController extends Controller
{
    public function abrirCadastro()
    {
        return view('cadastro_noticias');
    }

    public function cadastrarNoticia(Request $request)
    {
        $not = new Noticias();
        $not->titulo = $request->titulo;
        $not->texto = $request->texto;
        $not->data = $request->data;
        $not->url = $request->url;
        $not->tipo = $request->tipo;
        $not->save();
        return view('adm-page')->with(['msg' => 'Notícia cadastrada com sucesso!']);
    }

    public function consultarNoticia()
    {
        $dadosNoticias = Noticias::all();
        return view('consulta_noticia',['dadosNoticias' => $dadosNoticias]);
    }

    public function index()
    {
        $dadosNotVideos = Noticias::where('tipo','videos')->get();
        $teste = " - Noticias";
        return view('index',['dadosNotVideos' => $dadosNotVideos, 'teste' => $teste]);
    }
}
