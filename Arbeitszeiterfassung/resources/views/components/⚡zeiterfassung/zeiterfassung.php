<?php

use App\Models\Zeiterfassung;
use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Attributes\Boot;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

new class extends Component
{
    public $columns;
    public $rows;
    public $Names;
    public string $current_Name = "John";

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function boot()
    {
        $this->columns = ['id', 'Name', 'Datum', 'Kategorie', 'Arbeitsbeginn', 'Arbeitsende', 'Mittagspause', 'Arbeitszeit', 'Soll_Arbeitszeit', 'Ueberstunden_Minusstunden'];
        $this->rows = DB::table('zeiterfassungs')
        ->select($this->columns)
        ->orderBy('Datum', 'asc')
        ->get();

        $this->get_names();
    }

    public function get_names()
    {
        $this->Names = DB::table('zeiterfassungs')
        ->select(['Name'])
        ->orderBy('Name', 'asc')
        ->distinct()
        ->get();
    }

    public function change_current_name($name)
    {
        $this->current_Name = $name;
        $this->dispatch('refresh');
    }

    public function testdata()
    {
        Zeiterfassung::create([
            'Name' => 'Gwen',
            'Datum' => '2026-02-13',
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

        $this->dispatch('refresh');

    }



};
