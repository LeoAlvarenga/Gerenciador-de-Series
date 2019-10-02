<?php


namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nomes')->get();

        return view('series.index', compact('series'));
    }

    public function create(Request $request)
    {
        return view('series/create');
    }

    public function store(Request $request)
    {
        $nome = $request->get('nome');
        $serie = new Serie();
        $serie->nomes = $nome;
        $serie->save();

        return redirect('/series');
    }
}
