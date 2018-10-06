<?php include("header.php"); ?>
		<div class="container" style="float: left; background: #FFFFFF; width: 100%; height: 100%; padding-bottom: 10px;">
			<div class="content-left" style="width: 100%;">
					<?php

						$pid = @$_GET['id'];
						include('config.php');
						$sql = "SELECT * FROM news_posts WHERE post_id = '$pid'";
						$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					        
					        $pid = $row['post_id'];
					        $title = $row['title'];
							$desc = $row['description'];
							$image = $row['image'];
							$date = $row['dates'];?>
							<div class="posting" style="padding:25px;">
								<div class="image" style="margin-bottom: 10px;">
									<img src="images/<?php echo "$image";?>">
								</div>
								<div class="detail">
									<span>Posted at: <?php echo date("j-M-Y g:ia", strtotime($date));?></span><br/>
									<h3><b><?php echo "$title";?></b></h3>
									<p><?php echo "$desc";?></p>	
								</div>
								<form action="comment.php" method="post" enctype="multipart/form-data">
									<div>
										<input type="hidden" name="path" value=<?php echo $pid; ?>>
									</div>
									<div>
										<textarea name="comments" placeholder="write your comments" style="width: 100%;" required=""></textarea>
									</div>
									<div>
										<input type="submit" name="submit" value="post comment" style="float: right;"/>
									</div>	
								</form>	
							</div>
						<?php
							}
						} else {
						    echo "0 results";
						}
						$conn->close();
					?>	
				</div>
				<div style="display: inline-block; margin-top: 10px; margin-bottom: 10px;">
					<p style="padding-left:25px; padding-right: 25px; color: #001933;"><b><u>All comments</u></b></p>
					<?php
						include('config.php');
						$sql = "SELECT * FROM comments WHERE  pos_id = '$pid' ORDER BY 1 DESC";
						$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					        
					        $pid = $row['comments_id'];
							$comm = $row['comments'];
							$date = $row['dates'];?>
							<div class="posting" style="padding-left:25px; padding-right: 25px;">
								<div class="comments" style="color: #6c6c6c; padding: 5px; font-size: 14px;">
									<p style="float: left;">Posted at <?php echo date("j-M-Y g:ia", strtotime($date)). ": "  .  "" . "" ."$comm";?></p>	
								</div>	
							</div>

						<?php
							}
						} else {
						    echo "";
						}
						$conn->close();
					?>
				</div>
			</div>
<?php include("footer.php"); ?>
