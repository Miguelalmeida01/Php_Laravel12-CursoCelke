<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // listar os usuários
    public function index()
    {
        // carregar uma view 
        return view('users.index');
    }
    // detalhes do usuário 
    public function show()
    {
      return view('users.show');
    }
    // Carregar o formulário cadastrado novo usuário
    public function create()
    {
      return view('users.create');
    }
    // Carregar o formulário editar usuário
    public function edit()
    {
      return view('users.edit');
    }
}
