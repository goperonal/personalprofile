@extends('layouts.default')
@section('content')
<div class="sm:px-8 mt-16 sm:mt-32">
  <div class="mx-auto w-full max-w-7xl lg:px-8">
    <div class="relative px-4 sm:px-8 lg:px-12">
      <div class="mx-auto max-w-2xl lg:max-w-5xl">
        <header class="max-w-2xl">
          <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">Working as a website developer, I wrote down some things to keep in mind here</h1>
          <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">All of my long-form thoughts on programming, leadership, product design, and more, collected in chronological order.</p>
        </header>
        <div class="mt-16 sm:mt-20">
          <div class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
            <div class="flex flex-col space-y-16">
              {{-- {{ dd($posts);  }} --}}
              @foreach ($posts as $post)
                  <x-post-card :post='$post'/>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop