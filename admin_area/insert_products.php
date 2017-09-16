<?php

include("includes/db.php");

?>


<html>
<head>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
	<form method="post" action="insert_product.php" enctype="multipart/form-data">

	<table width="700" align="center" border="1">

	<tr align="center
	">
		<td colspan="2"><h2>Insert New Product</h2></td>
	</tr>

	<tr>
		<td align="right"><b>Product Title</b></td>
		<td><input type="text" name="product_title"></td>
	</tr>

	<tr>
		<td align="right"><b>Categories</b></td>
		<td>

		<select name="product_cart">
			<option>Select a Category</option>

			<?php

		$get_cats = "select * from categories";
		$run_cats = mysqli_query($con,$get_cats);

		while ($row_cats=mysqli_fetch_array($run_cats)){
			$cat_id = $row_cats['cat_id'];
			$cat_title = $row_cats['cat_title'];

		echo "<option value='$cat_id'>$cat_title</option>";
			
		}
	?>
		</select>



		</td>
	</tr>

	<tr>
		<td align="right"><b>Product Brand</b></td>
		<td><input type="text" name="product_brand"></td>
	</tr>

	<tr><td align="right"><b>Product Image 1</b></td>
		<td><input type="file" name="product_img1"></td>
	</tr>
		
	<tr>
		<td align="right"><b>Product Image 2</b></td>
		<td><input type="file" name="product_img2"></td>
	</tr>
	
	<tr>
		<td align="right"><b>Product Image 3</b></td>
		<td><input type="file" name="product_img3"></td>
	</tr>

	<tr>
		<td align="right"><b>Product Price</b></td>
		<td><input type="text" name="product_price"></td>
	</tr>

	<tr><td align="right"><b>Product Description</b></td>
		<td><textarea name="product_desc" cols="35" rows="10" ></textarea></td>
	</tr>

	<tr>
		<td align="right"><b>Product Keywords</b></td>
		<td><input type="text" name="product_keywords"></td>
	</tr>

	<tr align="center">
		<td colspan="2"><input type="submit" name="submit"></td>
	</tr>

	</table>
		


	</form>
</body>
</html>