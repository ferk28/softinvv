<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Http\Requests\AreaFormRequest;
use Auth;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area = Area::all();
        return view('area.index',compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaFormRequest $request)
    {
        $area=new Area;
        $area->name=$request->input('name');
        $area->user_id=Auth::user()->id;
        $area->save();
        return redirect('area')->with('message','El area ha sido agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        return view('area.edit',compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaFormRequest $request, Area $area)
    {
        $area->name=$request->input('name');
        $area->user_id=Auth::user()->id;
        $area->save();
        return redirect()
            ->route('area.index', ['area' => $area])
            ->with('message','El area de ha sido actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()
        ->route('area.index')
        ->with('message-error','El registro ha sido borrado de la base de datos con exito');
    }
}
