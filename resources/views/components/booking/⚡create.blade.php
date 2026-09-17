<?php

use Livewire\Component;

new class extends Component
{
    public $user_id='';
    public $jenisMotor='';
    public $merk='';
    public $jumlah='';
    public $keluhan='';
    public $waktuServis='';

    public function save(){
        $this->validate([
            'user_id' => 'required|min:3',
            'jenisMotor' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'keluhan' => 'required',
            'waktuServis' => 'required',
        ]);
    }
};
?>

<div>
    <form wire:submit="save">
        
        <flux:field>
            <flux:label>Nama</flux:label>
            <flux:input wire:model="user_id" />
            <flux:error name="user_id" />
        </flux:field>

        <flux:field>
            <flux:label>Jenis Motor</flux:label>
            <flux:select wire:model="jenisMotor" placeholder="Pilih jenis motor...">
                <flux:select.option>Matic</flux:select.option>
                <flux:select.option>Bebek</flux:select.option>
                <flux:select.option>Sport</flux:select.option>
            </flux:select>
        </flux:field>
        
        <flux:field>
            <flux:label>Merk Motor</flux:label>
            <flux:select wire:model="merk" placeholder="Pilih merk motor...">
                <flux:select.option>Honda</flux:select.option>
                <flux:select.option>Yamaha</flux:select.option>
                <flux:select.option>Suzuki</flux:select.option>
            </flux:select>
        </flux:field>

        <flux:field>
            <flux:label>Jumlah Unit</flux:label>
            <flux:select wire:model="jumlah" placeholder="Pilih jumlah unit...">
                <flux:select.option>1</flux:select.option>
                <flux:select.option>2</flux:select.option>
                <flux:select.option>3</flux:select.option>
            </flux:select>
        </flux:field>

        <flux:field>
            <flux:label>Keluhan</flux:label>
            <flux:description>Isi dengan keluhan motor.</flux:description>
            <flux:textarea wire:model="keluhan" />
            <flux:error name="keluhan" />
        </flux:field>

        <flux:field>
            <flux:label>Waktu servis</flux:label>
              <input id="default-datepicker" type="date" class="block w-full ps-9 pe-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Select date">
        </flux:field>
        {{-- <input type="text" wire:model="name" placeholder="Nama">
        <input type="text" wire:model="name" placeholder="Waktu Servis">
        <input type="text" wire:model="name" placeholder="Keluhan"> --}}
        <flux:button type="submit" variant="primary" color="blue">Submit</flux:button>
    </form>
</div>