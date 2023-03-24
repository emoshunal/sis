<?php include('layout/header.php');  ?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include('layout/nav.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include('layout/sidebar.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Student List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Student List</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <!-- /.container-fluid -->
          <div class="row">
            <div class="col-md-4">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> New</button>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Responsive Hover Table</h3>

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="myTable">
                    <thead>
                      <tr>
                        <th>Student Id</th>
                        <th>Student Name</th>
                        <th>Section</th>
                        <th>Subjects</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>

        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <?php include('layout/footer.php'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="list_action.php" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="">Student Id</label>
              <input type="text" name="studId" id="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Student Name</label>
              <input type="text" name="studName" id="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Year and Section</label>
              <input type="text" name="yr_sec" id="" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Subject</label>
              <input type="text" name="subject" id="" class="form-control">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="btnsave" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        </form>
      </div>
    </div>
    <div class="modal fade" id="updatemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="list_action.php" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="">Student Id</label>
              <input type="text" name="studId"  id="studId" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Student Name</label>
              <input type="text" name="studName" id="studName" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Year and Section</label>
              <input type="text" name="yr_sec" id="yr_sec" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Subject</label>
              <input type="text" name="subject" id="subject" class="form-control">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="btnsave" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        </form>
      </div>
    </div>
    <?php include('layout/script.php');  ?>
</body>
<script>
    $(document).on("click",".edit",function(){
      
            var id = $(this).data("id");
            $.ajax({
              url:"list_update.php",
              type: "POST",
              data: {
                id: id
              },
              dataType: "JSON",
              success:function(data){
                $("#studId").val(data.idnumber);
                $("#studName").val(data.name);
                $("#subject").val(data.subject_id);
                $("#yr_sec").val(data.yr_sec);
                $("#updatemodal").modal("show")
              }
             

         
        });
    });
</script>
<script>
  $(document).ready(function(){
    $("#myTable").dataTable({
      "processing" : true,
      "ajax": "fetch.php",

      "columns" : [
        {data: 'idnumber'},
        {data: 'name'},
        {data: 'subject_id'},
        {data: 'yr_sec'},
        {data: null,
          className: "dt-center",
          orderable: false,
          "mRender" : function(data, type, row){
            return '<a href="#" class="btn btn-warning edit" data-id='+data.id+'>Edit</a>'
          }
        }
      ]
    })
  })
</script>
</html>