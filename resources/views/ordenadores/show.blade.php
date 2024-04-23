<x-app-layout>
    <br>
    <div class="w-1/2 mx-auto">
        <div>
            <x-input-label for="marca" :value="'Título del ordenador'" />
            <x-text-input id="marca" class="block mt-1 w-full" type="text" name="marca" :value="$ordenador->marca" required
                readonly autofocus autocomplete="marca" />
        </div>

        <div class="mt-4">
            <x-input-label for="modelo" :value="'modelo del ordenador'" />
            <x-text-input id="modelo" class="block mt-1 w-full" type="text" name="modelo" :value="$ordenador->modelo"
                required readonly autofocus autocomplete="modelo" />
        </div>

        <div class="mt-4">
            <x-input-label for="aula" :value="'aula del ordenador'" />
            <x-text-input id="aula" class="block mt-1 w-full" type="text" name="aula" :value="$ordenador->aula->nombre"
                required readonly autofocus autocomplete="aula" />
        </div>

        <div>
            <br>
            <strong>Cambios Realizados:</strong>
            <br>
            @foreach ($cambios as $cambio)
                El ordenador pasó del aula <strong>{{ $cambio->origen->nombre }}</strong> y ahora se encuentra en el
                aula <strong>{{ $cambio->destino->nombre }}</strong>.
                <hr style="border-top: 1px solid #ccc; margin: 20px 0;">
            @endforeach
        </div>

        <div>
            <strong>Nombre de los dispositivos de este ordenador:</strong>
            <br>
            @foreach ($dispositivos as $key => $dispositivo)
                @if ($key > 0)
                    @if ($key == count($dispositivos) - 1)
                        y
                    @else
                        ,
                    @endif
                @endif
                {{ $dispositivo->nombre }}
            @endforeach
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('ordenadores.index') }}">
                <x-secondary-button class="ms-4">
                    Volver
                    </x-primary-button>
            </a>
        </div>

    </div>
</x-app-layout>
