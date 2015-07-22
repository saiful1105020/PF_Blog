
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-6">

                <h1 class="page-header">
                    PlayFantasy365 Blog
                    <br><small>Where the game is born</small>
                </h1>
            <?php
                $attributes =   array("class"=>"form-horizontal",               
                "id"=>"newpostform",
                "name"=>"newpostform");
                echo form_open('home/entry',$attributes);
            ?>

            <fieldset>
                <legend>Add New Post</legend>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="add_post_title" class="control-label">Post Title</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control" id="add_post_title" name="add_post_title"
                            placeholder="Post Title" type="text" maxlength=1024 value="<?php echo set_value('add_post_title');?>" required />
                            
                            <span class="text-danger"><?php echo form_error('add_post_title'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="add_post_subtitle" class="control-label">Post Sub Title</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input class="form-control" id="add_post_subtitle" name="add_post_subtitle"
                            placeholder="Post Subtitle" maxlength=1024 type="text" value="<?php echo set_value('add_post_subtitle');?>" required />
                            
                            <span class="text-danger"><?php echo form_error('add_post_subtitle'); ?></span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="add_post_content" class="control-label">Post Content</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <textarea class="form-control" id="add_post_content" name="add_post_content"
                            placeholder="Post Content" rows="10" style="resize:none"value="<?php echo set_value('add_post_content');?>" required />
                            </textarea>
                            
                            <span class="text-danger"><?php echo form_error('add_post_content'); ?></span>
                        </div>
                    </div>
                </div>
                
                                
                <div class="form-group">
                    <div class="col-lg-12 col-sm-12 text-center">                   
                        <input class="btn btn-deafult" id="btn_add_post" name="btn_add_post"
                            type="submit" value="Add Post" />
                        
                    </div>
                </div>
            </fieldset>


            <?php
                echo form_close(); 
            ?>  

            </div>


			
			<!--- mid section-->
			 <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

            </div>

        </div>
        <!-- /.row -->

        <hr>
    </div>
    <!-- /.container -->
