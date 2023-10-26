<?php

use App\Utils\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    $aboutMe = DB::getDocumentByFilename('about');

    return view('home.index', ['aboutMe' => $aboutMe]);
});

Route::get('/projects', function (){
    $projects = DB::getDocumentByFilename('projects');
    $categories = array_unique(array_map(fn ($p) => $p['category'], $projects));

    return view('projects.index', ['projects' => $projects, 'categories' => $categories]);
});

Route::get('/projects/{slug}', function (string $slug){
    $project = DB::getDocumentById('projects', fn ($p) => $p['slug'] == $slug);

    abort_if(is_null($project), 404);

    return view('projects.details', ['project' => $project]);
});

Route::get('/contact', function (){
    return view('contact.index');
});
