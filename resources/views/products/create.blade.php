<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="p-8">
        <h1 class="my-8">Create A Product</h1>
        <div>
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
            @endif
        </div>
        <div class="my-8">
            <form method="post" action="{{ route('product.store') }}">
                @csrf
                @method('post')
                <div class="flex flex-col">
                    <div class="flex flex-col mb-3">
                        <label for="name">Name</label>
                        <input class="border-2 w-[360px]" type="text" name="name" placeholder="Name">
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="qty">Qty</label>
                        <input class="border-2 w-[360px]" type="text" name="qty" placeholder="Qty">
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="qty">Price</label>
                        <input class="border-2 w-[360px]" type="text" name="price" placeholder="Price">
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="description">Description</label>
                        <input class="border-2 w-[360px]" type="text" name="description" placeholder="Description">
                    </div>
                    <div class="mt-12">
                        <input type="submit" value="Save A New Product">
                    </div>
            </form>
        </div>
    </div>
</body>

</html>
