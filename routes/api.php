<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//This fetches all jobs created by admin
Route::get('/jobs/fetch', 'JobsController@index');
//This fetches a single job postinf with its unique ID
Route::get('/jobs/fetch/{id}', 'JobsController@find_job');
//This fetched candidates who applied for a particular job.
Route::get('/jobs/fetch-applicants/{job_id}', 'JobsController@applicants');
