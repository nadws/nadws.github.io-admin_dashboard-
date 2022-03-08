<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome') }}/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body class="font-Roboto">
    <div class=" border shadow-lg py-4 sticky top-0 z-50 bg-white flex">
        <div class="flex-initial w-64 ">
            <h1 class="font-bold text-2xl text-slate-700 text-center font-Roboto">Judul</h1>
        </div>
        <div class="flex-initial w-full ">
            <button class="ml-4">
                <i class="fa-solid fa-bars "></i>
            </button>
            <a href="" class="float-right mr-8">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="flex-initial w-64 h-screen border shadow-md bg-[#F6F6FA]">
            <ul class="text-center text-slate-700  mt-10 bg-slate-200 py-2">
                <li>
                    <a href="">
                        <div class="flex items-center ">
                            <i class="fa-solid fa-gauge text-xl text-center mr-2 ml-8"></i>
                            <p class="text-center ml-2 mr-2">Dashboard</p>
                            <i class="fa-solid fa-angle-left ml-8"></i>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="text-center text-slate-700  mt-8 py-2">
                <li>
                    <a href="">
                        <div class="flex items-center ">
                            <i class="fa-solid fa-table text-xl text-center mr-2 ml-8"></i>
                            <p class="text-center ml-2 mr-2">Table</p>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="text-center text-slate-700  mt-8 py-2">
                <li>
                    <a href="">
                        <div class="flex items-center ">
                            <i class="fa-solid fa-right-from-bracket text-xl text-center mr-2 ml-8"></i>
                            <p class="text-center ml-2 mr-2">Logout</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex-initial w-full">
            <div class="container mx-auto p-6">

                <h1 class="font-bold text-slate-700 text-2xl">Dashboard</h1>
                <div class="mt-6 border shadow-md rounded-md p-6">
                    <div class="border shadow-sm ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil facilis fugit dolorem iusto, sint
                        qui, molestiae sed labore architecto a non tempora, atque repellendus laboriosam libero tempore
                        rerum voluptatem? Veniam?
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, iste accusantium? Adipisci quod,
                        culpa voluptatum commodi nihil rerum itaque perferendis cum unde corporis ipsum temporibus, ipsa
                        corrupti recusandae accusantium similique. Aut tenetur rem odit eos labore quibusdam assumenda
                        incidunt minus. Minima voluptatum ratione, non provident dignissimos consequuntur aspernatur.
                        Quibusdam, rem?</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>