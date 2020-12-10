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
        background-image: url("https://icapi.org/wp-content/uploads/2019/11/hinh-anh-naruto-82.jpg");
        background-size: cover;
    }

    .table {
        background-color: lightgoldenrodyellow;
    }

    a {
        color: darkviolet;
    }

    th {
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
            <th colspan="2"><h1><b>Edit</b></h1></th>
        </tr>
        <tr>
            <td>Name</td>
            <td><input style="width: 280px" name="name" type="text" required value="<?php echo $student["name"]; ?>">
            </td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input style="width: 280px" name="age" type="number" required value="<?php echo $student["age"]; ?>">
            </td>
        </tr>
        </tr>
        <tr>
            <td>Address</td>
            <td><input name="address" style="width: 280px" type="text" required
                       value="<?php echo $student["address"]; ?>"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input name="img" style="width: 280px" type="file" required value="<?php echo $student["img"]; ?>"></td>
        </tr>

        <tr>
            <td>
                <a class="btn btn-warning" href="http://localhost/demo-MVC/MVC_T/index.php" style="color: red">Trở
                    về</a>
            </td>
            <td>
                <button style="width: 200px; background-color: chartreuse" class="btn btn-success" type="submit">Cập
                    nhật
                </button>
            </td>
        </tr>
        </thead>
    </table>
</form>
</body>
</html>
