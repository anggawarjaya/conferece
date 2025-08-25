<div class="min-h-screen bg-gray-50">

        <!-- Main Content -->
        <main class="flex-1 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <!-- Login Card -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <div class="mb-4">
                            <i class="fas fa-user-circle text-blue-600 text-6xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back</h2>
                        <p class="text-gray-600">Sign in to your conference account</p>
                    </div>

                    <!-- Login Form -->
                    <form action="{{route('login')}}" method="POST" id="loginForm" class="space-y-6">
                        @csrf
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                                Email Address
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                @error('email')
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                                <input type="email" id="email" name="email" required
                                    class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200"
                                    placeholder="Enter your email">
                            </div>
                            <div id="emailError" class="mt-1 text-sm text-red-600 hidden"></div>
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                                Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                @error('password')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                                <input type="password" id="password" name="password" required
                                    class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200"
                                    placeholder="Enter your password">
                                <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <i class="fas fa-eye text-gray-400 hover:text-gray-600 transition-colors duration-200"></i>
                                </button>
                            </div>
                            <div id="passwordError" class="mt-1 text-sm text-red-600 hidden"></div>
                        </div>

                        <div class="flex items-center justify-end">
                            <div class="text-sm">
                                @if (Route::has('password.request'))
                                <button type="button" id="forgotPasswordBtn" class="text-blue-600 hover:text-blue-500 font-medium">
                                    Forgot password?
                                </button>
                                @endif
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" id="loginBtn"
                                class="w-full bg-blue-600 text-white py-3 px-4 rounded-md font-semibold text-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                                <i class="fas fa-sign-in-alt mr-2"></i>
                                <span id="loginText">Sign In</span>
                            </button>
                        </div>

                        <!-- Register Link -->
                        <div class="text-center">
                            <p class="text-sm text-gray-600">
                                Don't have an account?
                                <a href="registration-form.html" class="text-blue-600 hover:text-blue-500 font-medium">
                                    Register here
                                </a>
                            </p>
                        </div>
                    </form>
                </div>

                <!-- Additional Info -->
                <div class="text-center">
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                        <h3 class="text-sm font-medium text-blue-800 mb-2">Need Help?</h3>
                        <p class="text-xs text-blue-700 mb-2">
                            If you're having trouble logging in, please contact our support team.
                        </p>
                        <div class="space-y-1 text-xs text-blue-600">
                            <div><i class="fas fa-envelope mr-1"></i> support@conference.org</div>
                            <div><i class="fas fa-phone mr-1"></i> +1 (555) 123-4567</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white shadow-lg mt-auto">
            <div class="max-w-7xl mx-auto px-4 py-6 text-center">
                <p class="text-gray-600 text-sm">&copy; 2024 Conference Portal. All rights reserved.</p>
            </div>
        </footer>
    </div>
<div class="flex h-screen">
  <div class="w-full bg-gray-100 lg:w-1/2 flex items-center justify-center">
    <div class="max-w-md w-full p-6">
      <h1 class="text-3xl font-semibold mb-6 text-black text-center">Sign Up</h1>
      <h1 class="text-sm font-semibold mb-6 text-gray-500 text-center">Join to Our Community with all time access and free </h1>
      <div class="mt-4 flex flex-col lg:flex-row items-center justify-between">
        <div class="w-full lg:w-1/2 mb-2 lg:mb-0">
          <button type="button" class="w-full flex justify-center items-center gap-2 bg-white text-sm text-gray-600 p-2 rounded-md hover:bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4" id="google">
              <path fill="#fbbb00" d="M113.47 309.408 95.648 375.94l-65.139 1.378C11.042 341.211 0 299.9 0 256c0-42.451 10.324-82.483 28.624-117.732h.014L86.63 148.9l25.404 57.644c-5.317 15.501-8.215 32.141-8.215 49.456.002 18.792 3.406 36.797 9.651 53.408z"></path>
              <path fill="#518ef8" d="M507.527 208.176C510.467 223.662 512 239.655 512 256c0 18.328-1.927 36.206-5.598 53.451-12.462 58.683-45.025 109.925-90.134 146.187l-.014-.014-73.044-3.727-10.338-64.535c29.932-17.554 53.324-45.025 65.646-77.911h-136.89V208.176h245.899z"></path>
              <path fill="#28b446" d="m416.253 455.624.014.014C372.396 490.901 316.666 512 256 512c-97.491 0-182.252-54.491-225.491-134.681l82.961-67.91c21.619 57.698 77.278 98.771 142.53 98.771 28.047 0 54.323-7.582 76.87-20.818l83.383 68.262z"></path>
              <path fill="#f14336" d="m419.404 58.936-82.933 67.896C313.136 112.246 285.552 103.82 256 103.82c-66.729 0-123.429 42.957-143.965 102.724l-83.397-68.276h-.014C71.23 56.123 157.06 0 256 0c62.115 0 119.068 22.126 163.404 58.936z"></path>
            </svg> Sign Up with Google </button>
        </div>
        <div class="w-full lg:w-1/2 ml-0 lg:ml-2">
          <button type="button" class="w-full flex justify-center items-center gap-2 bg-white text-sm text-gray-600 p-2 rounded-md hover:bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="github" class="w-4">
              <path d="M7.999 0C3.582 0 0 3.596 0 8.032a8.031 8.031 0 0 0 5.472 7.621c.4.074.546-.174.546-.387 0-.191-.007-.696-.011-1.366-2.225.485-2.695-1.077-2.695-1.077-.363-.928-.888-1.175-.888-1.175-.727-.498.054-.488.054-.488.803.057 1.225.828 1.225.828.714 1.227 1.873.873 2.329.667.072-.519.279-.873.508-1.074-1.776-.203-3.644-.892-3.644-3.969 0-.877.312-1.594.824-2.156-.083-.203-.357-1.02.078-2.125 0 0 .672-.216 2.2.823a7.633 7.633 0 0 1 2.003-.27 7.65 7.65 0 0 1 2.003.271c1.527-1.039 2.198-.823 2.198-.823.436 1.106.162 1.922.08 2.125.513.562.822 1.279.822 2.156 0 3.085-1.87 3.764-3.652 3.963.287.248.543.738.543 1.487 0 1.074-.01 1.94-.01 2.203 0 .215.144.465.55.386A8.032 8.032 0 0 0 16 8.032C16 3.596 12.418 0 7.999 0z"></path>
            </svg> Sign Up with Github </button>
        </div>
      </div>
      <div class="mt-4 text-sm text-gray-600 text-center">
        <p>or with email</p>
      </div>

    <form method="POST" action="{{ route('register') }}">
      @csrf

        <div class="mb-3" >
          <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
          <input type="text" id="name" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="mb-3" >
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="text" id="email" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3" >
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3" >
          <label for="password-confirm" class="block text-sm font-medium text-gray-700">Confirm Password</label>
          <input type="password" id="password-confirm" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div>
          <button type="submit" class="w-full bg-black text-white p-2 rounded-md hover:bg-gray-800 focus:outline-none focus:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300">Sign Up</button>
        </div>

      </form>
      <div class="mt-4 text-sm text-gray-600 text-center">
        <p>Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection