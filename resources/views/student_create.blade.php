<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .header {
            text-align: center;
        }

        span {
            font-size: 30px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class='header'>
        <span>ADD STUDENT</span>
    </div>

    <form class="row g-3" method="POST" action="">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Fullname</label>
            <input type="text" class="form-control" id="inputEmail4" name="fullname">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="inputPassword4" name="birthday">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="" name="address">
        </div>
        @csrf
        <div class="col-12">
            <button hrel='student_manage' type="submit" class="btn btn-primary">ADD</button>
        </div>
    </form>
</body>

</html>
