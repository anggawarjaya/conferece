@extends('layouts.app')

@section('title', 'Terlalu Banyak Permintaan')

@section('content')
<div class="min-h-screen bg-gray-50 flex items-center justify-center px-4">
    <div class="max-w-md w-full text-center">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="mb-6">
                <div class="mx-auto w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-exclamation-triangle text-red-600 text-3xl"></i>
                </div>
                <h1 class="text-4xl font-bold text-red-600 mb-2">429</h1>
                <h2 class="text-xl font-bold text-gray-800 mb-4">Too Many Requests</h2>
            </div>

            <div class="mb-6">
                <p class="text-gray-700 mb-4">
                    You have made too many request attempts. Please try again in a few moments.
                </p>

                @if(isset($retryAfter))
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
                        <div class="text-sm text-blue-800 mb-2">Please wait:</div>
                        <div id="simpleCountdown" class="text-2xl font-bold text-blue-600"></div>
                    </div>
                @endif
            </div>

            <div class="space-y-3">
                <button onclick="goBack()" 
                    class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Go Back
                </button>
                
                <a href="{{ url('/') }}" 
                    class="block w-full border border-gray-300 text-gray-700 py-3 px-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors duration-200">
                    <i class="fas fa-home mr-2"></i>
                    Home Page
                </a>
            </div>
        </div>
    </div>
</div>

@if(isset($retryAfter))
<script>
    let timeLeft = {{ intval($retryAfter) }};

    function updateSimpleCountdown() {
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        const display = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

        document.getElementById('simpleCountdown').textContent = display;

        if (timeLeft > 0) {
            timeLeft--;
            setTimeout(updateSimpleCountdown, 1000);
        } else {
            goBack()
        }
    }

    updateSimpleCountdown();
</script>
@endif

<script>
    function goBack() {
        if (window.history.length > 1) {
            window.history.back();
        } else {
            window.location.href = "{{ url()->previous() }}";
        }
    }
</script>
@endsection
