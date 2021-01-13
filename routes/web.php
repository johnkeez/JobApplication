<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//This fetches all jobs created by admin
Route::get('/jobs/fetch', 'JobsController@index')->name('jobs');
//This fetches a single job postinf with its unique ID
Route::get('/jobs/fetch/{id}', 'JobsController@find_job')->name('get-job');
//This fetches candidates who applied for a particular job
Route::get('/jobs/fetch-applicants/{job_id}', 'JobsController@applicants')->name('get_applicants');

