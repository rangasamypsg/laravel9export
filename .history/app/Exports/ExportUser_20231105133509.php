<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUser implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'Id',
            'Name',
            'Email',
            'City',
            'Created_at',
            'Updated_at' 
        ];
    } 
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $users = User::query()->select('id','name','email')->take(2)->get();
       
        $collect_arr = [];
        foreach($users as $user){
            $userCollection = [];
            $userCollection['id'] = $user['id'];
            $userCollection['name'] = $user['name'];
            $userCollection['email'] = $user['email'];
            // $collect_arr[] = $userCollection;
            array_push($collect_arr, $userCollection);
        }
        // dd($collect_arr);
        return collect($collect_arr);
 

    }
}
