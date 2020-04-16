<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CREATE RECORDS</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">PHP OOP CRUD</h1>
          <hr style="height: 2px; color: black; background: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">

          <?php
            include 'model.php';
            $model = new Model();
            $insert = $model->insert();
            $reset = $model->reset();
          ?>



          <form action="" method="post">
            <div class="from-group">
              <label >Name</label>
              <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
            </div>
            <div class="from-group">
              <label >Email</label>
              <input type="email" name="email"  placeholder="myemail@example.com" class="form-control">
            </div>
            <div class="from-group">
              <label >Mobile Number</label>
              <input type="text" name="mobile" placeholder="+8801730000000" class="form-control">
            </div>
            <div class="from-group">
              <label >Address</label>
              <textarea name="address" placeholder="Mohammadpur, Dhaka-1205" cols="" id="" rows="3" class="form-control"></textarea>
            </div>
            <div class="from-group">
              <!-- <div class="row"> -->
              <button name="submit" type="submit" class="btn btn-primary " style="margin-top: 20px">Sumbit</button>
              <button name="reset" type="submit" class="btn btn-warning " style="margin-top: 20px">RESET</button>
              <!-- </div> -->
              
            </div>

          </form>
        </div>
      </div>
      <div class="row">        
      <a type="button" href="Records.php" style="margin-top: 30px;" class="btn btn-primary btn-lg btn-block col-md-5 mx-auto">Show Records</a>
      </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>