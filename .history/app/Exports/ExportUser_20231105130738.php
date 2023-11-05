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

        $collecArr();
        foreach($users as $user){
            $collecArr[] = $user['id'];
            $collecArr[] = $user['name'];
            $collecArr[] = $user['email'];
        }
    }
}
