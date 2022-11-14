{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4"/>--}}

{{--        <form method="POST" action="{{ route('register') }}" >--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="name" value="{{ __('Name') }}" />--}}
{{--                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required></x-jet-input>--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="Role" />--}}
{{--              <select class="form-control shadow-lg" name="role">--}}
{{--                  <option value="admin">Admin</option>--}}
{{--                  <option value="user">User</option>--}}
{{--              </select>--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password"></x-jet-input>--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"></x-jet-label>--}}
{{--                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="terms">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <x-jet-checkbox name="terms" id="terms" required />--}}

{{--                            <div class="ml-2">--}}
{{--                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',--}}
{{--                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',--}}
{{--                                ]) !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </x-jet-label>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}



<html>
<head>
 <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5 shadow-sm py-5">
          <div class="col-6 offset-3">
           <h3>Register Page</h3>
              <form action="{{route('register')}}" method="post">
                  @csrf

                  @error('terms')
                  <p class="text-danger">{{$message}}</p>
                  @enderror

                  <label for="">Name</label>
                  <input type="text" name="name" id="" class="form-control" value={{old('name')}}>
                  @error('name')
                     <p class="text-danger">{{$message}}</p>
                  @enderror

                  <label for="">Email</label>
                  <input type="email" name="email" id="" class="form-control" value="{{old('email')}}">
                  @error('email')
                    <p class="text-danger">{{$message}}</p>
                  @enderror

                  <label>Role</label>
                  <div class="mt-2">
                      <select class="form-control shadow-lg" name="role">
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                      </select>
                  </div>


                  <label for="">Password</label>
                  <input type="password" name="password" id="" class="form-control">
                  @error('password')
                  <p class="text-danger">{{$message}}</p>
                  @enderror

                  <label for="">Password Confiramtion</label>
                  <input type="password" name=" password_confirmation" id="" class="form-control">

                  <input type="submit" class="btn btn-danger mt-3 float-end" value="Register">
              </form>
          </div>
    </div>
</body>
</html>
