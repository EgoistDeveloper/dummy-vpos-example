@extends('layout')

@section('content')
<h1 class="text-xl text-green-500 font-bold">
    Succcess
</h1>

<pre class="mt-6">
    {{ print_r(request()->all(), true) }}
</pre>

<a href="{{ url('/') }}" class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600">
    Return to Home
</a>
@endsection
