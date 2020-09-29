<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SxController extends Controller
{

    public function index(Request $request)
    {
        $id = $request->input('id');
        $content = $request->input('content');

        DB::connection('mongodb')       //选择使用mongodb
        ->collection('sxData')           //选择使用data集合
        ->insert([                          //插入数据
            'id'  =>  $id,
            'content'     =>   $content
        ]);

        return response()->json('成功',200);
    }

}