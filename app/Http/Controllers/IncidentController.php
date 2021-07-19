<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Incident;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class IncidentController extends Controller
{

    public function getIncidents() {
        $incidents = Incident::paginate(5);
        $response = array('success'=>true, 'response' => ['data' => $incidents]);
        return $response;    }

    public function createIncident(Request $request) {

        // return $request->location;
        $validator = Validator::make($request->all(), [
            'location' => 'required',
            'category_id' => 'required|integer',
            'title' => 'required|string',
            'people' => 'required',
            'comments' => 'required|string',
            'incident_date' => 'required',
        ]);

        $response = array('response' => '', 'success'=>false);

        if ($validator->fails()) {
            $response['response'] = $validator->errors();
            return $response;
        }

        $incident = [];
        
        $incident['location'] = $request->location;
        $incident['category_id'] = $request->category_id;
        $incident['title'] = $request->title;
        $incident['people'] = $request->people;
        $incident['comments'] = $request->comments;
        $incident['incident_date'] = $request->incident_date;
        $create = Incident::create($incident);

        if(!$create){
            $response = array('response' => 'Something went wrong', 'success'=>false);
            return $response;
        }
        $response = array('response' => 'Incident created', 'success'=>true);
        return $response;
    }
}
