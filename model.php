<?php

	Class Model{
		private $server = "localhost:3307";
		private $username = "root";
		private $password;
		private $db = "oop_php_crud";
		private $conn;

		public function __construct(){

			try{
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			}
			catch(Exception $e){
				echo "Connection Failed" . $e->getMssage();
			}		
		
		}
		public function insert(){
			if(isset($_POST['submit'])){
				//echo "Yes";
					if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])){
						if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])){

							$name = $_POST['name'];
							$mobile = $_POST['mobile'];
							$email = $_POST['email'];
							$address = $_POST['address'];

							$query = "INSERT INTO records (name,mobile, email, address) VALUES('$name','$mobile', '$email', '$address')";

							if($sql= $this->conn->query($query)){
								echo "<script>alert('Records Added Successfully');</script>";	
								echo "<script> window.location.href = 'index.php'; </script>";

							}
							else
								echo "<script>alert('Something went wrong');</script>";
							    echo "<script> window.location.href = 'index.php'; </script>";

						}
					else{
						echo "<script>alert('empty') ;</script>";
						echo "<script> window.location.href = 'index.php'; </script>";
						//don't visualized!!!

					}
				}

			}
		}

		public function reset(){
			if(isset($_POST["reset"])){
				echo "<script>alert('Reset Successful') ;</script>";
				echo "<script> window.location.href = 'index.php'; </script>";
						
			}
		}

		public function fetch(){
			$data = null;

			$query = "SELECT *FROM records";

			if($sql = $this->conn->query($query)){
				while($rows = mysqli_fetch_assoc($sql)){
					$data[] = $rows;
				}
			}
			return $data;

		}

		public function delete($id){
			$query = "DELETE FROM records WHERE id='$id'";

			if($sql = $this->conn->query($query)){
				return true;
			}
			else 
				return false;

		}

		public function read($id){

			$data= null;
			$query = "SELECT * FROM records WHERE id='$id'";

			if($sql = $this->conn->query($query)){
				while ($row = $sql->fetch_assoc()) {
					$data = $row;
				}
			}
			
			return $data;

		}

		public function update($data){
			//var_dump($data);

			 $query = "UPDATE records SET name='$data[name]', email='$data[email]' ,mobile='$data[mobile]', address='$data[address]'  WHERE id='$data[id]'";

			if($sql = $this->conn->query($query)){
				return true;
			}
			else
				return false;

		}

		public function email_return($id){

			$data= null;
			echo $query = "SELECT email FROM records WHERE id='$id'";

			// if($sql = $this->conn->query($query)){
			// 	while ($row = $sql->fetch_assoc()) {
			// 		$data = $row;
			// 	}
			// }
			
			// return $data;

		}

		public function search(){
			if (isset(_POST['search'])) {
				if (isset($_POST['search_keyword']) && !empty($_POST['search_keyword']) ) {

					$key = $_POST['search_keyword'];
					
					echo "$key";
				}



				
			}




			// $data= null;
			// $query = "SELECT * FROM records WHERE name LIKE name '%Search_word%' ";

			// if($sql = $this->conn->query($query)){
			// 	while ($row = $sql->fetch_assoc()) {
			// 		$data = $row;
			// 	}
			// }
			
			// return $data;
		}

	}

?>