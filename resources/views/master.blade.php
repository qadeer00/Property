<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
  @include('style')
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
           @include('header')
        </header>
     
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            @include('sidebar')
                       <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
       
         
            
    <form>
      <center>
        <h1>For Rent Availability</h1>
       <p> RealHomes Elementor for Real Estate Search Form.</p>
      </center>
       <div class="row">
        <div class="col-sm-3">
            <select class="form-control form-control-lg">
            
                <option value="multan">Multan</option>
                <option value="karachi">Karachi</option>
                <option value="lahore">Lahore</option>
              </select>
    </div>
    <div class="col-sm-3">
    <select class="form-control form-control-lg">
            
      <option value="multan">Multan</option>
      <option value="karachi">Karachi</option>
      <option value="lahore">Lahore</option>
    </select>
</div>
<div class="col-sm-3">
<select class="form-control form-control-lg">
            
  <option value="multan">Multan</option>
  <option value="karachi">Karachi</option>
  <option value="lahore">Lahore</option>
</select>
</div>
    <div class="col-sm-3">
      <select class="form-control form-control-lg">
      
          <option value="multan">Multan</option>
          <option value="karachi">Karachi</option>
          <option value="lahore">Lahore</option>
        </select>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <select class="form-control form-control-lg">
            
                <option value="multan">Multan</option>
                <option value="karachi">Karachi</option>
                <option value="lahore">Lahore</option>
              </select>
    </div>
       <div class="col-sm-3">
        <select class="form-control form-control-lg">
            
            <option value="multan">Multan</option>
            <option value="karachi">Karachi</option>
            <option value="lahore">Lahore</option>
          </select>
    </div>
        <div class="col-sm-3">
         <input type="text" class="form-control"  placeholder="Price Range From"> 
    </div>
       <div class="col-sm-3">
        <input type="text"class="form-control" placeholder="Price Range To"> 
    </div>
      
    </div>
    <div class="row">
      <div class="col-xm-12">
        <button type="button" class="btn btn-outline-success">Search</button>
      </div>
    </div>
  
</form>



<table class="table" style="background-color:white;margin-top:50px;border-style:groove">
  <thead class="thead-light">
    <tr>
      <th scope="col" style="font-size: 14px">Sr.No</th>
      <th scope="col"  style="font-size: 14px">Location</th>
      <th scope="col"  style="font-size: 14px">Property</th>
      <th scope="col"  style="font-size: 14px">Property Type</th>
      <th scope="col"  style="font-size: 14px">Floor No</th>
      <th scope="col"  style="font-size: 14px">View</th>
      <th scope="col"  style="font-size: 14px">Size</th>
      <th scope="col"  style="font-size: 14px">Price</th>
      <th scope="col"  style="font-size: 14px">Comments</th>
      <th scope="col" style="font-size: 14px">Calling Date</th>
      <th scope="col" style="font-size: 14px">Availability Status</th>
      <th scope="col" style="font-size: 14px">Is Post</th>
      <th scope="col" style="font-size: 14px">Status</th>
      <th scope="col"style="font-size: 14px">TeleCall Agent</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@4</td>
      <td>Mark</td>
      <td>O3</td>
      <td>2</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@5</td>
      <td>Mark</td>
    
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@4</td>
      <td>Mark</td>
      <td>O3</td>
      <td>2</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@5</td>
      <td>Mark</td>
    
    </tr>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@4</td>
      <td>Mark</td>
      <td>O3</td>
      <td>2</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@5</td>
      <td>Mark</td>
    
    </tr>
  </tbody>
</table>

            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
         
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
  
   
@include('js')
</body>

</html>