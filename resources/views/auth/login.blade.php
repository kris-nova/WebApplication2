<form method="post" action="/auth/login">
  {!! csrf_field() !!}
  <div>
    Email: <input type="email" value="{{old('email')}}">
  </div>
  <div>
    Password: <input type="password" id="password">
  </div>
  <div>
    <input type="checkbox" name='remember'> Remember Me
  </div>
  <div>
    <button type="submit">Login</button>
  </div>
</form>
