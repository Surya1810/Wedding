<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($name, $uniqid)
    {
        $invitation = Invitation::where('uniqid', $uniqid)->get();
        // dd($invitation[0]->name);
        return view('Template.Invitation', compact('invitation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $invitation = Invitation::all();
        return view('Template.create', compact('invitation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Invitation::create([
            'name' => $request->name,
            'uniqid' => Str::random(5),
            'link' => 'https://wedding.madebykraf.com/wedding/invitation/'
        ]);
        return redirect()->back()->with('success', 'Your Invitation Created');
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

    public function status_kehadiran(Request $request, $id)
    {
        // dd($id);
        if ($request->status == 'Hadir') {
            $status_kehadiran = Invitation::find($id);
            $status_kehadiran->status = $request->status;
            $status_kehadiran->nama = $request->nama;
            $status_kehadiran->jumlah = $request->jumlah;
            $status_kehadiran->save();
        } elseif ($request->status == 'Tidak Hadir') {
            $status_kehadiran = Invitation::find($id);
            $status_kehadiran->status = $request->status;
            $status_kehadiran->nama = $request->nama;
            $status_kehadiran->jumlah = $request->jumlah;
            $status_kehadiran->save();
        } else {
            $status_kehadiran = Invitation::find($id);
            $status_kehadiran->status = 'None';
            $status_kehadiran->save();
        }

        return redirect()->back()->with('success', 'Your Invitation Created');;
    }
}
