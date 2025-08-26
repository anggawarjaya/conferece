@extends('auth.layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 flex items-center justify-center p-4">
  <div class="w-full max-w-md">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
      <!-- Header -->
      <div class="text-center p-2">
        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-2 shadow-md">
          <img src="{{ asset('assets/img/logo-pasca-unimed.jpeg') }}" alt="Unimed Logo" class="w-16 h-16 object-contain" />
        </div>
        <h1 class="text-2xl font-bold text-slate-900">Welcome Back</h1>
        <p class="text-slate-600">Sign in to your account to continue</p>
      </div>

      <!-- Form Login -->
      <div class="p-6 space-y-6">
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
          @csrf

          <!-- Email -->
          <div class="space-y-1">
            <label for="email" class="text-sm font-medium text-slate-900">Email</label>
            <input
              id="email"
              type="email"
              name="email"
              placeholder="Enter your email"
              value="{{ old('email') }}"
              class="w-full pl-3 pr-3 py-3 bg-white border border-slate-200 rounded-md focus:border-cyan-600 focus:ring-2 focus:ring-cyan-600 outline-none"
              required
            />
            @error('email')
              <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>

          <!-- Password -->
          <div class="space-y-2">
            <label for="password" class="text-sm font-medium text-slate-900">Password</label>
            <input
              id="password"
              type="password"
              name="password"
              placeholder="Enter your password"
              required autocomplete="current-password"
              class="w-full pl-3 pr-3 py-3 bg-white border border-slate-200 rounded-md focus:border-cyan-600 focus:ring-2 focus:ring-cyan-600 outline-none @error('password') is-invalid @enderror">

            @error('password')
              <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
          </div>

          <!-- Remember -->
          <div class="flex items-center justify-end text-sm">
            <a href="{{ route('password.request') }}" class="text-cyan-600 hover:text-cyan-700 font-medium">Forgot password?</a>
          </div>

          <!-- Button -->
          <button type="submit" class="w-full py-3 bg-cyan-600 hover:bg-cyan-700 text-white font-medium rounded-md">
            Sign In
          </button>
        </form>

        <!-- Register -->
        <div class="text-center text-sm text-slate-600">
          Don't have an account? 
          <a href="{{ route('register') }}" class="text-cyan-600 hover:text-cyan-700 font-medium">Sign up</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
