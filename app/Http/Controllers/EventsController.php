<?php

namespace App\Http\Controllers;

use App\Event;
use App\Country;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('country')->country()->paginate(50);

        return view('events.index',[
            'events'=>$events,
        ]);
    }
	
	public function getNextEvents(){
		$actualDate = date(('Y-m-d'));
		$country = Country::where('code', session('country'))->get()->first();
		
		$events = Event::where('country_id', $country->id)->where('date_start', '>=', $actualDate)->get();
		
		return $events;
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$countries = Country::all();
		return view('events.create',[
            'countries'=>$countries,
        ]);
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
            'title'=>['required','string'],
            'description'=>['required','string'],
            'date_start'=>['required','date'],
            'hour'=>['required','string'],
            'address'=>['required','string'],
            'temary'=>['required','string'],
            'about'=>['required','string'],
            'price'=>['required','numeric'],
            'img'=>['required','file'],
            'contry_id'=>['required', 'string'],
        ]);

        $country = Country::where('code',app('config')->get('app.country'))->first();

        if(!$country){
            abort(404);
        };

        Event::create([
            'name'=>$request->input('title'),
            'description'=>$request->input('description'),
            'date_start'=>$request->input('date_start'),
            'hour'=>$request->input('hour'),
            'address'=>$request->input('address'),
            'temary'=>$request->input('temary'),
            'about_event'=>$request->input('about'),
            'price'=>$request->input('price'),
            'country_id'=>$request->input('contry_id'),
            'img'=>$request->file('img')->store('img_events','public'),
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }
}
