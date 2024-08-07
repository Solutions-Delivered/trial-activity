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

        return view(
            'website.home.index',
            compact(
                'team_members',
                'services',
                'projects'
            )
        );
    }

    public function service(Request $request, Service $service)
    {
        // just display the name of the service on the screen

    }

    public function services(Request $request)
    {
        $results = ['tenant' => tenant(), 'services' => tenant()->tenantServices()->get()];

        return $this->themedView('services', $results);
    }

    public function project(Request $request, $slug)
    {
        $project = tenant()->tenantProjects()->where('slug', $slug)->first();

        if (!$project) {
            return redirect()->route('tenant.projects')
                ->with('error', 'Project not found!');
        }

        return $this->themedView('project', compact('project'));
    }

    public function projects(Request $request)
    {
        $results = ['tenant' => tenant(), 'projects' => tenant()->tenantProjects()->get()];

        return $this->themedView('projects', $results);
    }

    public function faqs(Request $request)
    {
        $faqs = tenant()->tenantFaqs()->get();

        // Go through faqs and run Helpers->tenantReplace on the answer
        foreach ($faqs as $faq) {
            $faq->question = Helpers::tenantReplace($faq->question);
            $faq->answer = Helpers::tenantReplace($faq->answer);
        }

        $results = ['tenant' => tenant(), 'faqs' => $faqs];

        return $this->themedView('faqs', $results);
    }
}
