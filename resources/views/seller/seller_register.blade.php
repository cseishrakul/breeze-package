@extends('seller.seller_master')

@section('seller')
                <!-- page content -->
  <div class="registration_page center_container">
    <div class="center_content">
        <div class="logo">
            <img src="panel/assets/images/logo.png" alt="" class="img-fluid">
        </div>
        <form action="{{route('seller.register.create')}}" method="post">
          @csrf
          <div class="form-group icon_parent">
            <label for="uname">Username</label>
            <input type="text" class="form-control" name="name" placeholder="Your Name">
            <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
          </div>
          <div class="form-group icon_parent">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="Email@ email.com">
            <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
          </div>
          <div class="form-group icon_parent">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="***********">
              <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
          </div>
          <div class="form-group icon_parent">
              <label for="rtpassword">Re-type Password</label>
              <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
              <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
          </div>
          <div class="form-group">
              <a class="registration" href="{{route('seller_login')}}">Already have an account</a><br>
              <button type="submit" class="btn btn-blue">Signup</button>
          </div>
        </form>
        <div class="footer">
            <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
        </div>
      </div>
    </div>
@endsection
