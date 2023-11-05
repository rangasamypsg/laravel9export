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

        $users = User::query()->take(2)->get([]'id','name','email']);
        dd($users);

        $collect_arr = [];
        foreach($users as $user){
            $userCollection = [];
            $userCollection['id'] = $user['id'];
            $userCollection['name'] = $user['name'];
            $userCollection['email'] = $user['email'];
            // $collect_arr[] = $userCollection;
            array_push($collect_arr, $userCollection);
        }
        dd($collect_arr);
        return collect($collect_arr);
 

    }
}
