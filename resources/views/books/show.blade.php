<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Books</title>

    @include ('layouts.css')
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Books
        </div>

        @include ('layouts.buttons')

        <h5>{{$user->name}}'s books:</h5>
        <ul>
        @foreach($user->books as $book)
                <li>
         {{$book->title}} {{$book->author}} {{$book->description}}
                </li>
            @endforeach

        </ul>


    </div>
</div>
</body>
</html>
