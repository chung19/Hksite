<?php
namespace App\Http\Controllers\backend_Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
// use Illuminate\Support\Facades\Mail;
class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
      return view('frontend.contact');
    }
    
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // dd($request->all());die();
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required',
     
         ]);
        //  Store data in database
        Contact::create($request->all());
        //  Send mail to admin
        \Mail::send('backend.mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ),
         function($message) use ($request){
            $message->from($request->email);
            $message->to('hoangkhangsuport@gmail.com', '0394622960')->subject($request->get('subject'));
        });
        return back()->withErrors(['success' => 'We have received your message and would like to thank you for writing to us.']);
    }
}