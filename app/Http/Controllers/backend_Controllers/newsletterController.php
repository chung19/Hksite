<?php

namespace App\Http\Controllers\backend_Controllers;
use App\Http\Controllers\Controller;
use App\Models\newsletter;
use Illuminate\Http\Request;
class newsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletter = Newsletter::latest()->paginate(5);
        return view('newsletter.index',compact('newsletter'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newsletter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            // $newsletter_img = new newsletter_img;
            'email' => 'required',
         
        ]);
  
        $input = $request->all();
        newsletter::create($input);
        return redirect()->route('newsletter.index')
                        ->with('success','newsletter created successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        return view('newsletter.show',compact('newsletter'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletter  $newslette
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        return view('newsletter.edit',compact('newsletter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletter  $newslette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        $request->validate([
            'email' => 'required',
          
        ]);
  
        $input = $request->all();
  
      
          
        $newsletter->update($input);
    
        return redirect()->route('newsletter.index')
                        ->with('success','newsletter updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newslette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();
        return redirect()->route('newsletter.index')
        ->with('success','newsletter deleted successfully');
       
    }
}