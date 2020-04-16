
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Update Information</title>
  </head>
  <body>

	 <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Update Information</h1>
          <hr style="height: 2px; color: black; background: black;">
        </div>
      </div>

	

	<div class="row">
			<div class="col-md-5 mx-auto">

			<?php

			  include 'model.php';
			  $model = new Model();
			  $id = $_REQUEST['id'];
			  $row = $model->read($id);
			  //var_dump($row);
			  if(isset($_POST['update'])){
				//echo "Yes";
					if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])){
						if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])){
						
							$data['id']= $id;
							$data['name'] = $_POST['name'];
							$data['mobile'] = $_POST['mobile'];
							$data['email'] = $_POST['email'];
							$data['address'] = $_POST['address'];

							//var_dump($data);

							$update = $model->update($data);

							if($update){
									echo "<script>alert('Data Updated') ;</script>";
									echo "<script> window.location.href = 'update.php'; </script>";
									header("Location:records.php");
							}
							else
									echo "<script>alert('Data Updated') ;</script>";
									echo "<script> window.location.href = 'update.php'; </script>";
							

						}
					else{
						echo "<script>alert('Data not Updated') ;</script>";
						echo "<script> window.location.href = 'update.php'; </script>";
						//don't visualized!!!

					}
				}
			}		

			?> 
				<form action="" method="post">
		            <div class="from-group">
			              <label >Name</label>
			              <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
		            </div>
		            <div class="from-group">
			              <label >Email</label>
			              <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
		            </div>
		            <div class="from-group">
			              <label >Mobile Number</label>
			              <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control">
		            </div>
		            <div class="from-group">
			              <label >Address</label>
			              <textarea name="address" cols="" id="" rows="3"  class="form-control"><?php echo $row['address']; ?></textarea>
		            </div>
		            <div class="from-group text-center">
		             	 <button name="update" type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 30px">Update Info</button>
	            	</div>
	              </form>           
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>