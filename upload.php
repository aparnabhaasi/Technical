
<?php include 'userheader.php';

if(isset($_POST['submit']))
{
	extract($_POST);
	$dir = "uploads/";
	$file = basename($_FILES['img']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("images_").".".$file_type;
	if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
	{
	echo $q="insert into tbl_image values(null,'$imgname','$target')";
	insert($q);
	alert('Product added successfully');

    }
    else
		{
			echo "file uploading error occured";
		}
}
 ?>

<center>
	<br><br><br><br><br><br><br>
	
	<h1>Upload Image</h1>
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<th>Name</th>
				<td><input type="text" name="imgname"></td>
			</tr>
			
			<tr>
				<th>Image</th>
				<td><input type="file" name="img"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="ADD"></td>			
			</tr>
		</table>
		<h1>View Image</h1>

		<table class="table" style="width:400px;font-size:19px">
			<tr>
				<th>Name</th>
				<th>Image</th>
            </tr>
			<?php 
			$q="select * from tbl_image";
			$res=select($q);
			foreach ($res as $row) {
			 ?>
			 <tr>
			 	
			 	<td><?php echo $row['name'] ?></td>
			 	<td><img src='<?php echo $row['image'] ?>'></td>
                 
                <td>  <a href="<?php echo $row['image'] ?>" download> download</a></td>
                
			 </tr>
			 <?php 
			}

			  ?>
		</table>
	</form>
</center>
<br><br><br><br><br><br>

<?php include 'footer.php' ?>

