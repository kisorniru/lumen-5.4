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
use \App\NewsDetails as NewsDetails;

class NewsDetailsController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		// $this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request) {
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($newsHeadLineId, $newsDetailsId) {

		$hasNewsHeadLineId 		= NewsHeadLine::find($newsHeadLineId);
		$hasNewsDetailsId 		= NewsDetails::find($newsDetailsId);

		if (!empty($hasNewsHeadLineId) && !empty($hasNewsDetailsId)) {

			$NewsDetailsShow 	= NewsDetails::select('newsheadline.id as headlineId', 'newsdetails.id as newsDetailsId', 'newsdetails.NewsHeadLineId as newsDetailsId_fromdetailsTable', 'newsheadline.NewsTitle', 'newsheadline.NewsReporterName', 'newsheadline.NewsReportingArea', 'newsheadline.NewsCategory', 'newsdetails.NewsDetails', 'newsdetails.NewsImagesUrl', 'newsdetails.created_at', 'newsdetails.updated_at' )
									->join('newsheadline', 'newsdetails.NewsHeadLineId', '=', 'newsheadline.id')
									->where('newsdetails.NewsHeadLineId', '=', $newsHeadLineId)
									->where('newsdetails.id', '=', $newsDetailsId)
								    ->first();

			if (!empty($NewsDetailsShow)) {

				return $NewsDetailsShow;

			}
			else {

				return response()->json(['Status' => '404', 'Message' => 'This News has no details']);
			}

		}
		else {

			return response()->json(['Status' => '404', 'Message' => 'This is not a news']);

		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id) {
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,Request $request) { 
	}

}
