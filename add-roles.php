<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Roles </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Roles</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Roles</li>
                </ol>
              </nav>
            </div>
            @if ($errors->any())
            <div class ="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
            </div>
            @endif
            <div class="row justify-content-center">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="/save_roles" method="POST">
                    @csrf
                      <div class="form-group">
                        <label for="RolesName">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Roles Name">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <a href="{{url('view_roles')}}" class="btn btn-danger">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/select2/select2.min.js"></script>
    <script src="admin/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/file-upload.js"></script>
    <script src="admin/assets/js/typeahead.js"></script>
    <script src="admin/assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>