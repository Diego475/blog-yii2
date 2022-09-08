<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Главная страница</title>
</head>

<body class="bg-gray-100">
    <header class="w-full fixed shadow-lg bg-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-3xl font-semibold">
                <span class="text-green-500">My</span>Blog
            </div>
        </div>
    </header>
    <div class="container mx-auto pt-28">
        <div class="grid grid-cols-3 gap-x-8">
            <div class="w-full bg-white rounded-xl">
                <div class="w-full py-8 flex justify-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Git-logo.svg/640px-Git-logo.svg.png" width="256">
                </div>
                <div class="text-center text-3xl font-semibold text-gray-900 mb-4">
                    Название статьи
                </div>
                <div class="px-5 text-center text-gray-500">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis vel rerum ipsum...
                </div>
                <div class="px-5 my-3">
                    <a href="" class="w-full py-3 block text-center mb-7 rounded-xl bg-green-500 text-white hover:bg-green-600">
                        Перейти
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>