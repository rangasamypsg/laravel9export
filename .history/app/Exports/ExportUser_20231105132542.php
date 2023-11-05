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

        $collect_arr = [];
        $i = 0;
        foreach($users as $key => $user){
            $userCollection = [];
            $userCollection[$i] = $user['id'];
            $userCollection[$i+1] = $user['name'];
            $userCollection[$i+2] = $user['email'];
            $collect_arr[] = $userCollection;
            $i = 0;
        }
        // dd($collect_arr);
        return collect($collect_arr);
 

    }
}
