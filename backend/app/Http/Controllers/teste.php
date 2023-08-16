<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teste extends Controller
{
    public function teste() {
        info('cheguei');
        return response('cheguei', 200);
    }
}
