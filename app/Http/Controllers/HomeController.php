<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout;
use App\Models\Challenge;

class HomeController extends Controller
{

    public function getAll()
    {
        $challenge = Challenge::all();
        $workout = Workout::all();

        return view('welcome', [ 'challenges' => $challenge, 'workouts' => $workout]);
    }

    public function image(Request $req){
        $title = $req->title;
        $paragraph = $req->paragraph;
        $image = $req->file;
        $imageName = time().".".$image->extension();
        $image->move(public_path('images'),$imageName);

        $model = new Workout();

        $model->title = $title;
        $model->paragraph = $paragraph;
        $model->image = $imageName;

        $model->save();

        return 'success';
    }

    public function files(Request $req){
        $title = $req->title;
        $week = $req->week;
        $percent = $req->percent;
        $image = $req->file;
        $imageName = time().".".$image->extension();
        $image->move(public_path('images'),$imageName);

        $model = new Challenge();

        $model->title = $title;
        $model->week = $week;
        $model->percent = $percent;
        $model->image = $imageName;

        $model->save();

        return 'success';
    }
}
