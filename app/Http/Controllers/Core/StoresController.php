<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Core\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $allStores = Store::all();

        return response()->json($allStores, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|max:100',
//            'email' => 'required|unique:students|max:100|email',
//            'birth_date' => 'required'
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json([
//                "message" => "Error - " . $validator->getMessageBag()
//            ], 400);
//        }

        $data = $request->all();
        try {
            Store::create($data);
        } catch (\Exception $exception) {
            return response()->json([
                "message" => "Error - Store not created: " . $exception->getMessage()
            ], 400);
        }

        return response()->json([
            "message" => "Success - Store created"
        ], 201);

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
