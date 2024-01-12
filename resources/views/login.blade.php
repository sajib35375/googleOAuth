<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google Login</title>
    <link rel="icon" href="{{ asset('uploads/google-fav.jpg') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>


    <div class="wrap">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 text-center">
                <div class="card shadow">
                    <div class="card-header">
                        <h2>Google Sign In Now</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('google.login') }}">
                            <img src="{{ asset('uploads/google-signin-button.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        img {
            width: 80%;
        }
        .wrap {
            margin-top: 150px;
        }
    </style>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
