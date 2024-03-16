<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $team_members = TeamMember::limit(8)->get();
        $services = Service::limit(5)->get();
        $projects = Project::limit(6)->get();

        // return $team_members;
        return view(
            'website.home.index',
            compact(
                'team_members',
                'services',
                'projects'
            )
        );
    }
}
