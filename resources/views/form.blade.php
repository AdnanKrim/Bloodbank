<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="crudhead">
            <h1>Donor Form</h1>
        </div>
        <div class="formz">
            <form class="adddnr" action="add" method="POST">
                @csrf
                <div style="background-color:green;">
                    @if(Session::get('congrats'))
                    <div style="color:black; margin: 1rem; ">
                        {{Session::get('congrats')}}
                    </div>
                    @endif

                    @if(Session::get('sorry'))
                    <div style="color: red;">
                        {{Session::get('sorry')}}
                    </div>
                    @endif
                </div>



                <div class="mb-3">
                    <label  class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">

                </div>
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" name="mobilenumber">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Bloodgroup</label>
                    <input type="text" class="form-control" name="bloodgroup">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Lastdonation</label>
                    <input type="date" class="form-control" name="lastdonation">
                </div>



                <button type="submit" class="btn btn-primary">Add</button>
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

    .formz {
        margin: 0 8rem;
        font-weight: bold;
    }
</style>

</html>