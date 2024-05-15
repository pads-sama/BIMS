<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Login</title>
</head>

<body>

    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">Barangay Management System</h1>

            <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt dolores deleniti
                inventore quaerat mollitia?
            </p>

            <form action="#" class="bg-white mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                <p class="text-center text-lg font-medium">Sign in to your account</p>

                <div>
                    <label for="email" class="text-md text-gray-700 block mb-1 font-medium">Email</label>
                    <input type="email" name="email" id="email" class="w-full" placeholder="Enter email" />
                </div>
                <div>
                    <label for="password" class="text-md text-gray-700 block mb-1 font-medium">Password</label>
                    <input type="password" name="password" id="password" class="w-full" placeholder="Enter password" />
                </div>
                <div>
                    <input type="submit" value="Login" class="w-full" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>