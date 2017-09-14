
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php';?>
<?php include 'inc/header.php'; ?>
<?php 
      include 'security_inside.php'; 
?>

    <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   
                    <div class="col-lg-12">

                      <?php include 'inc/notification.php';?>
                        <h1 class="page-header">
                         Add Event
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                 <div class="row">
                        <form class="form-horizontal" method="POST" action="event_process" enctype="multipart/form-data">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" required name="title" placeholder="xyz">
                            </div>
                          </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Location</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="location" placeholder="Kathmandu">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Summary</label>
                            <div class="col-sm-10">
                             <textarea class="form-control" name="summary" rows="3" style="resize:none;"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                             <textarea name="description" id="description" class="form-control" rows="6" style="resize:vertical;"></textarea>
                            </div>
                          </div>

                         <!--  <div class="form-group">
                            <label class="col-sm-2 control-label">Pictures</label>
                              <div class="col-sm-10">
                                <input type="file" accept="image/*" name="image" id="image"/>
                              </div>
                            </div> -->

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Date</label>
                              <div class="col-sm-10">
                                <input type="Date" name="date" id="date" placeholder="2017-06-01">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Time</label>
                              <div class="col-sm-10">
                                <input type="Time" name="time" id="time">
                              </div>
                            </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">
                                  Event type
                            </label>
                  
                            <div class="col-sm-10">
                                
                                <select class="form-control" name="category_id">
                                    <option selected="" disabled="">===Select any====</option>
                                    
                                     <option value="1">Achievement</option>
                                     <option value="2">Upcoming Event</option>
                                </select>
                            </div>  
                          </div>         

                           <div class="form-group">
                            <label class="col-sm-2 control-label">
                                  Prority
                            </label>
                  
                            <div class="col-sm-10">
                                
                                <select class="form-control" name="category_id">
                                    <option selected="" disabled="">===Select any====</option>
                                    
                                     <option value="1">High</option>
                                     <option value="0">Low</option>
                                </select>
                            </div>  
                          </div> 
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-success">Submit</button>
                              <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                          </div>
                        </form>
                  </div>
               
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
 

<?php include 'inc/footer.php';?>

