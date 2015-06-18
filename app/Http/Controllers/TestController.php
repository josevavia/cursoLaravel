<?php namespace laravelsamples\Http\Controllers;

use laravelsamples\Http\Requests;
use laravelsamples\Http\Controllers\Controller;

use laravelsamples\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TestController extends Controller {

    function __construct() {
        $this->middleware('testmiddleware');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::paginate(15);

        $users->setPath(config('app.url').'/users/pagina');

        return view('users.list', array('users' => $users));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editar(Request $request, $id)
	{
        $this->middleware('testmiddleware');

		echo "editando: ".$id.'<br/>';

        echo $request->input('id').'<br/>';

        dd(Input::all());

        dd($request->input('id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
