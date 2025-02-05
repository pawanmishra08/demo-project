<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class = "container-fluid mt-5">
 <div  class= "row">
     <div class ="col-3 mx-auto">
        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2B9LswCEh3jElEIiDsU4C60RTU3Chlv-h2A&s" class="mx-auto d-block">
        <div class = "card mt-5 p-2">
            <form>
                <div>
                    <label for= "email">Email</label>
                    <input type="email" class ="form-control" name ="email">
                </div>
                <div>
                    <label for= "password">password</label>
                    <input type="password" class ="form-control" name ="password">
                </div>
                    <div class="d-grid gap-2 mt-2">
                      <button class="btn btn-primary" type="button">Login</button>
                    </div>
            </form>
        </div>
     </div>
 </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>