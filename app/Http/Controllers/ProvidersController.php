<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Provider;
use App\Review;
use App\Http\Requests\CreateProviderRequest;



class ProvidersController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * Displays the providers 'have your say' page.
     *
     * @return Response
     */
    public function index(Provider $provider)
    {
        $providers = $provider->get();
        return view('providers.index', compact('providers'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * Form for creating a new provider.
     *
     * @return Response
     */
    public function create()
    {
        return view ('providers.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateProviderRequest $request, Provider $provider)
    {
        //Interact with Eloquent model. Grab all input and it will be returned as an array.
        //Pass to create method of Eloquent model and save to database.
        $provider->create($request->all());
        return redirect()->route('providers.index');
    }
    /**
     * Display the specified resource.
     *
     * Show a specific provider. Information pulled through.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Provider $provider)
    {

        return view('providers.show', compact('provider'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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