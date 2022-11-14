<!DOCTYPE html>
<html>
<head>
 <title>Home Page</title>
</head>
<body>
       <h1>Cusomter Home Page</h1>

{{--       login register logout  | post     // post method net ma ya mal --}}

       @if(session('authMessage'))
         <p style="color: red">{{session('authMessage')}}</p>
           @endif

       <span><a href="{{'customer/home'}}">Home</a></span> |
       <span><a href="{{'customer/about'}}">About</a></span> |
       <span><a href="{{'customer/service'}}">Service</a></span> |
       <span><a href="{{'userPage'}}">UserPage</a></span>

       <h3>
{{--         {{ Auth::user() }}    --}}{{--  win htar dae lu ye inform ko yu dar--}}

{{--           {{ Auth::user()->name }}--}}
           {{ Auth::user()->email }}
       </h3>

      <form action="{{route('logout')}}" method="post">    {{--  jetbrain ko user htar lot pr sir--}}
          @csrf
         <input type="submit" value="Logout">

       </form>
</body>
</html>
