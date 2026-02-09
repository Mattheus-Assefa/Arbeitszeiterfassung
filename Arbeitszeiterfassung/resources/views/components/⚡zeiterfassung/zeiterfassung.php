<?php

use Faker\Guesser\Name;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

new class extends Component
{
    public $columns;
    public $rows;
    public $current_Name;

    public function mount()
    {
        $this->columns = ['id', 'Name', 'Datum', 'Kategorie', 'Arbeitsbeginn', 'Arbeitsende', 'Mittagspause', 'Arbeitszeit', 'Soll_Arbeitszeit', 'Ueberstunden_Minusstunden'];
        $this->rows = DB::table('zeiterfassung')
        ->select($this->columns)
        ->orderByDesc('id')
        ->get();
    }



};
