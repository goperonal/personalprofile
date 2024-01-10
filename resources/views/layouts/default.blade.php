<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body class="antialiased" x-data="{'darkMode': true, 'menuShow': false}" :class="{'dark': darkMode === true}">
        <div class="flex w-full bg-white dark:bg-black">
            <div class="fixed inset-0 flex justify-center sm:px-8 dark:bg-black"><div class="flex w-full max-w-7xl lg:px-8"><div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div></div></div>
            <div class="relative flex w-full flex-col">
                <header class="relative z-50 flex flex-none flex-col" style="height:var(--header-height);margin-bottom:var(--header-mb)">
                    @include('includes.header')
                </header>

                <main class="flex-auto">
                    @yield('content')
                </main>
                <footer class="mt-32 flex-none">
                    @include('includes.footer')
                </footer>
            </div>
        </div>
    </body>
</html>
