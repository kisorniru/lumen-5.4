<?php 

namespace App\Http\Controllers;

use DB;
use Auth;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use \App\NewsHeadLine as NewsHeadLine;

class NewsHeadLineController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		// $this->middleware('oauth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$NewsHeadLine = NewsHeadLine::all()->toJson();
		return $NewsHeadLine;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return "API Crete";
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request) {
		// Validation Rules will go here
		NewsHeadLine::create([
            'NewsTitle' 			=> $request->input('NewsTitle'),
            'NewsReporterName' 		=> $request->input('NewsReporterName'),
            'NewsReportingArea' 	=> $request->input('NewsReportingArea'),
            'NewsCategory' 			=> $request->input('NewsCategory'),
            'NewsSmallDescription' 	=> $request->input('NewsSmallDescription'),
            'NewsDetailsUrl' 		=> $request->input('NewsDetailsUrl'),
            ]);
		return response()->json(['Status' => '200', 'Message' => 'Successfully Inserted']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$NewsHeadLineShow = NewsHeadLine::find($id);
		if (!empty($NewsHeadLineShow)) {
			return $NewsHeadLineShow;
		}
		else {
			return response()->json(['Status' => '404', 'Message' => 'This user is not available to show']);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		return "API Edit";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id) {
		$NewsHeadLineUpdate = NewsHeadLine::find($id);
		if (!empty($NewsHeadLineUpdate)) {
			$NewsHeadLineUpdate->NewsTitle				=	$request->input('NewsTitle');
			$NewsHeadLineUpdate->NewsReportingArea		=	$request->input('NewsReportingArea');
			$NewsHeadLineUpdate->NewsCategory			=	$request->input('NewsCategory');
			$NewsHeadLineUpdate->NewsSmallDescription	=	$request->input('NewsSmallDescription');
			$NewsHeadLineUpdate->save();
			return response()->json($NewsHeadLineUpdate);
		}
		else {
			return response()->json(['Status' => '404', 'Message' => 'This user is not available for update']);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) { 
		$NewsHeadLineDelete = NewsHeadLine::find($id);
		if (!empty($NewsHeadLineDelete)) {
			$NewsHeadLineDelete->delete();
			return response()->json(['Status' => '200', 'Message' => 'User deleted Successfully']);
		}
		else {
			return response()->json(['Status' => '404', 'Message' => 'This user is not available for delete']);
		}
	}

}
