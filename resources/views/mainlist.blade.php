<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood-donors</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="crudhead">
            <h1>Blood Donors</h1>
        </div>
        <div class="listview">
            <a href="form" class="btn btn-primary butn">Add Member</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile Nunmber</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Last donation</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $mmbr)
                    <tr>
                        <td>{{$mmbr['name']}}</td>
                        <td>{{$mmbr['email']}}</td>
                        <td>{{$mmbr['mobilenumber']}}</td>
                        <td>{{$mmbr['bloodgroup']}}</td>
                        <td>{{$mmbr['lastdonation']}}</td>
                        <td><a href="detail/{{$mmbr['id']}}" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

</body>
<style>
    .crudhead {
        background-color: blue;
        color: white;
        text-align: center;
        padding: 2rem 0;
        margin-top: 1rem;

    }

    .crudhead h1 {
        font-weight: bold;
    }

    .butn {
        margin: 2rem 4rem;
        padding: 1rem 1rem;
        text-align: center;
        /* font-size: 1rem; */
        font-weight: bold;

    }
</style>

</html>