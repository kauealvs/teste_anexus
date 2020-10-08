<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class HomeController extends Controller
{
    public function index(){
        $registros = Usuario::all();
        return view('home', compact('registros'));
    }

    public function insert(Request $request){
        $dados= $request->all();

        Usuario::create($dados);

        return redirect()->route('home');
    }
}
