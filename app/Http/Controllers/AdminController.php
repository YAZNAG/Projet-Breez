<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Méthode pour afficher le tableau de bord de l'interface administrateur
    public function index()
    {
        return view('admin.dashboard');
    }

    // Autres méthodes pour gérer les fonctionnalités spécifiques aux administrateurs
}
