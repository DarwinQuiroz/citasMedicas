<?php

namespace App\Http\Controllers;

use App\Specialty;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Crypt;

class SpecialtyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $specialties = Specialty::orderBy('name', 'DESC')->paginate(10);

        return view('specialties.index', compact('specialties'));
    }

    public function create()
    {
        $specialty = new Specialty;
        return view('specialties.create', compact('specialty'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5|unique:specialties,name',
            'description' => 'nullable'
        ]);

        Specialty::create($request->all());
        return redirect()->route('specialties.index')->with('notification', 'Especialidad creada correctamente.');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);

        $specialty = Specialty::findOrFail($id);

        return view('specialties.edit', compact('specialty'));
    }

    public function update(Request $request, $id)
    {
        $id = Crypt::decrypt($id);

        $this->validate($request, [
            'name' => [
                'required',
                'min:5',
                Rule::unique('specialties')->ignore($id),
            ],
            'description' => 'nullable'
        ]);

        $specialty = Specialty::findOrFail($id);
        $specialty->name = $request->name;
        $specialty->description = $request->description;
        $specialty->save();

        return redirect()->route('specialties.index')->with('notification', 'Especialidad actualizada correctamente.');
    }

    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        $specialty = Specialty::findOrFail($id);
        $deletedname = $specialty->name;
        $specialty->delete();
        return redirect()->route('specialties.index')->with('notification', "Especialidad $deletedname eliminada correctamente.");
    }
}
