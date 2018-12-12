<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = DB::table('vw_paciente')->get();
        return response()->json(['data' => $pacientes], 200);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'pacNombre' => 'required',
            'pacEspecie' => 'required',
            'pacRaza' => 'required',
            'pacSexo' => 'required',
            'pacRaza' => 'required',
            'cliID' => 'required',
            'pacEstado' => 'required',
            'pacUser' => 'required',
            'pacElimina' => 'required',

        ];

        $this->validate($request, $reglas);
        $campos = $request->all();
        $campos['pacFechaNaci'] = date('Y-m-d');
        $campos['pacfec'] = date('Y-m-d H:i:s');
        $campos['pacModificacion'] = date('Y-m-d H:i:s');
        $paciente = Patient::create($campos);
        return response()->json(['data' => $paciente], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Patient::where('pacID', $id)->firstOrFail();
        return response()->json(['data' => $paciente], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
