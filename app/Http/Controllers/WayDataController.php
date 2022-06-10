<?php

namespace App\Http\Controllers;

use App\Models\WayData;
use Illuminate\Http\Request;
use DB;



class WayDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = WayData::all();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
                'user_id' => 'required',
                'vid' => 'required',
                'city' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'pin' => 'required',
                'country' => 'required',
                'phone' => 'required',
                'add' => 'required',
                'token' => 'required',
                'order_prefix' => 'required',
            ]);

        // dd($request); die;
            
            
            $wb_data = new WayData();
            
            $wb_data->user_id = $request->user_id;
            $wb_data->vid = $request->vid;
            $wb_data->city = $request->city;
            $wb_data->name = $request->name;
            $wb_data->pin = $request->pin;
            $wb_data->country = $request->country;
            $wb_data->phone = $request->phone;
            $wb_data->add = $request->add;
            $wb_data->token = $request->token;
            $wb_data->order_prefix = $request->order_prefix;
            
            $wb_data->save();
            return response()->json(['error' => false,'data' => $wb_data],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WayData  $wayData
     * @return \Illuminate\Http\Response
     */
    public function show(WayData $wayData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WayData  $wayData
     * @return \Illuminate\Http\Response
     */
    public function edit(WayData $wayData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WayData  $wayData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WayData $wayData)
    {
        $request->validate([
                'user_id' => 'required',
                'vid' => 'required',
                'city' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'pin' => 'required',
                'country' => 'required',
                'phone' => 'required',
                'add' => 'required',
                'token' => 'required',
                'order_prefix' => 'required',
            ]);
            
            
            $wb_data = WayData::find((int)$request->id);
            
            $wb_data->user_id = $request->user_id;
            $wb_data->vid = $request->vid;
            $wb_data->city = $request->city;
            $wb_data->name = $request->name;
            $wb_data->pin = $request->pin;
            $wb_data->country = $request->country;
            $wb_data->phone = $request->phone;
            $wb_data->add = $request->add;
            $wb_data->token = $request->token;
            $wb_data->order_prefix = $request->order_prefix;
            
            $wb_data->save();
            return response()->json(['error' => false,'data' => $wb_data],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WayData  $wayData
     * @return \Illuminate\Http\Response
     */
    public function destroy(WayData $wayData)
    {
        //
    }

    public function getAWBLocation(Request $request)
    {
        $awb_record =DB::table("way_data")
            ->where('vid',$request->vid)
            ->where('user_id',$request->user_id)
            ->get()->toArray();

        if(!empty($awb_record)){
            return $awb_record;
        }else{
           return response()->json(['error' => false, 'msg' => "No Data found.","ErrorCode" => "000"],200);
        }
    }
}
