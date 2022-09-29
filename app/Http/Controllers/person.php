<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class person extends Controller {
    public function person() {
        return view("person");
    }
}
