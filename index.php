<?php include("header.php"); ?>
		<div class="container" style="float: left; background: #FFFFFF; width: 100%; height: 100%;">
			<div class="content-left">
				<h3 style="margin-right: 25px; margin-left: 25px; margin-top: 20px;">Latest news</h3>
				<hr style="margin-right: 25px; margin-left: 25px;">
				<?php
					include('config.php');
					$sql = "SELECT * FROM news_posts ORDER BY 1 DESC";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					        
					        $id = $row['post_id'];
					        $title = $row['title'];
							$desc = $row['description'];
							$image = $row['image'];
							$date = $row['dates'];?>
							<div class="posting" style="padding:25px;">
									<div class="image" style="margin-bottom: 10px;">
										<img src="images/<?php echo "$image";?>">
									</div>
									<a href="post_detail.php?id=<?php echo "$id" ?>">
									<div class="detail">
										<span>Posted at: <?php echo date("j-M-Y g:ia", strtotime($date));?></span>
										<br/>
										<h3><b><?php echo "$title";?></b></h3>
										<p><?php echo "$desc";?></p>	
									</div>
								</a>	
							</div>
						<?php
						    }
						} else {
						    echo "0 results";
						}
					$conn->close();
				?>	
			</div>
				<div class="content-right">
					<h3 style="margin-right: 20px; margin-left: 20px; margin-top: 20px;">Popular news</h3>
					<hr style="margin-right: 20px; margin-left: 20px;">
						<?php
							include('config.php');
							$sql = "SELECT * FROM news_posts ORDER BY 1 DESC";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {

							        $id = $row['post_id']; 
							        $title = $row['title'];
									$desc = $row['description'];
									$image = $row['image'];
									$date = $row['dates'];?>
								<div class="posting" style="padding:20px;">
									<a href="post_detail.php?id=<?php echo "$id" ?>">
										<div class="image2" style="margin-bottom: 10px;">
										<img src="images/<?php echo "$image";?>">
										</div>
										<div class="detail2">
										<span><?php echo date("j-M-Y g:ia", strtotime($date));?></span><br/>
										<h4><?php echo "$title";?></h4>
										<p><?php echo "$desc";?></p>	
									</div>
									</a>
								</div>
							<?php
							    }
							} else {
							    echo "0 results";
							}
							$conn->close();
						?>
				</div>
			</div>
<?php include("footer.php"); ?>

