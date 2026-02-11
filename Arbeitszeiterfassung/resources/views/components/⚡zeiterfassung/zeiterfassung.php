<?php

use App\Models\Zeiterfassung;
use Faker\Guesser\Name;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

new class extends Component
{
    public $columns;
    public $rows;
    public $current_Name = "John";

    public function mount()
    {
        $this->columns = ['id', 'Name', 'Datum', 'Kategorie', 'Arbeitsbeginn', 'Arbeitsende', 'Mittagspause', 'Arbeitszeit', 'Soll_Arbeitszeit', 'Ueberstunden_Minusstunden'];
        $this->rows = DB::table('zeiterfassungs')
        ->select($this->columns)
        ->orderByDesc('id')
        ->get();
    }

    public function testdata()
    {
        Zeiterfassung::create([
            'Name' => 'John',
            'Datum' => '2026-02-11',
            'Kategorie' => 'Arbeitstag',
            'Arbeitsbeginn' => '08:00',
            'Arbeitsende' => '16:30',
            'Mittagspause' => '00:30',
            'Arbeitszeit' => '08:00',
            'Soll_Arbeitszeit' => '08:00',
            'Ueberstunden_Minusstunden' => '00:00'
        ]);

        Zeiterfassung::create([
            'Name' => 'Stacy',
            'Datum' => '2026-02-11',
            'Kategorie' => 'Arbeitstag',
            'Arbeitsbeginn' => '08:00',
            'Arbeitsende' => '16:30',
            'Mittagspause' => '00:30',
            'Arbeitszeit' => '08:00',
            'Soll_Arbeitszeit' => '08:00',
            'Ueberstunden_Minusstunden' => '00:00'
        ]);
    }



};
