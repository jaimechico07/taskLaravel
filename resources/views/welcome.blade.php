<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes slideIn {
            0% {
                transform: translateY(-30px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-slideIn {
            animation: slideIn 1s ease-out;
        }
    </style>
</head>

<body class="bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('https://image.slidesdocs.com/responsive-images/background/rendered-to-do-list-with-pencil-and-time-indicator-for-business-checklists-powerpoint-background_1587abfa25__960_540.jpg');">

    <div class="bg-white bg-opacity-70 rounded-lg shadow-xl p-10 max-w-lg w-full text-center transform transition-all hover:scale-105 hover:shadow-2xl">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-4 animate-slideIn">¡Bienvenido a la Aplicación!</h1>
        <p class="text-lg text-gray-600 mb-6">Gestiona y organiza tus tareas de manera fácil y eficiente. ¡Hazlo todo desde aquí!</p>

        <a href="{{ route('tasks.index') }}"
            class="bg-gray-600 text-white px-5 py-2 rounded-full text-xl font-semibold transform transition-all duration-300 hover:bg-gray-700 hover:scale-105 hover:shadow-xl">
            Ir a Tareas
        </a>

        <footer class="mt-8 text-sm text-gray-500">
            <p>Aplicación creada con ❤️ y Laravel</p>
        </footer>
    </div>

</body>

</html>