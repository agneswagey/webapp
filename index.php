<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web App</title>
    <script src="js/jquery-3.6.3.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg fixed-top bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="">1st STOP MOVIE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav text-right">
                    <li class="nav-itemt">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container text-center">
    <div class="row w-50 mt-5 text-sm-center">
        <div class="input-group mt-5">
            <input type="text" class="form-control" placeholder="Title" aria-label="Titles" aria-describedby="button-addon2">
            <button class="btn btn-dark" type="button" id="button-addon2">Search</button>
        </div>
    </div>
</div>
</body>
</html>