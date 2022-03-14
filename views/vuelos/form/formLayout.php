<div class="md:w-1/2 flex flex-row gap-5 justify-evenly items-center mb-5">
    <div class="flex gap-2 items-center">
        <label class="text-lg" for="idaVuelta">Ida y Vuelta</label>
        <input type="radio" <?php echo isset($vuelo['fecha_regreso']) ? 'checked' : '' ?> id="idaVuelta" name="tipoViaje" value="1" class="focus:ring-orange-400 focus:border-orange-400 focus-ring-1 shadow-md text-orange-500">
    </div>

    <div class="flex gap-2 items-center">
        <label class="text-lg" for="soloIda">Solo Ida</label>
        <input type="radio" id="soloIda" name="tipoViaje" value="2" class="focus:ring-orange-400 focus:border-orange-400 focus-ring-1 shadow-md text-orange-500" <?php echo !isset($vuelo['fecha_regreso']) ? 'checked' : '' ?>>
    </div>
</div>


<div class="flex flex-col sm:flex-row gap-5">
    <div class="flex flex-col flex-1">
        <label class="text-2xl">Origen</label>
        <select name="ciudad_origen_id" class="my-3 rounded-lg focus:ring-orange-400 border-gray-300  focus:border-orange-400 focus-ring-1 shadow-md appearance-none" id="origen">
            <option value="" disabled selected>-- Seleccione --</option>
            <?php
            foreach ($ciudades as $ciudad) :
            ?>
                <option value="<?php echo $ciudad['id'] ?>" <?php echo isset($vuelo) && $vuelo['origen_id'] == $ciudad['id'] ? 'selected' : '' ?>><?php echo $ciudad['ciudad'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="flex flex-col flex-1">
        <label class="text-2xl">Destino</label>
        <select name="ciudad_destino_id" class="my-3 rounded-lg focus:ring-orange-400 border-gray-300  focus:border-orange-400 focus-ring-1 shadow-md" id="destino">
            <option value="" disabled selected>-- Seleccione --</option>
            <?php
            foreach ($ciudades as $ciudad) :
            ?>
                <option value="<?php echo $ciudad['id'] ?>" <?php echo isset($vuelo) && $vuelo['destino_id'] == $ciudad['id'] ? 'selected' : '' ?>><?php echo $ciudad['ciudad'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<div class="flex flex-col md:flex-row gap-5">
    <div id="contenedorFechaIda" class="flex flex-col flex-1">
        <label class="text-2xl">Fecha de Salida</label>
        <input id="fechaIda" class="my-3 rounded-lg focus:ring-orange-400 border-gray-300  focus:border-orange-400 focus-ring-1 shadow-md" type="date" name="fecha_salida" value="<?php echo isset($vuelo) ? $vuelo['fecha_salida'] : ''; ?>">
    </div>

    <div id="contenedorFechaVuelta" class="flex flex-col flex-1">
        <label class="text-2xl">Fecha de Regreso</label>
        <input id="fechaVuelta" class="my-3 rounded-lg focus:ring-orange-400 border-gray-300  focus:border-orange-400 focus-ring-1 shadow-md" type="date" name="fecha_regreso" value="<?php echo isset($vuelo['fecha_regreso']) ? $vuelo['fecha_regreso'] : ''; ?>">
    </div>
</div>

<div class="flex flex-col md:flex-row gap-5">
    <div class="flex flex-col flex-1">
        <label for="precio" class="text-2xl">Precio</label>
        <input type="text" id="precio" placeholder="USD 0.00" class="my-3 rounded-lg focus:ring-orange-400 border-gray-300  focus:border-orange-400 focus-ring-1 shadow-md" name="precio" value="<?php echo isset($vuelo) ? $vuelo['precio'] : '' ?>">
    </div>

    <div class="flex flex-col flex-1">
        <label for="duracion" class="text-2xl">Duracion del Vuelo</label>
        <input type="number" name="duracion" id="duracion" placeholder="EJ: 2" class="my-3 rounded-lg focus:ring-orange-400 border-gray-300  focus:border-orange-400 focus-ring-1 shadow-md" value="<?php echo isset($vuelo) ? $vuelo['duracion'] : '' ?>">
    </div>
</div>

<?php
if (sizeof($errores) > 0) : ?>
    <div class="w-4/5 mx-auto flex flex-col mt-10">
        <?php foreach ($errores as $error) : ?>
            <p class="border-solid border-2 border-red-300 bg-red-200 px-4 py-4 my-2 text-center w-4/5 mx-auto rounded"><?php echo $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>