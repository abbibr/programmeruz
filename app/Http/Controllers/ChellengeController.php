<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout;
use App\Models\Transformation;
use Illuminate\Support\Facades\File;

class ChellengeController extends Controller
{
    public function transformation($id){
        $data = Workout::find($id);
        $transformation = Transformation::all();

        return view('transformation', ['datas' => $data, 'transformations' => $transformation]);
    }

    public function add(Request $req){
        $title = $req->title;
        $paragraph = $req->paragraph;
        $image = $req->file;
        $imageName = time().".".$image->extension();
        $image->move(public_path('images'),$imageName);

        $model = new Transformation();

        $model->title = $title;
        $model->paragraph = $paragraph;
        $model->image = $imageName;

        $model->save();
        return 'success';
    }
}
