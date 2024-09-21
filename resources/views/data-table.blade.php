<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('StyleSheet/bootstrap.css')}}"></link>
    <script src="{{  asset('JavaScript/bootstrap.bundle.js') }}"></script>
    <title>Pagination Data Table</title>
</head>
<body>
    <div class ="container shadow mt-5">
        <div class = "d-flex justify-content-center">
            <div class = "mt-3">
            <h2 class = "fs-2 text-center">Data Information</h2>
            </div>
        </div>
        <hr>
        <table class = "table table-hover table-bordered">
        <thead>
            <tr class = "table-info">
                <th scope = "col">ID</th>
                <th scope = "col">First Name</th>
                <th scope = "col">Middle Name</th>
                <th scope = "col">Last Name</th>
                <th scope = "col">Email</th>
                <th scope = "col">Birthdate</th>
                <th scope = "col">Age</th>
                <th scope = "col">Sex</th>
                <th scope = "col">Civil Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <th scope ="col">{{ $data->id }}</th>
                <td scope ="col">{{ $data->firstname }}</td>
                <td scope ="col">{{ $data->middlename }}</td>
                <td scope ="col">{{ $data->lastname }}</td>
                <td scope ="col">{{ $data->email }}</td>
                <td scope ="col">{{ $data->birthdate }}</td>
                <td scope ="col">{{ $data->age }}</td>
                <td scope ="col">{{ $data->civilstatus }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <div class = "d-flex justify-content-center">
            {{ $datas->links('pagination::bootstrap-4') }}   <!---- for pagination ----->
        </div>
    </div>
</body>
</html>
