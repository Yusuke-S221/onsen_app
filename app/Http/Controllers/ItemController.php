<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // dummy data
        $item = [
          (object) [
              'id' => 1,
              'name' => 'sample1',
              'created_at' => now()
          ],
          (object) [
              'id' => 2,
              'name' => 'sample2',
              'created_at' => now()
          ],
        ];

        return view('item.index', ['item' => $item]);
    }
}
