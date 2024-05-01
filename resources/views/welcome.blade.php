<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="p-5">
    <h1 class="text-center">Hearthstone App Title</h1>

<div class="container mx-auto my-5 bg-orange-200 h-1/2">
Hello

    {{$card['id']}}
    <img src="{{$card['image']}}" />
</div>
</body>
</html>

<!-- Card JSON layout: id, collectible (bool), slug, classId, multiClassId(array), cardTypeId, cardSetId, rarityId, artistName, health, attach, manaCost, name, text, image, imageGold(Golder Ver.), flavorText, cropImage, parentId, keywordsIds(array), isZilliaxFunctionalModule(bool), isZilliaxCosmeticModule(bool) -->
