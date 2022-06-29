<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="crudhead">
            <h1>Donor Details</h1>
        </div>

        <div class="row">
            <div class="col-6">
            <h2>Member Details</h2>
            <h4>{{$member['name']}}</h4>
            <h4>{{$member['email']}}</h4>
            <h4>{{$member['mobilenumber']}}</h4>
            </div>
            <div class="col-6">
            <h2>Donation details </h2>
            <h4>{{$member['bloodgroup']}}</h4>
            <h4>{{$member['lastdonation']}}</h4>
            <a href="/edit/{{$member['id']}}" class="btn btn-primary"> Update</a>
            <a href="/delete/{{$member['id']}}" class="btn btn-secondary"> Delete</a>
            </div>
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
</style>

</html>