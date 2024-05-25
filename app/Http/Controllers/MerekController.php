<?php

namespace App\Http\Controllers;
use App\Models\Mereks;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mereks = Mereks::latest()->paginate(5);
        return view ('merek.index', compact('mereks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('merek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valide form
        $this->validate($request, [
            'nama_merek' => 'required|min:5',
        ]);

        $merek = new Mereks();
        $merek->nama_merek = $request->nama_merek;
        $merek->save();
        return redirect()->route('merek.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merek = Mereks::findOrFail($id);
        return view('merek.show', compact('merek'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merek = Mereks::findOrFail($id);
        return view('merek.edit', compact('merek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_merek' => 'required|min:5',
        ]);

        $merek = Mereks::findOrFail($id);
        $merek->nama_merek = $request->nama_merek;
        $merek->save();
        return redirect()->route('merek.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merek = Mereks::findOrFail($id);
        $merek->delete();
        return redirect()->route('merek.index');
    }
}
