<div>
    <h1 class="text-3xl text-center font-semibold tracking-[0.3em]"> @yield('judul')</h1>
    <div class="flex flex-wrap gap-5 justify-center">
        @foreach ($data as $item)
            @if (str_contains($item['subcategory'],  @yield('filter')))
                <div class="flex w-fit my-6 bg-white shadow-sm border border-slate-200 rounded-lg">
                    <div class="p-4">
                        <h5 class="text-slate-800 text-xl font-semibold">
                            {{ $item['subcategory'] }}
                        </h5>
                        <p class="text-slate-600 leading-normal">
                            {{ $item['service'] }}
                        </p>
                        <p
                            class="text-xl place-self-end font-semibold py-1 px-2 bg-black text-yellow-400 rounded-lg mt-1">
                            {{ $item['price'] }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
