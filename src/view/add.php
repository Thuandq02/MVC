<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        background-image: url("https://icapi.org/wp-content/uploads/2019/11/hinh-anh-naruto-82.jpg") ;
        background-size: cover ;
    }

    .table {
        background-color: lightgoldenrodyellow;
    }

    a {
        color:red;
    }

    th {
        text-align: center;
    }

    h1 {
        font-family: -apple-system, serif;
        font-size: 50px;
        text-align: center;
    }
</style>
<body>
<br>
<br>
<br>
<br>
<br>
<form method="POST" enctype="multipart/form-data">
    <table align="center" class="table" style="width: auto; border-radius: 15px">
        <thead class="thead-dark">
        <tr>
            <td colspan="2"><h1>ADD</h1></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input style="width: 280px" name="name" type="text" required></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input name="age" style="width: 280px" type="number" required></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input name="address" style="width: 300px" type="text" required></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input name="img" style="width: 300px" type="file" required></td>
        </tr>
        <tr>
            <td>
                <a class="btn btn-warning" href="http://localhost/demo-MVC/MVC_T/index.php">End</a>
            </td>
            <td>
                <button style="width: 200px; background: chartreuse" class="btn btn-success" type="submit">Add</button>
            </td>
        </tr>
        </thead>
    </table>
</form>
</body>
</html>
