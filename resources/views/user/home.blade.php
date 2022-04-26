<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>

<div>
    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
{{--            <th>ID</th>--}}
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 1; ?>
        @foreach($books as $book)
            <tr>
                <td>{{ $id++ }}</td>
{{--                <td>{{ $book->id }}</td>--}}
                <td>{{ $book->title }}</td>
                <td>{{ $book->created_at->format('d/m/y') }}</td>
                <td>{{ $book->updated_at->format('d/m/y') }}</td>
                <td><a href="{{ route('delete.data',$book->id) }}">Delete</a></td>
            </tr>
        @endforeach


        </tbody>
    </table>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</html>
