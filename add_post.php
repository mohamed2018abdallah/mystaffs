<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
			<style>
			      #posts_list {
			          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			          border-collapse: collapse;
			          width: 100%;
			      }

			      #posts_list td, #posts_list th {
			          border: 1px solid #ddd;
			          padding: 8px;
			      }

			      #posts_list tr:nth-child(even){background-color: #f2f2f2;}

			      #posts_list tr:hover {background-color: #ddd;}

			      #posts_list th {
			          padding-top: 12px;
			          padding-bottom: 12px;
			          text-align: left;
			          background-color: #3c8dbc;
			          color: white;
			      }
			  </style>
		<title>Add - post</title>
	</head>
	<body style="margin: 1px; background: none;">
		<div><h2 style="color: #001933; text-align: center;">Add And View Post</h2></div>
		<div class="content">
			<center>
				<div style="margin-top: 50px;">
					<form action="posting.php" method="post" enctype="multipart/form-data">
						<div>
							<input type="text" name="title" placeholder="Enter title" style="height: 30px;" required="">
						</div>
						<div>
							<textarea name="description" placeholder="Enter description" style="height: 100px;" required=""></textarea>
						</div>
						<div>
							<input type="file" name="image"/>
						</div>
						<div>
							<input type="submit" name="submit" value="Send posts" style="float: left; margin-left: 125px;"/>
						</div>	
					</form>	
				</div>
			</center>
			<center>
				<div style="margin-right: 125px; margin-left: 125px;">
					<table id="posts_list">
			            <tr>
			                <th>Id</th>
			                <th>Image</th>
			                <th>Title</th>
			                <th>Description</th>
			                <th>Dates</th>
			                <th>DELETE</th>
			            </tr>
		              	<?php
			                include('config.php');

			                $sql = "SELECT * FROM news_posts ORDER BY 1 DESC";
			                $result = $conn->query($sql);

			                if ($result->num_rows > 0) {
			                    // output data of each row
			                    while($row = $result->fetch_assoc()) {
			                        
			                        $id = $row['post_id'];
			                        $image = $row['image'];
			                        $title = $row['title'];
			                        $desc = $row['description'];
			                        $date = $row['dates'];?>
					              <tr>
					                  <td><?php echo "$id";?></td>
					                  <td><?php echo "$image";?></td>
					                  <td><?php echo "$title";?></td>
					                  <td><?php echo "$desc";?></td>
					                  <td><?php echo date("j-M-Y g:ia", strtotime($date));?></td>
					                  <td><a onclick="return confirm('Are you sure?')" href="add_post.php?delete=<?php echo "$id";?>">DELETE</a></td>
					              </tr>
		              		<?php
		                  	}

			                  if (isset($_GET['delete'])) {
			                  # code...
			                  $del  =  $_GET['delete'];
			                  $sql = "DELETE FROM news_posts WHERE post_id = '$del'";
			                  if ($conn->query($sql) === TRUE) {
			                    ?>
			                   
			                    <script>
			                      alert('successfully deleted');
			                      window.location.href='index.php';
			                    </script>
			                    <?php
			                  }else{
			                    ?>
			                    <script>
			                      alert('failed data deleted');
			                      window.location.href='add_post.php';
			                    </script>

			                    <?php
			                  }
					            }

				            	} else {
				                  echo "0 results";
		              		}
		              		$conn->close();
		            	?>
		            </table>
				</div>
			</center>		
		</div>	
	</body>
</html>
