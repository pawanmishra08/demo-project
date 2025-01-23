
<?php
include "connection.php";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email= $_POST['email'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $image = "0";

    $sql = "INSERT INTO `student`(`name`, `email`, `adress`, `phone`, `image`) VALUES ('$name','$email','$adress','$phone','$image')";

   if ($conn->query($sql))
   {
    echo "New data inserted successfully!!!";
   }else{
    echo "Something went wrong";
   }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- As a link -->
  <nav class="navbar bg-body-tertiary" style ="background-color: orange !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">student Record</a>
  </div>
  </nav>

  <div class ="container-fluid">
    <div class= "row">
  <div class = "col-6 mx-auto">
  <div class = "card p-3">

  <form action ="" method ="POST">

 <div>
    <label for= "name">Name:</label>
    <input for = "text"  name ="name" class= "form-control" id= "name" placeholde ="please enter yout name">

 </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name ="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="phone" class="phone">phone</label>
    <input type="number" name="phone" class="form-control" id="phone">
  </div>
  <div class="mb-3">
    <label class="adress" for="adress">Adress</label>
    <input type="adress" name="adress" class="form-control" id="adress">
  </div>
  <div class="mb-3">
    <label class="file" for="file">File</label>
    <input type="file"  name =" file" class="form-control" id="file">
  </div>

  <button type="submit"  name ="submit" class="btn btn-primary">Submit</button>
  </form>

  </div>
   </div>
    </div>
   </div>
  </body>
</html>