<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*

	$app->get('/', function () use ($app) {
	    // return $app->version();
	    return phpinfo();
	});

*/

$app->group(['prefix' => 'newsHeadLine/api/v1'], function($app) {

	$app->get('/', 'NewsHeadLineController@index');						//Done
	$app->post('/store', 'NewsHeadLineController@store');				//Done
	$app->get('/show/{id}', 'NewsHeadLineController@show');				//Done
	$app->put('/update/{id}', 'NewsHeadLineController@update');			//Done
	$app->delete('/destroy/{id}', 'NewsHeadLineController@destroy');	//Done

});

$app->group(['prefix' => 'newsDetails/api/v1'], function($app) {

	// $app->get('/', 'NewsDetailsController@index');						//Done
	// $app->post('/store', 'NewsDetailsController@store');				//Done
	$app->get('/show/{newsHeadLineId}/{newsDetailsId}', 'NewsDetailsController@show');				//Done
	// $app->put('/update/{id}', 'NewsDetailsController@update');			//Done
	// $app->delete('/destroy/{id}', 'NewsDetailsController@destroy');	//Done

});