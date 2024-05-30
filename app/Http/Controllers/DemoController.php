<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class DemoController extends Controller {
    public function index(): Response {
        Inertia::setRootView('admin');
        return Inertia::render('Admin/Demo');
    }
}
