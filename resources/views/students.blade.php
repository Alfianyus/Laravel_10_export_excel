<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Export</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />
</head>

<body>
    <div class="bg-dark py-3">
        <div class="container">
            <h1 class="text-white">Laravel Export Example</h1>
        </div>
    </div>
    <div class="container py-2">
        <div class="d-flex justify-content-between">
            <div>
                <form action="" method="get">
                    <input value="{{Request::get('keyword')}}" type="text" class="form-control" name="keyword" id="keyword" placeholder="keyword">
                    <button class="btn btn-primary">Search</button>
                </form>
            </div>
            <div>
                @if(Request::get('keyword'))
                <a class="btn btn-primary" href="{{route('students.export').'?keyword='.Request::get('keyword')}}"> Download Excel</a>
                @else
                <a class="btn btn-primary" href="{{route('students.export')}}"> Download Excel</a>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
            @if($students->isNotEmpty())
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
            </tr>
            @endforeach
            @endif
        </table>
    </div>
</body>

</html>