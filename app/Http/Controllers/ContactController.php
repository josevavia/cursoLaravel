<?php namespace laravelsamples\Http\Controllers;

use Illuminate\Mail\Message;
use laravelsamples\Http\Requests;
use laravelsamples\Http\Controllers\Controller;

use laravelsamples\Http\Requests\ContactFormRequest;
use Mail;
use Redirect;
use Request;
use Response;

class ContactController extends Controller {


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('contact.form');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function send(ContactFormRequest $request)
	{
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'mensaje' => $request->get('message')
        ];
        Mail::send('contact.email', $data,
            function (Message $message) {
                $message->from('system@prueba.es');
                $message->to('micromante@gmail.com', 'Admin');
                $message->subject('Tienes un mensaje');
            }
        );
        return Redirect::route('contact')->with(['message' => 'Gracias por enviarnos el contacto']);
	}

}
