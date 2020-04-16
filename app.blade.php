<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Bootstrap -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbars/"> <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .global__wrapper {
            padding: 50px 0;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
</head>

<body>
    <div class="global__wrapper">
        <div class="container">

            @yield('content')



        </div>


    </div>


    <div class="container">
        <ul class="list-group mt-5">
            @foreach($tasks as $tasks)


            <li class="list-group-item d-flex align-items-center">
                <div class='' style="width:30px;">{{$tasks->id}}</div>
                <div class='pl-3  border-left'>{{$tasks->name}}</div>

                {{ !! Form::open(['route'=>['tasks.delete',tasks->id],'method'=>'DELETE']) !! }}
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                {{ !! Form::close() !! }}

            </li> @endforeach </ul>
    </div>
</body>

</html>
