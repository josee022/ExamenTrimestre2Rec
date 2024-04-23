
<div>
    <br>
    <strong>Cambios Realizados:</strong>
    <br>
    @foreach ($cambios as $cambio)
        <div wire:key="{{ $cambio->id }}">
            El ordenador pasó del aula <strong>{{ $cambio->origen->nombre }}</strong> y ahora se encuentra en el
            aula <strong>{{ $cambio->destino->nombre }}</strong>.
            <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline float-right"
                    wire:click="eliminarCambio({{ $cambio->id }})">Borrar</button>
            <hr style="border-top: 1px solid #ccc; margin: 20px 0;">
        </div>
    @endforeach
</div>
