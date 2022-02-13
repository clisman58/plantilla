<?php

namespace App\Http\Controllers\Graduados;

use App\Models\Graduado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GraduadoController extends Controller
{

    public function index()
    {
        $graduados = Graduado::get();

        return view('graduados.index', compact('graduados'));

    }

    public function create()
    {
        return view('graduados.create');

    }

    public function store(Request $request)
    {
        Graduado::create($request->all());

        return redirect()->route('graduados.index');
    }

    public function edit($id)
    {
        $graduados = Graduado::find($id);

        return view('graduados.edit', compact('graduados'));
    }

    public function update(Request $request, Graduado $graduados)
    {
        $graduados->update($request->all());
        return redirect()->route('graduados.index');
    }

}
