<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

   <h1> Welcome to roompage</h1>
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
<?php include "foooter.php"; ?>