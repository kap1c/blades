@extends('themes.cuba')

@section('content')
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        @if(request('theme') !== 'cuba')
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
        @endif

        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                <main class="mt-6">
                    <label class="contacts_style{{request()->has('theme')?'_'.request('theme'):''}}" for="">lorem ipsum dolot lorem ipsum dolot lorem ipsum dolot  lorem ipsum dolot lorem ipsum dolot lorem ipsum dolot</label>

                </main>
            </div>
        </div>
    </div>
@endsection