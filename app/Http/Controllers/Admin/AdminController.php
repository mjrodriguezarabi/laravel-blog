<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Index Backoffice Template
     */
    public function index($header = '', $description='', $breadcrumb = ''){

    	$header = 'Panel de Administración';
    	$description = 'Gestión del blog';

    	return view('admin.index', compact('header', 'description', 'breadcrumb'));
    }
}
