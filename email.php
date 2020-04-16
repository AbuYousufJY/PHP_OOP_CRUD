<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <?php
        include 'model.php';
        $model = new Model();
        $id = $_REQUEST['id'];
        $read = $model->read($id);
        $to=  $read['email'];

        
      ?>

     <div class="container">
        <div class="row">
          <div class="col-md-12 mt-5">
            <h1 class="text-center">PHP OOP CRUD</h1>
            <hr style="height: 2px; color: black; background: black;">
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mx-auto">
              <form action="" method="post">
                <div class="from-group">
                  <label >Name</label>
                  <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $read['name']; ?> " class="form-control" readonly>
                </div>
                <div class="from-group">
                  <label >Email</label>
                <input type="text" name="email" placeholder="Enter Your Name" value="<?php echo $read['email']; ?> " class="form-control" readonly>
                  </div>
                <div class="from-group">
                  <label >Message</label>
                  <textarea name="Message" placeholder="Dear, Mr. <?php echo $read['name']; ?>, You are Welcome " cols="" id="" rows="3" class="form-control"></textarea>
                </div>
                <div class="from-group">
                  <!-- <div class="row"> -->
                  <button name="email" type="submit" class="btn btn-primary " style="margin-top: 20px">Send Mail</button>           
                  
                </div>

              </form>
          </div>
        </div>
      </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>