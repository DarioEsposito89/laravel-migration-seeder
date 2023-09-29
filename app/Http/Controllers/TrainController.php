<?php

namespace App\Http\Controllers;

// Importo model
use App\Models\Train;
use Illuminate\Http\Request;


// Controller per i treni
class TrainController extends Controller
{
    // Funzione che mostra i treni all'interno della tabella
    public function index(){
        $trains = Train::all();
        return view('card', compact('trains'));
    }
}