<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmeruz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    <div class="container">
        <h2 class="header">{{ $datas->title }}</h2>
        <p id="head">{{ $datas->paragraph }}</p>

        <div class="navbar">
            <div class="nav">
                <i class="fas fa-chevron-right"></i>
                <p>Beginner</p>
            </div>
            <div class="nav">
                <i class="fas fa-dumbbell"></i>
                <p>Calories</p>
            </div>
            <div class="nav">
                <i class="fas fa-clock"></i>
                <p>Minutes</p>
            </div>
        </div>

        <div class="block">

            @foreach ($transformations as $transformation)
                <div class="block1">
                    <div class="text">
                        <div class="img">
                            <img src="{{ asset('images') }}/{{ $transformation->image }}">
                        </div>
                        <div class="textone">
                            <h3>{{ $transformation->title }}</h3>
                            <p>{{ $transformation->paragraph }}</p>
                        </div>
                    </div>
                    <div class="dot">
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                </div> 
            @endforeach

        </div>
    </div>

</body>
</html>