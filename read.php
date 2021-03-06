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
              $id = $_REQUEST['id'];
              $read = $model->read($id);
            //  var_dump($read);

            ?>
            <div class="card">
              <div class="card-header">Single Record</div>
              <div class="card-body">
                <p> <?php echo "$read[name]"; ?> </p>
                <p> <?php echo "$read[email]"; ?> </p>
                <p> <?php echo "$read[mobile]"; ?> </p>
                <p> <?php echo "$read[address]"; ?> </p>
              </div>
            </div>
          </div>
        </div>

       <div class="row">
          <div class="col-md-12 text-center">
         <!-- <a href="Records.php" class="btn btn-primary text-center">Read</a> -->
              <a type="button" href="index.php" style="margin-top: 30px;" class="btn btn-primary col-md-3 mx-auto">Insert Record</a>
              <a type="button" href="Records.php" style="margin-top: 30px;" class="btn btn-info  col-md-3 mx-auto">Show Records</a>
    

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