<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PortfolioController extends BaseController
{
    public function index()
    {
        return view('index');
    }
}
