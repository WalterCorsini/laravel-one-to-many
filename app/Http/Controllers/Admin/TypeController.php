<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeRequest;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeList = Type::all();
        return view("admin.types.index",compact("typeList"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors=['red','yellow','blue','green','pink','black'];
        return view("admin.types.create",compact("colors"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {
        $data = $request->validated();
        $type = new Type();
        $type->fill($data);
        $type->save();

        return redirect()->route('admin.types.index');
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
