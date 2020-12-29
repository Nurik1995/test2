<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Database\Eloquent;

class DataController extends Controller
{
    public function data(Request $request)
    {
//        dd('come');
//        dd($request->all());

//        $id = People::create(['p_name' => 'Natiqa'])->p_id;
//        dd($id);

//        People::whereKey(10)->update(['p_name' => 'Alim']);

//        return ['ad' => 'Kamil','soyad' => "aliyev"];

//        $rows = DB::table('people')->where('p_id', '>', 1)->where(function ($query) {
//            $query->where('p_name', 'Nurlan')->orWhere('p_id', '>', 100);
//        })->select('p_name')->get()->toArray();

        $rows = DB::select('select * from people');

        dd($rows);

    }
}
