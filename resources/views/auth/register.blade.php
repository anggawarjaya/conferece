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
        <h1 class="text-2xl font-bold text-slate-900">Create an Account</h1>
        <p class="text-slate-600">Register to the System to submit your paper, manage submissions, and participate in the conference.</p>
      </div>

      <!-- Form Login -->
      <div class="p-6 space-y-6">
        <form method="POST" action="{{ route('register') }}" class="space-y-2">
          @csrf

          <!-- Email -->
          <div class="space-y-2" >
            <label for="name" class="text-sm font-medium text-slate-900">Username</label>
            <input 
              type="text" 
              id="name" 
              class="w-full pl-3 pr-3 py-3 bg-white border border-slate-200 rounded-md focus:border-cyan-600 focus:ring-2 focus:ring-cyan-600 outline-none" 
              name="name"
              placeholder="Enter your name"
              value="{{ old('name') }}" 
              required 
              autofocus
              />
            @error('name')
              <span class="p-3 text-sm text-red-600 bg-red-100 rounded-md" role="alert">
                {{ $message }}
              </span>
            @enderror
          </div>
          <div class="space-y-2">
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
              <span class="p-3 text-sm text-red-600 bg-red-100 rounded-md" role="alert">
                {{ $message }}
              </span>
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
              required
              class="w-full pl-3 pr-3 py-3 bg-white border border-slate-200 rounded-md focus:border-cyan-600 focus:ring-2 focus:ring-cyan-600 outline-none">

            @error('password')
              <span class="p-3 text-sm text-red-600 bg-red-100 rounded-md" role="alert">
                {{ $message }}
              </span>
            @enderror
          </div>

          <div class="space-y-2">
            <label for="password-confirm" class="text-sm font-medium text-slate-900">Password Confirm</label>
            <input
              id="password-confirm"
              type="password"
              name="password_confirmation"
              placeholder="Enter your password confirmation"
              required
              class="w-full pl-3 pr-3 py-3 bg-white border border-slate-200 rounded-md focus:border-cyan-600 focus:ring-2 focus:ring-cyan-600 outline-none">
          </div>

          <!-- Remember -->
          <div class="flex items-center justify-end text-sm">
            <a href="{{ route('password.request') }}" class="text-cyan-600 hover:text-cyan-700 font-medium">Forgot password?</a>
          </div>

          <!-- Button -->
          <button type="submit" class="w-full py-3 bg-cyan-600 hover:bg-cyan-700 text-white font-medium rounded-md">
            Sign Up
          </button>
        </form>

        <!-- Register -->
        <div class="text-center text-sm text-slate-600">
          Already have an account? 
          <a href="{{ route('login') }}" class="text-cyan-600 hover:text-cyan-700 font-medium">Login</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
