<?php
namespace App\Livewire;

use App\Models\Cambio;
use Livewire\Component;

class EliminarCambios extends Component
{

    public $cambios;

    public function mount($cambios)
    {
        $this->cambios = $cambios;
    }

    public function eliminarCambio($id)
    {
        $cambio = Cambio::find($id);
        if ($cambio) {
            $cambio->delete();
            session()->flash('success', 'El cambio se ha eliminado correctamente.');
        }

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.eliminar-cambios');
    }
}
