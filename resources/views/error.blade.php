@extends('adminlte::page')

@section('title', 'Error')

@section('content_header')
    <div class="content-header">
            <div class="container-fluid">
                    <h1>Error</h1>
            </div>
        </div>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="error-page">
<h2 class="headline text-warning"> 404</h2>
<div class="error-content">
<h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
<p>
 We could not find the page you were looking for.
Meanwhile, you may <a href="/">return to dashboard</a> or try using the search form.
</p>
<form class="search-form">
<div class="input-group">
<input type="text" name="search" class="form-control" placeholder="Search">
<div class="input-group-append">
<button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
</button>
</div>
</div>

</form>
</div>

</div>
        </div>
    </div>
    <div class="content-wrapper " style="min-height: 552px;">

    
            <div class="content-header">
            <div class="container-fluid">
                    <h1>Error</h1>
            </div>
        </div>
    
    
    <div class="content">
        <div class="container-fluid">
            <div class="error-page">
<h2 class="headline text-warning"> 404</h2>
<div class="error-content">
<h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
<p>
 We could not find the page you were looking for.
Meanwhile, you may <a href="/">return to dashboard</a> or try using the search form.
</p>
<form class="search-form">
<div class="input-group">
<input type="text" name="search" class="form-control" placeholder="Search">
<div class="input-group-append">
<button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
</button>
</div>
</div>

</form>
</div>

</div>
        </div>
    </div>

</div>
<div id="sidebar-overlay"></div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   <script src="https://cse4500-laravel9.herokuapp.com//vendor/jquery/jquery.min.js"></script>
   <script src="https://cse4500-laravel9.herokuapp.com//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="https://cse4500-laravel9.herokuapp.com//vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://cse4500-laravel9.herokuapp.com//vendor/adminlte/dist/js/adminlte.min.js"></script>
   </body>
   </html>
@stop
