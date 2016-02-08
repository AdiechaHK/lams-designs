<?php include_once("includes/header.php"); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Library Attendance Management System
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->
          <div class="col-lg-12">
            <div class="col-lg-8">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Task Completed</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Select a Category</label>
                      <select class="form-control">
                        <option>Gestion du fonds</option>
                        <option>Documentaire</option>
                        <option>Communication</option>
                        <option>Pedagogie</option>
                        <option>Mediation culturelle</option>
                      </select>
                    </div>
                    <p><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Gestion du fonds</p>
                    <p><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Documentaire</p>
                    <p><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Communication</p>
                    <p><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Pedagogie</p>
                    <p><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;Mediation culturelle</p>

                    <h3 class="box-title"><i class="fa fa-plus-square"></i>&nbsp;Add New Example</h3>
                    <!-- form start -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label>Select a Category</label>
                      <select class="form-control">
                        <option>Gestion du fonds</option>
                        <option>Documentaire</option>
                        <option>Communication</option>
                        <option>Pedagogie</option>
                        <option>Mediation culturelle</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Due Date</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Date">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Urgent
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Normal
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Remind me Date</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Date">
                    </div>
                  </div><!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  <!-- </form> -->
                </form>
              </div><!-- /.box -->
            </div>
          </div>
          <div class="clearfix"></div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php include_once("includes/footer.php"); ?>