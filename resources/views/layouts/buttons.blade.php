<div class="links">
    <a href="{{ route('home')}}">Home page</a>
    <a href="{{ route('users') }}">Users</a>
    @auth
        <a href="{{ route('books.myBooks')}}">My Books</a>
        <a href="{{ route('books.add') }}">Add new book</a>
    @endauth
    @guest()
        <a href="{{ route('register.create') }}">Register</a>
        <a href="{{ route('login.create') }}">Login</a>
    @endguest
    @auth
        <a href="{{ route('logout') }}">Logout</a>
    @endauth
</div>
