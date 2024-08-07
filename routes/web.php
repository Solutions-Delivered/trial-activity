<?php

use App\Http\Controllers\Website\HomeController;
    use App\Models\Faq;
    use App\Models\Project;
    use App\Models\Service;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/service/{service:name}', function (Service $service) {
    return $service->name;
})->name('service.show');

Route::get('/services', function () {
    $services = Service::all()->pluck('name');
    return $services->implode('<br>');  // Return the list of service names, each on a new line
})->name('services');

Route::get('/project/{project:name}', function (Project $project) {
    return $project->name;
})->name('project.show');

Route::get('/projects', function () {
    $projects = Project::all()->pluck('name');
    return $projects->implode('<br>');  // Return the list of project names, each on a new line
})->name('projects');

Route::get('/contact', function () {
    return 'Contact Page';  // Adjust this as needed
})->name('contact');

Route::get('/faqs', function () {
    // Assuming you have a Faq model
    $faqs = Faq::all()->pluck('question');
    return $faqs->implode('<br>');  // Return the list of FAQ questions, each on a new line
})->name('faqs');
