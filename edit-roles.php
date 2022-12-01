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
                  <li class="breadcrumb-item active" aria-current="page">Edit Roles</li>
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
                    <form class="forms-sample" action="/save_edit_roles" method="POST">
                      <div class="form-group">
                      <input type="hidden" name="id" value="{{ $roles->getId() }}"/>
                        @csrf
                        <label for="rolesName">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="{{ $roles->getName() }}">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Save</button>
                      <a href="{{url('view_roles')}}" class="btn btn-danger">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>