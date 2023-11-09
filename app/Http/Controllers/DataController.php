<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    private $rawskins = array();
    private $skins = array();

    public function __construct() {
        $this->rawskins = Storage::json('public/items-17.json');
        foreach ($this->rawskins["results"] as $skin){
            $this->skins[] = $skin['name'];
        }

    }

    public function index() {

        $data = [
            'skins' => $this->skins,

        ];


        return view("home", $data);
    }



}
