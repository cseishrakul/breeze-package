@extends('seller.seller_master')

@section('seller')
                    <!-- page content -->
  <div class="mt-0 pt-0 login_page center_container">
    <div class="center_content">
      <div class="logo">
        <img src="{{asset('panel/assets/images/logo.png')}}" alt="" class="img-fluid">
      </div>
      <form action="{{route('seller_log')}}" class="d-block" method="post">
        @csrf
        @if(Session::has('error'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> {{session::get('error')}} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        <div class="form-group icon_parent">
          <label for="password">Email</label>
          <input type="email" class="form-control"  name="email" placeholder="Email Address">
          <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
        </div>
        <div class="form-group icon_parent">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
        </div>
        <div class="form-group">
            <label class="chech_container">Remember me
                <input type="checkbox" name="remember" id="remember" >
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <a class="registration" href="{{route('seller_register')}}">Create new account</a><br>
            <a href=" " class="text-white">I forgot my password</a>
            <button type="submit" class="btn btn-blue">Login</button>
        </div>
      </form>
      <div class="footer">
          <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
      </div>
    </div>
  </div>

@endsection
