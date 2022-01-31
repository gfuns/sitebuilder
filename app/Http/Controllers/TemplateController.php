<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
class TemplateController extends Controller
{
    public function create_page(Request $request){

        $page = new Pages;
        $page->name = $request->name;
        $page->slug = preg_replace(" ", "-", $request->name);
        $page->save();

        return redirect('/')->with('status', 'Ajax Form Data Has Been validated and store into database');
 
    }
}

