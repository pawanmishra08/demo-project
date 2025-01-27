<?php
include "connection.php";

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email= $_POST['email'];
  $adress = $_POST['adress'];
  $phone = $_POST['phone'];
  $image = "0";

  $sql = "INSERT INTO student(name, email, adress, phone, image) VALUES ('$name','$email','$adress','$phone','$image')";

  if ($conn->query($sql))
  {
    header ("Location:home.php");
  }else{
   echo "Something went wrong";
  }
}

$fetchsql ="SELECT * FROM student";
$result=$conn->query($fetchsql);
$data =$result->fetch_all(MYSQLI_ASSOC);
echo "<pre>";
print_r($data);
echo "</pre>";

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
       <a class="navbar-brand mx-auto" href="#">student Record</a>
      </div>
    </nav>

    <div class ="container-fluid">
      <div class= "row">
        <div class = "col-6 mx-auto">
          <div class = "card p-3">

            <form action ="" method ="POST">

              <div>
               <label for= "name">Name:</label>
               <input for = "text"  name ="name" class= "form-control" id= "name" placeholder ="please enter your name">
              </div>

              <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" name ="email" class="form-control" id="exampleInputEmail1" placeholder ="please enter your email adress">
              </div>
              <div class="mb-3">
               <label for="phone" class="phone">phone</label>
               <input type="number" name="phone" class="form-control" id="phone" placeholder ="Enter your contact number">
              </div>
              <div class="mb-3">
               <label class="adress" for="adress">Address</label>
               <input type="adress" name="adress" class="form-control" id="adress" placeholder ="Enter your adress">
              </div>
              <div class="mb-3">
               <label class="file" for="file">File</label>
               <input type="file"  name =" file" class="form-control" id="file" placeholder ="Attch with your file">
              </div>

             <button type="submit"  name ="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
       <table class="table">
      <thead>
        <tr>
         <th scope="col">S.N</S></th>
         <th scope="col">name</th>
         <th scope="col">email</th>
         <th scope="col">address</th>
         <th scope="col">phone</th>
         <th scope="col">image</th>
         <th scope ="col">Actions</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $i=1;
        foreach($data as $value){ ?>
            <tr>
             <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $value['name'];  ?></td>
              <td><?php echo $value['email'];  ?></td>
              <td><?php echo $value['adress']; ?></td>
              <td><?php echo $value['phone'];  ?></td>
              <td><?php echo $value['image']; ?></td>
              <td>
                <a href ="std_edit.php?id=<?php echo $value['id']; ?>"  class="btn btn-primary btn-sm">Edit</button>
                <a href ="std_delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        <?php }
       ?>
      </tbody>
    </table>
  </body>
</html>