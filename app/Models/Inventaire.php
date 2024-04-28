<?php

namespace App\Models;

use PDO; // sans cela, PDO serait interprété comme \App\Models\PDO
use \Illuminate\Support\Facades\DB;


class Inventaire{
    public static function getObjets(){
        $pdo = DB::getPdo();
        $objets = $pdo->query("select *
                                    from objets")->fetchAll();
        return $objets;
    }

    public static function joinObjEmp(){
        $pdo = DB::getPdo();
        $select = $pdo->query("select emplacements.id as id, emplacements.name as name, count(emplacements.name) as number
                                    from objets
                                    join emplacements on objets.emplacement_id = emplacements.id 
                                    group by id, name")->fetchAll();
        return $select;
    }

    public static function addObjet($name, $emplacement){

        DB::table('objets')->insert([
            'name' => $name,
            'emplacement_id' => $emplacement,
        ]);
    }

    public static function getApiObjets($id){
        $objets = DB::table('objets')->select('*')->where('emplacement_id', '=', $id)->get();
        return json_decode($objets);
    }
    
}