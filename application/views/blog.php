<body>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-6">

                <h1 class="page-header">
                    PlayFantasy365 Blog
                    <br><small>Where the game is born</small>
                </h1>


				
				<!-- First Blog Post -->

                <?php foreach ($blogposts as $rows){  ?>
                    <h2>
                        <a href="#"><?php echo $rows['title'];?></a>
                    </h2>
                    <p class="lead">
					<?php
						$writer_name = "";
                        foreach ($writers as $writer){
							if ($writer['user_id']==$rows['poster_id']){
								$writer_name = $writer['full_name'];
								$fbid=$writer['fbid'];
							}
                        }
						echo '<a href=" '.$fbid.'">'.$writer_name.'</a>';
					?>
                         
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span><?php echo $rows['time'];?> </p>
                    <hr>
                    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                    <hr>
                    <p><?php echo substr($rows['subtitle'],0,40); ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
                <?php } ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>
			
			<!--- mid section-->
			
			<div class="col-md-2">
				<div class="row">
					<div class="well">
					
					<div id="poll-container">
						<h3>Poll</h3>
						<form id='poll' action="poll.php" method="post" accept-charset="utf-8">
							<p>Pick your captain of the month:</p>
							<p>
							<input type="radio" name="poll" value="opt1" id="opt1" />
								<label for='opt1'>&nbsp;Aguero</label><br />
							<input type="radio" name="poll" value="opt2" id="opt2" />
								<label for='opt2'>&nbsp;Rooney</label><br />
							<input type="radio" name="poll" value="opt3" id="opt3" />
								<label for='opt3'>&nbsp;Silva</label><br />
							<input type="radio" name="poll" value="opt4" id="opt4" />
								<label for='opt4'>&nbsp;Ivanovic</label><br />
							<input type="radio" name="poll" value="opt5" id="opt5" />
								<label for='opt5'>&nbsp;Sterling</label><br />
							<input type="radio" name="poll" value="opt6" id="opt6" />
								<label for='opt6'>&nbsp;Di Maria</label><br /><br />
							<input type="submit" value="Vote &rarr;" /></p>
						</form>
					</div>
					</div>
				</div>		
			</div
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
			    <!-- Side Widget Well -->
                <div class="well">
                    <h4>Physio Room</h4>
					<div  style="width:290px; text-align:center; font-family:Verdana; font-size:11px;">
					<iframe src="http://www.physioroom.com/affiliate/common/syndicate_table2_mini.php?w=270" width="290" height="400" frameborder="0"></iframe>
					<p>Visit <a href="http://www.physioroom.com" rel="nofollow" target="_blank">PhysioRoom.com</a> for more injury information</p></div>

					</div>

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>


                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>
    </div>
    <!-- /.container -->
</body>