@extends('layouts.default')
@section('content')

<div class="sm:px-8 mt-16 sm:mt-32">
    <div class="mx-auto w-full max-w-7xl lg:px-8">
      <div class="relative px-4 sm:px-8 lg:px-12">
        <div class="mx-auto max-w-2xl lg:max-w-5xl">
          <header class="max-w-2xl">
            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl">Software I use, gadgets I love, and other things I recommend.</h1>
            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">I get asked a lot about the things I use to build software, stay productive, or buy to fool myself into thinking I’m being productive when I’m really just procrastinating. Here’s a big list of all of my favorite stuff.</p>
          </header>
          <div class="mt-16 sm:mt-20">
            <div class="space-y-20">
              <section aria-labelledby=":S1:" class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
                <div class="grid max-w-3xl grid-cols-1 items-baseline gap-y-8 md:grid-cols-4">
                  <h2 id=":S1:" class="text-sm font-semibold text-zinc-800 dark:text-zinc-100">Workstation</h2>
                  <div class="md:col-span-3">
                    <ul role="list" class="space-y-16">
                      <li class="group relative flex flex-col items-start">
                        <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">MacBook Air (M1, 2020), 8GB RAM</h3>
                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">I was using an M1-based MacBook Air prior to this and the difference is night and day. I’ve never heard the fans turn on a single time, even under the incredibly heavy loads I put it through with our various launch simulations.</p>
                      </li>
                      <li class="group relative flex flex-col items-start">
                        <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">Apple Magic Keyboard</h3>
                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">As my productivity at home, I use this device in my daily life to work efficiently</p>
                      </li>
                      <li class="group relative flex flex-col items-start">
                        <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">Fantech OC-A259 Office Chair</h3>
                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">If I’m going to slouch in the worst ergonomic position imaginable all day, I might as well do it in an expensive chair.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </section>
              <section aria-labelledby=":S2:" class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
                <div class="grid max-w-3xl grid-cols-1 items-baseline gap-y-8 md:grid-cols-4">
                  <h2 id=":S2:" class="text-sm font-semibold text-zinc-800 dark:text-zinc-100">Development tools</h2>
                  <div class="md:col-span-3">
                    <ul role="list" class="space-y-16">
                      <li class="group relative flex flex-col items-start">
                        <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">Sublime Text 4</h3>
                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">I don’t care if it’s missing all of the fancy IDE features everyone else relies on, Sublime Text is still the best text editor ever made.</p>
                      </li>
                      <li class="group relative flex flex-col items-start">
                        <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">iTerm2</h3>
                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">I’m honestly not even sure what features I get with this that aren’t just part of the macOS Terminal but it’s what I use.</p>
                      </li>
                      <li class="group relative flex flex-col items-start">
                        <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">Navicat Premium</h3>
                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">Great software for working with databases. Has saved me from building about a thousand admin interfaces for my various projects over the years.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </section>
              <section aria-labelledby=":S3:" class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
                <div class="grid max-w-3xl grid-cols-1 items-baseline gap-y-8 md:grid-cols-4">
                  <h2 id=":S3:" class="text-sm font-semibold text-zinc-800 dark:text-zinc-100">Design</h2>
                  <div class="md:col-span-3">
                    <ul role="list" class="space-y-16">
                      <li class="group relative flex flex-col items-start">
                        <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">Figma</h3>
                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">We started using Figma as just a design tool but now it’s become our virtual whiteboard for the entire company. Never would have expected the collaboration features to be the real hook.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </section>
              <section aria-labelledby=":S4:" class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
                <div class="grid max-w-3xl grid-cols-1 items-baseline gap-y-8 md:grid-cols-4">
                  <h2 id=":S4:" class="text-sm font-semibold text-zinc-800 dark:text-zinc-100">Productivity</h2>
                  <div class="md:col-span-3">
                    <ul role="list" class="space-y-16">
                      <li class="group relative flex flex-col items-start">
                        <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">Alfred</h3>
                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">It’s not the newest kid on the block but it’s still the fastest. The Sublime Text of the application launcher world.</p>
                      </li>
                      <li class="group relative flex flex-col items-start">
                        <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">Reflect</h3>
                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">Using a daily notes system instead of trying to keep things organized by topics has been super powerful for me. And with Reflect, it’s still easy for me to keep all of that stuff discoverable by topic even though all of my writing happens in the daily note.</p>
                      </li>
                      <li class="group relative flex flex-col items-start">
                        <h3 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">Focus</h3>
                        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">Simple tool for blocking distracting websites when I need to just do the work and get some momentum going.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop