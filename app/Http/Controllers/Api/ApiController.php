<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){

        $projects = Project::with('technologies', 'type')->paginate(20);

        return response()->json(
            [
                'success' => true,
                'results' => $projects,
            ]
        );
    }
}
