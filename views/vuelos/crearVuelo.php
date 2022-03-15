<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/styles/style.css">
    <title>EcuTravel</title>
</head>

<body>
    <!-- Contenido principal -->
    <section class="container mx-auto min-h-screen">
        <h2 class="text-3xl sm:text-subtitle text-center my-10">Crear Vuelo</h2>

        <form method="POST" class="w-4/5 mx-auto flex flex-col mt-10" id="formulario_vuelos">
            <?php
                include __DIR__ . '/./form/formLayout.php';
            ?>

            <button type="submit" class="border-emerald-500 border-2 border-solid hover:bg-emerald-500 hover:text-white hover:font-bold text-center px-3 py-2 rounded-md text-xl text-emerald-600 w-80 mx-auto leading-normal my-10" id="buscar">Guardar Vuelo</button>
        </form>
    </section>

    <script src="/js/adminPanel.js"></script>
</body>

</html>