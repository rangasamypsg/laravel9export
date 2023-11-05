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
        $collect_arr = [];
        foreach($users as $user){
            $userCollection[] = $user['id'];
            $userCollection[] = $user['name'];
            $userCollection[] = $user['email'];
            $collect_arr[] = $userCollection;
        }

        return $collect_arr;
 

    }
}
