<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Livros;
use App\Versos;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome(){
        $livros = Livros::all();
        // dd($livros);
        return view('welcome', compact('livros'));
    }

    public function chapter($cod, $livro){
        $verses = Versos::where('book', $cod)->groupBy('chapter','book')->select('chapter','book')->get();
        // dd($verses);
        return view('chapter', compact('verses', 'livro'));
    }

    public function verse($cod, $book, $livro){
        // dd($book, $cod, $livro);
        $verses = Versos::where('chapter', $cod)->where('book', $book)->get();
        // dd($verses[0]->chapter);
        return view('verse', compact('verses','livro', 'cod'));
    }
}
