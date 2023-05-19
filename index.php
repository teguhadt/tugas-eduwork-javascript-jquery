<?php
include "koneksi.php";
$query = mysqli_query($connection, "SELECT * FROM customer");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tugas JS</title>
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"/>
</head>
<body>
  <div class="container">

  

  <div>
    <a href="tambah.php" style="text-align: center; margin-top: 20px;" class="btn btn-success">+ Tambah Data</a>
    
  </div>

  <div class="container mt-4">
		<table id="tableData" class="table table-striped" style="width:100%">
			<thead>
				<tr>
          <th>No.</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
          <th>Phone</th>
					<th>Address</th>		
          <th>Action</th>		
				</tr>			
			</thead>
			<tbody>
				<?php if(mysqli_num_rows($query) > 0 ) { 
          $no = 1;
					while($data = mysqli_fetch_array($query)) { ?>
          <tr>
            <td><?php echo $no ?></td>
					  <td><?php echo $data["first_name"] ?></td>
					  <td><?php echo $data["last_name"] ?></td>
					  <td><?php echo $data["email"] ?></td>
            <td><?php echo $data["phone"] ?></td>
            <td><?php echo $data["address"] ?></td>
            <td>
              <a class="btn btn-primary" href="edit.php?id=<?php echo $data["id"]; ?>"> Update </a> 
              <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"]; ?>">Delete</a>
            </td>
				  </tr>
          <?php $no++; } ?>
				  <?php } ?>
			</tbody>
		</table>
	</div>
  </div>
</body>
</html>

<script>
  $(document).ready(function () {
    $('#tableData').DataTable();
  });
</script>
