<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
    }

    public function login() {
        $data = [  'title' => 'Halaman Login', ];
        return view('auth.login',$data);
    }
    public function register() {
        $data = [  'title' => 'Halaman Register', ];
        return view('auth.register',$data);
    }
    public function lupa_pw() {
        $data = [  'title' => 'Halaman Lupa Password', ];
        return view('auth.lupa-pw',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
