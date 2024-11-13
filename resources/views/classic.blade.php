@extends('themes.classic')

@section('content')
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <main class="mt-6">
                    @if(request('theme'))
                        <label for="">Now selected: {{ request('theme') }}</label>
                    @endif

                    <form action="/" method="GET">
                        <select class="select-style" style="" name="theme" id="">
                            <option  value="">Select Theme</option>
                            <option @if(request('theme') === "cuba") selected @endif value="cuba">Cuba</option>
                            <option @if(request('theme') === "classic") selected @endif value="classic">Classic</option>
                        </select>
                        <button class="button-style" type="submit">Select</button>
                    </form>

                </main>
            </div>
        </div>
    </div>
@endsection