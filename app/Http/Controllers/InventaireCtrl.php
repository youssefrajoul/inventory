<?php

namespace App\Http\Controllers;
use App\Models\Inventaire;
use Illuminate\Http\Request;


// use App\Models\;


class InventaireCtrl extends Controller
{
    
    public function home()
    {
        $objets = Inventaire::getObjets();
        $size = $this->countObjets($objets);
        return view('home', ['size' => $size]);
    }

    public function countObjets($objets){
        return count($objets);
    }

    public function emplacements(){
        $emplacements = Inventaire::joinObjEmp();
        return view('emplacements', ['emplacements' => $emplacements]);
    }

    public function ajouter(Request $request){

        if ($request->has('submit')) {

            $objet = $_GET['objet']  ?? null;
            $emplacement = $_GET['emplacement']  ?? null;
    
    
            Inventaire::addObjet($objet, $emplacement);
        }

        // if ($objet !== null && $emplacement !== null) {
        //         Inventaire::addObjet($objet, $emplacement);
        //         $message = "L'objet .$objet.' a été enregistrée.";
        //         return view('ajouter', ['message' => $message]);
        // } else {
        //     $message = "";
        //     return view('ajouter', ['message' => $message]);
        // }

        return view('ajouter');
    }

    public function getApi($id){
        $objets = Inventaire::getApiObjets($id);
        return $objets;
     }

}