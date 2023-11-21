<?php
include "connection.php";

$error = "";
$username = "";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' or $password == '') {
        $error .= "<li>Input username dan password terlebih dahulu</li>";
    } else {
        if (empty($error)) {
            $hashedPassword = hash('sha256', $password);
            $query = "INSERT INTO admin (id, username, password) VALUES ('', '$username', '$hashedPassword')";
            $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
            header("location:index.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/icon.png" type="image/x-icon">
    <title>Register Page</title>
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Sign up now</h2>
                        <?php if ($error) { ?>
                            <div id="regist-alert" class="alert alert-danger col-sm-12">
                                <ul><?php echo $error ?></ul>
                            </div>
                        <?php } ?>
                        <form method="POST" action="">
                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example3" class="form-control" name="username" />
                                <label class="form-label" for="form3Example3">Username</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" name="password" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" name="register">
                                Sign up
                            </button>
                        </form>
                        <div>
                            <p class="mb-0">Already have an account? <a href="index.php" class="text-blue-50 fw-bold">Sign In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>