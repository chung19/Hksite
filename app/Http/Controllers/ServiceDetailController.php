<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
    public function index(){
        $services = Service::latest()->paginate(6);

        return view('servicedetails',compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show(Service $service)
    {
        return view('showDetails',compact('service'));
    }
    public function show1(Service $service, $id)
    {
        $service = Service::find($id);
        return view('ShowDetails',compact('service'));
    }

}
