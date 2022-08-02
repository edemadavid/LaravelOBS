<x-welcome-layout>

                <!-- Session Status -->
                <x-auth-session-status class="" :status="session('status')" />


				<form class="login100-form validate-form"
                    method="POST" action="{{ route('register') }}">
                    @csrf



					<span class="login100-form-title">
						Member Register
					</span>

                    <div class="wrap-input100 validate-input" 
                    >
						<input class="input100" type="text" name="name" placeholder="Name" value="{{old('name')}}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" 
                        data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" value="{{old('email')}}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" autocomplete="current-password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password_confirmation" autocomplete="current-password" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-1" :errors="$errors" />

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							have an account?
						</span>

                        @if (Route::has('password.request'))
                            <a class="txt2" href="{{ route('login') }}">
                                Login
                            </a>
                        @endif
					</div>

				</form>

</x-welcome-layout>


