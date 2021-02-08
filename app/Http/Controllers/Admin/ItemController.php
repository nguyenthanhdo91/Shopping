<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){

        return view ('admin.item.index');
    
    //
    }
    public function add (ItemRequest $request)
        {
            $post = $request ->all();
            Item ::create($post);
            return redirect()->route('admin.item.index');

        }
    

    
}

