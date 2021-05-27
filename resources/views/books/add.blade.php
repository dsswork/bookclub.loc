<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add new book</title>
    @include ('layouts.css')

</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Add new book
        </div>
        @include ('layouts.buttons')
        <div class="container">
            <form method="post" action="{{ route('books.create') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Title</label>
                    <input type="title" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="author" class="form-control" id="author" name="author" value="{{ old('author') }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="description" class="form-control" id="description" name="description" cols="20"
                              rows="20">
                        </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add new book</button>
            </form>
        </div>
</body>
</html>
