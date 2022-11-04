<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
    <link rel="stylesheet" href="js/jquery-3.6.1.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg bg-primary py-4">
        <div class="container">
            <a class="navbar-brand  text-white" href="#">Lembudy Mart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-warning" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="index.php">Soal 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="soal2.html">Soal 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="soal3.html">Soal 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="#">Notification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="#">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <br>
    <center>
        <div class="container mt-3">
            <h1>INPUT VALIDATE</h1>
        </div>
    </center>
    <br>
    <br>
    <br>
    <div class="kotak-form">
        <div class=" row card w-75 mt-5">
            <div class="card-header">
                <center>
                    <h4>
                        FORM
                    </h4>
                </center>
            </div>
            <form action="result.php" method="post">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-2 col-form-label">First Name :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="firstName" name="firstName"
                                placeholder="ex : Ilham" required>
                        </div>
                        <label for="lastName" class="col-sm-2 col-form-label">Last Name :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lastName" name="lastName"
                                placeholder="ex : Faturachman" required>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label for="firstName" class="col-sm-2 col-form-label">Email :</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="ex : ilhamfatur46@gmail.com" required>
                        </div>

                        <div class="col-sm-4">
                            <label for="firstName" class="col-sm-7 col-form-label">Select The Category :</label>
                            <div class="form-check mt-1">
                                <input class="form-check-input" type="radio" name="radioVal" id="exampleRadios1"
                                    value="VIP">
                                <label class="form-check-label" for="exampleRadios1">
                                    VIP
                                </label>
                            </div>
                            <div class="form-check mt-1">
                                <input class="form-check-input" type="radio" name="radioVal" id="exampleRadios2"
                                    value="Premium">
                                <label class="form-check-label" for="exampleRadios2">
                                    PREMIUM
                                </label>
                            </div>
                            <div class="form-check mt-1">
                                <input class="form-check-input" type="radio" name="radioVal" id="exampleRadios2"
                                    value="Basic">
                                <label class="form-check-label" for="exampleRadios2">
                                    BASIC
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="firstName" class="col-sm-2 col-form-label">Phone Number :</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="Phone" name="Phone"
                                placeholder="ex: 0812-0230-2342" required>
                        </div>

                        <label for="lastName" class="col-sm-2 col-form-label">Date :</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="Date" name="datePick"
                                placeholder="ex : Faturachman" required>
                        </div>
                    </div>
                    <div class="form-group mt-5">

                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Message : " name="message" required></textarea>
                    </div>
                </div>
                <center>

                    <input class="btn btn-primary mb-3 mt-3" type="submit" value="Submit">
                    <input class="btn btn-danger mb-3 mt-3" type="reset" value="Reset">
                </center>
        </div>
        </form>
    </div>
    </div>
    </div>
</body>

</html>