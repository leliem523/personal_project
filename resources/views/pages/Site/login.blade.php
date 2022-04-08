<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container">
    <div class="card">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
            <form method="POST">
                @csrf
                <div class="mb-3">
                  <label for="InputEmail" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="InputEmail" name="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="InputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" id="InputPassword" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            <div>
                <a class="link-success" href="{{ route('user.loginWithGoogle') }}">Login With Google</a>
                <a class="link-info" href="{{ route('user.loginWithFacebook') }}">Login With Facebook</a>
            </div>
              </form>
        </div>
      </div>
   </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
