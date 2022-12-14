<x-welcome-layout>

                <!-- Session Status -->
                <x-auth-session-status class="" :status="session('status')" />


				<form class="login100-form validate-form"
                    method="POST" action="{{ route('login') }}">
                    @csrf



					<span class="login100-form-title">
						Member Login
					</span>

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
                    
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-1" :errors="$errors" />

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>

                        @if (Route::has('password.request'))
                            <a class="txt2" href="{{ route('password.request') }}">
                                Username / Password?
                            </a>
                        @endif
					</div>

					<div class="text-center p-t-136">


                        @if (Route::has('register'))
                            <a class="txt2" href="{{ route('register') }}">
                                Create your Account
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a> 
                        @endif
					</div>
				</form>

</x-welcome-layout>


