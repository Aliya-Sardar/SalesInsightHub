<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MlController extends Controller
{

    public function index() 
    {
        return view('index');
    }

    public function salesInsight() 
    {
        return view('salesInsight');
    }


    public function predict(Request $request)
    {
        // execute the python file from the cmd
        $command = escapeshellcmd("python C:\Users\aliya\Desktop\LaibaProject\MarketBasketAnalysis\storage\app\MLmodel\scriptP.py {{$request->input('item')}}");
        $output = shell_exec($command);
        
        // Convert the output string to a PHP array
        $output = json_decode($output, true);
        
        return view('result' , compact('output'));
    }

    public function predict2(Request $request)
    {
        // Load the machine learning model from the file using pickle in Python
        $modelFile = storage_path('app\MLmodel\model.pickle');
        $model = file_get_contents($modelFile);
        $model = unserialize($model);

        var_dump($model);
        // Preprocess the incoming data (if needed)
        $data = $request->input('item');
        // Perform any necessary data preprocessing here

        // Make predictions using the loaded model
        $predictions = $model->predict($data);

        // Return the predictions as a response
        dd($predictions);
        return redirect()->route('');;
    }

    public function hello () {
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
     }
}
