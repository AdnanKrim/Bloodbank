<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="crudhead">
            <h1>Blood Donors</h1>
        </div>
        <div class="frmctr">
            <h2>Member details</h2>
            <form action="/edit" method="POST">
                @csrf
                <input type="hidden" name="id" value={{$data['id']}}>
                <input type="text" name="name" value="{{$data['name']}}"> <br><br>
                <input type="text" name="email" value="{{$data['email']}}"> <br><br>
                <input type="text" name="mobilenumber" value="{{$data['mobilenumber']}}"> <br><br>
                <input type="text" name="bloodgroup" value="{{$data['bloodgroup']}}"> <br><br>
                <input type="date" name="lastdonation" value="{{$data['lastdonation']}}"> <br><br>
                <button type="submit">Update</button>


            </form>
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
    .frmctr h2{
        /* padding: 1rem 10rem; */
        font-weight: bold;
    }
    .frmctr form input{
        width:50%;
        margin: 0.5rem 0;
    }
</style>

</html>