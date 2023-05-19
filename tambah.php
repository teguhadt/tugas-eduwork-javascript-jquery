<html>
<head>
 <title>Tambah Data</title>

 <script type="text/javascript" src="jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="jquery.validate.pack.js"></script>
<style type="text/css">
  * { font: 11px Verdana, sans-serif; }
  h4 { font-size: 18px; }
input { padding: 3px; border: 1px solid #999; }
input.error, select.error { border: 1px solid red; }
label.error { color:red; margin-left: 10px; }

</style>
</head>
<body>
 <h4>Tambah Data Baru</h4>
    <form action="proses_tambah.php" form id="addform" method="post">
        <table cellpadding ="10" cellspacing="0" class= "table table-striped">
            <tr> 
                <td>First Name</td>
                <td><input type="text" name="first_name" class="required" title="First Name harus diisi"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="last_name" class="required" title="Last Name harus diisi"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" class="required" title="Email harus diisi"></td>
            </tr>
            <tr> 
                <td>Phone</td>
                <td><input type="text" name="phone" class="required" title="Phone harus diisi"></td>
            </tr>
            <tr> 
                <td>Address</td>
                <td><input type="text" name="address" class="required" title="Address harus diisi"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Submit" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>

    
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
	$("#addform").validate();
})
</script>
