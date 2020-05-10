<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the list of authors 
     * @return Illuminate\Http\Response 
     */
    public function index() 
    {
       
    }

    /**
     * Create one new author 
     * @return Illuminate\Http\Response 
     */
    public function store(Request $request) 
    {
        
    }

    /**
     * Obtains and show one author
     * @return Illuminate\Http\Response 
     */
    public function show($author) 
    {
       
    }
    
    /**
     * Update and existing author 
     * @return Illuminate\Http\Response 
     */
    public function update(Request $request, $author) 
    {
        
    }

    /**
     * Remove and existing author 
     * @return Illuminate\Http\Response 
     */
    public function destroy($author) 
    {
        
    }
}
