<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Pdf</title>

    <style>
        th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,td{
            padding: 15px;
            text-align: left;
        }

        table{
            width: 100%;
            background-color: #f1f1c1;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Sr No.</th>
                <th>Name</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
            <tr>
                <th>1</th>
                <th>{{$skill['name']}}</th>
                <th><img src="{{public_path('/images/'.$skill['logo'])}}" width="100px"></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>