<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông Tin Người Dùng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
    p{
        color: white;
    }
</style>

<body>
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
<!--                        <li><a href="#" class="text-white">Follow on Twitter</a></li>-->
                        <li><a href="https://www.facebook.com/" class="text-white">Like on Facebook</a></li>
                        <li><a href="https://mail.google.com" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Album</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
<br><br><br>
<h1 align="center" style="color: chartreuse"><b>Thông tin người dùng</b></h1>
<div align="center">
    <table>
        <tr>
            <th style="color: chartreuse">
                Nhập Tên Sản Phẩm :
                <form style="display: inline; width: 100px; height: 50px" class="form-inline my-2 my-lg-0;" method="post" action="index.php?page=list">
                    <input name="search" class="form-control" type="search" aria-label="Search" placeholder="Tìm Kiếm">
                    <button style="background-color: black" class="btn btn-success" type="submit">Tìm kiếm</button>
                </form>
            </th>
            <th>
                <a class="btn btn-success" data-toggle="animation" data-animation="zoom-in" href="index.php?page=add">ADD</a>
            </th>
        </tr>
    </table>
</div>
<br>
<br>

<table class="table" >
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Address</th>
        <th scope="col">Image</th>
        <th colspan="2" scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($student as $key=>$student):?>
        <tr>
            <th scope="row"><?php echo $key+1?></th>
            <th><?php echo $student['name']?></th>
            <th><?php echo $student['age']?></th>
            <th><?php echo $student['address']?></th>
            <th><img style="width: 100px" src="img/<?php echo $student['img'] ?>" ></th>
            <th><a href="index.php?page=edit&id=<?php echo $student['id'] ?>" class="btn btn-success">Edit</a></th>
            <th><a href="index.php?page=delete&id=<?php echo $student['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa chứ?')" class="btn btn-danger">Delete</a></th>
        </tr>
    <?php endforeach?>
    </tbody>
</table>
<footer class="blog-footer" align="center" style="background-color: #343a40">
<!--    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>-->
<!--    <p>-->
<!--        <a href="#">Back to top</a>-->
<!--    </p>-->
    <p>© Student Manager 2020-2021</p>
</footer>
</body>
</html>
