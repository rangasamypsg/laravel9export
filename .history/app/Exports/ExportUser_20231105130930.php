<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUser implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return User::all();

        $users = User::query()->take(2)->get();
        // dd($users);

        $userCollection = [];
        $$collect_arr = [];
        foreach($users as $user){
            $userCollection[] = $user['id'];
            $userCollection[] = $user['name'];
            $userCollection[] = $user['email'];
            $$collect_arr[] = $userCollection;
        }

        Excel::create('Report', function ($excel) use ($collect_arr) {
            $excel->sheet('report', function ($sheet) use ($collect_arr) {
                $sheet->appendRow($this->columns());
                $query->chunk(1000, function ($rows) use ($sheet) {
                    foreach ($rows as $row) {
                        $sheet->appendRow($this->rows($row));
    
            }
                });
            });
        })->download('xlsx');

    }
}
