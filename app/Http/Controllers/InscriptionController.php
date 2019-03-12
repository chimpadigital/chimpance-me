<?php

namespace App\Http\Controllers;

use App\Inscription;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailAdminBank;
use App\Mail\EmailUserBank;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required|string',
            'phone'=>'required|string',
            'email'=>'required|string|email',
            'message'=>'required|string',
            'method_payment'=>'required|string',
            'event'=>'required|exists:events,id',
        ]);

        $payment_methods = [
            'transferencia',
            'mercado_pago'
        ];

        if (!in_array($request->input('method_payment'), $payment_methods)) {
            abort(404);
        }

        session()->put('inscription',$request->all());
		
		session()->put('inscriptionMail', $request->input('email'));

        /*
        Inscription::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'questions'=>$request->input('message'),
            'event_id'=>$request->input('event'),
            
        ]);*/

        if ($request->input('method_payment') == 'mercado_pago') 
        {
            
            return redirect()->route('events.payments');    
        }
        else
        {
            $session = session('inscription');

            $event = Event::where('id',$session['event'])->first();

            Mail::to('admin@admin.com')->send(new EmailAdminBank($event,$session));

            Mail::to($session['email'])->send(new EmailUserBank($event,$session));

            return view('shoping.thanks',
                [
                'event'=>$event,
                ]);

        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}
