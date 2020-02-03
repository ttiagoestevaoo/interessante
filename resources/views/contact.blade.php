<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <title>Email Lesson</title>
</head>
<body class="bg-gray-108 flex items-center justify-center h-full">
    <form action="" method="POST">
        @csrf

        <div class="mb-5">
            <label for="email" class="font-semibold mb-1 block tect-xs uppercase"></label>
            <input type="text" id="email" name="email" class="border px-2 py-1 text-sm m-full">
        </div>

        <button type="submit" class="bg-blue-500 py-2 text-white rounded-full text-sm m-full">
           Email me 
        </button>
    </form>
</body>
</html>