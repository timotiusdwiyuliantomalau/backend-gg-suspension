<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rebound Price List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-orange-400">
    <div class="w-full h-72 bg-gray-500 mb-10 overflow-hidden">
        <img class="w-full object-cover object-bottom" src="./bahan-foto-website.jpg" alt="">
    </div>
    <div class="flex flex-col gap-[7em] p-4 font-[Poppins]">
        <div>
            <h1 class="text-3xl text-center font-semibold tracking-[0.3em]">SPORT</h1>
            <div class="flex flex-wrap gap-5 justify-center">
                @foreach ($data as $item)
                    @if (str_contains($item['subcategory'], 'SPORT '))
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

        <div>
            <h1 class="text-3xl text-center font-semibold tracking-[0.3em]">SPORT / NAKED / TRAIL</h1>
            <div class="flex flex-wrap gap-5 justify-center">
                @foreach ($data as $item)
                    @if (str_contains($item['subcategory'], 'SPORT/NAKED'))
                        <div class="flex w-fit my-6 bg-white shadow-sm border border-slate-200 rounded-lg">
                            <div class="p-4">
                                <h5 class="text-slate-800 text-xl font-semibold">
                                    {{ $item['subcategory'] }}
                                </h5>
                                <p class="text-slate-600 leading-normal">
                                    {{ $item['service'] }}
                                </p>
                                <p
                                    class="text-xl place-self-end font-semibold p-1 bg-black text-yellow-400 rounded-lg mt-1">
                                    {{ $item['price'] }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div>


            <div>
                <h1 class="text-3xl text-center font-semibold tracking-[0.3em]">BEBEK / MATIC</h1>
                <div class="flex flex-wrap gap-5 justify-center">
                    @foreach ($data as $item)
                        @if (str_contains($item['subcategory'], 'BEBEK'))
                            <div class="flex w-fit my-6 bg-white shadow-sm border border-slate-200 rounded-lg">
                                <div class="p-4">
                                    <h5 class="text-slate-800 text-xl font-semibold">
                                        {{ $item['subcategory'] }}
                                    </h5>
                                    <p class="text-slate-600 leading-normal">
                                        {{ $item['service'] }}
                                    </p>
                                    <p
                                        class="text-xl place-self-end font-semibold p-1 bg-black text-yellow-400 rounded-lg mt-1">
                                        {{ $item['price'] }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

</body>

</html>
