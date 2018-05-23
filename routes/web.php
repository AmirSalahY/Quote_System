<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {

    // Get Random Quotes for Home page

    $quotes = DB::connection('mysql')->table('quotes')
        ->inRandomOrder()
        ->limit(15)
        ->get();

    // Get the Quote of the Day
    #ToDo Put it's function later To Change every day
    $maqoola = DB::table('quotes')->where('quote_id', '150')->first();;
    $author = DB::table('quote_author')->where('author_id', '150')->first();;
    $maqoola->author = $author->author_name;
    // Return Result to view
    return view('child', compact('quotes', 'maqoola'));


//
//    try{
//        return "te";
//    }
//    catch (Exception  $e){
//        $e->getMessage();
//    }


});