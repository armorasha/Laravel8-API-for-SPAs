<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PerformanceData;

class PerformanceDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // http://localhost/api/performancedata
    {
        //
        $listPerformanceData = PerformanceData::all();
        return $listPerformanceData;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // create a new record. tested using postman. see docx
    {
        //
        $createPerformanceData = PerformanceData::create($request->all());
        return  $createPerformanceData;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) // http://localhost/api/performancedata/1
    {
        //
        $performanceData = PerformanceData::findOrFail($id);
        return $performanceData;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //  update a record. tested using postman. see docx
    {
        //
        $updatePerformanceDataById = PerformanceData::findOrFail($id);
        $updatePerformanceDataById->update($request->all());
        return $updatePerformanceDataById;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //  delete a record. tested using postman. see docx
    {
        //
        $deletePerformanceDataById = PerformanceData::find($id)->delete();
        return response()->json([], 204);
    }
}
