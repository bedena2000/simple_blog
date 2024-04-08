<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Link extends Controller
{
    public function save($name) {
        DB::insert('INSERT INTO tasks (id, name, created_at, updated_at) VALUES (?, ?, ?, ?)', [NULL, $name, NULL, NULL]);
    }
}
