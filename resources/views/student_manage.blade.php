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
        <span>BÀI MINH HỌA</span>
    </div>

    <table class="table mt-3  text-left">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col" class="pr-5">Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Address</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student['id'] }}</td>
                    <td class="pr-5 text-right">{{ $student['fullname'] }}</td>
                    <td>{{ $student['birthday'] }}</td>
                    <td>{{ $student['address'] }}</td>
                    <td><a href="student_manage/{!! $student->id !!}/edit" class="btn btn-outline-primary">Edit</a>
                    </td>
                    <td><a href="student_manage/{!! $student->id !!}/delete"
                            class="btn btn-outline-primary">Delete</a>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No products found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="student_manage/create" class="btn btn-outline-primary">ADD Student</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

</html>
