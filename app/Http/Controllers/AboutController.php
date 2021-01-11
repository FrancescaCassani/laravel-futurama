<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function Ramsey\Uuid\v1;

class AboutController extends Controller
{
    public function show($id) 
    {
        $data = config('futurama');

        $charFiltered = [];

        foreach ($data as $item) {
            if($item['id'] == $id) {
                $charFiltered = $item; //il carattere filtrato è uguale al valore item
            break;
            }
        }
        return view('character-detail', compact('charFiltered'));
    }
}
