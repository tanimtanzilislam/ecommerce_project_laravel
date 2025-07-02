<!DOCTYPE html>
<html>
<head>
  @include('admin.css')
</head>
<body>
  @include('admin.header')

  <style type="text/css">
    input[type='text'] {
      width: 400px;
      height: 50px;
    }

    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 30px;
    }
    .table_deg{
      text-align:center;
      
    }
  </style>

  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->

    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">

          <form method="POST" action="{{ url('/add_category') }}">
            @csrf

             <h1 style="color:white"> Add Category</h1>
            <div class="div_deg">

           
              <input type="text" name="category" placeholder="Enter category" required>
              <input class="btn btn-primary ml-2" type="submit" value="Add Category">
            </div>
          </form>

        </div>
        <div>

        <table class="table_deg">
          <tr>
            <th>Category</th>
  </tr>
  <tr>
    <td>Sports </td>
  </tr>
  </table>
            </div>
      </div>
    </div>
  </div>

  <!-- JavaScript files -->
  <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
  <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
  <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>
</html>
