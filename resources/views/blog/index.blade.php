@extends('layouts.app')
@section('content')
  <div class="bg-blue-950">
    <div class="px-16 py-8 xl:ml-auto xl:mr-auto xl:w-[1280px]">
      <div class="mt-8 h-full md:mt-12">
        @for ($i = 0; $i < 6; $i++)
          <div class="mt-6 flex flex-wrap items-center bg-blue-950">
            <div class="flex flex-col md:w-1/4">
              <a href="">
                <img class="h-auto w-3/4 object-cover md:rounded-none" src="{{ asset('assets/images/my.jpg') }}"
                  alt="">
            </a>
            </div>
            <div class="flex flex-col justify-between leading-none md:w-3/4">
              <a href="">
                <h5 class="mb-2 text-[24px] font-bold tracking-wide text-white md:mb-4 md:text-[44px]">
                  Inspiration for Creating Content
                </h5>
              </a>
              <p class="mb-2 text-[18px] font-normal text-gray-300 md:mb-3 md:text-[32px]">
                Here are the biggest enterprise
                technology
                acquisitions of 2021 so far, in reverse chronological order.</p>
              <div class="mt-4 flex">
                <div class="flex-col md:w-1/2">
                  <p class="mb-2 text-[16px] font-normal text-gray-200 dark:text-gray-400 md:mb-3 md:text-[20px]">
                    Jan 1, 2023</p>
                </div>
                <div class="flex-col text-right md:w-1/2">
                  <p class="mb-2 text-[16px] font-normal text-gray-200 dark:text-gray-400 md:mb-3 md:text-[20px]">
                    Jan 1, 2023</p>
                </div>
              </div>

              <hr class="bg-gray-20 my-3 h-px border-2 border-dashed md:my-4 lg:my-8">
            </div>
          </div>
        @endfor
      </div>
    </div>
  </div>
  </div>
@endsection
