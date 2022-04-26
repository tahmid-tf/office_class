<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div>
    <h3>Create Form</h3>
    <hr>

    <form action="{{ route('book.store') }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="text" name="title" placeholder="Enter Title"
                   class="form-control @error('title') is-invalid @enderror">
        </div>

        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <input type="file" class="form-control" name="image" @error('image') is-invalid @enderror">
        </div>

        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            {{--            <input type="button" class="form-control">--}}
            <button type="submit" class="btn btn-outline-success">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
