<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function form()
    {
        return view('table');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validator=Validator::make($request->all(),[
            'name'=>'required|min:3',
            'data_type'=>'required',
            'pol'=>'required'
        ]);
        // dd( $validator);
        $data=$request->get('data_type');
        $lastData=date("Y-m-d-H:i");
        $a1=(int)substr($data,0,4);
        $b1=(int)substr($data,5,2);
        $c1=(int)substr($data,8,2);
        $a2=(int)substr($lastData,0,4);
        $b2=(int)substr($lastData,5,2);
        $c2=(int)substr($lastData,8,2);
        $pls=((int)$a2*365+(int)$b2*30+(int)$c2)-((int)$a1*365+(int)$b1*30+(int)$c1);
        $pulsData=$pls*24*60;
        (int)$minut=(int)substr($lastData,11,2)*60+(int)substr($lastData,14,2)+$pulsData;

        if($request->get('pol')=="мужчина"){
            $puls=$minut*70;
        }
        if($request->get('pol')=="женщина"){
            $puls=$minut*78;
        }
        if($validator->fails()){

            return response()->json([
                'status'=>false,
                'data'=>$validator->errors()
            ]);
        }
        if( $puls<=0){
            return response()->json([
                'status'=>false,
                'data'=>"sana ma'lumoti hato !"
            ]);
        }
        else{
            return response()->json([
                'status'=>true,
                'name'=>$request->get('name'),
                'data_type'=>$data,
                'blood'=>$puls
            ]);
        }


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
    public function edit($id)
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
