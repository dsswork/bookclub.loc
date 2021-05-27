<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Users</title>

    @include ('layouts.css')
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Users
        </div>

        @include ('layouts.buttons')

        <h5>All users</h5>
        <ul>
            @foreach($users as $user)
                <li>
                    @auth
                        <a href="{{ route('books.usersBooks', ['user_id'=>$user->id]) }}">{{$user->name}}</a>
                    @endauth
                    @guest
                        {{$user->name}}
                    @endguest
                </li>
            @endforeach

        </ul>
    </div>
</div>


</body>
</html>
