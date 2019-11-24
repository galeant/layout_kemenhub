<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

class UploadController extends Controller
{
    public function index(){
        
        $tahun = 1999;
        $date = CarbonImmutable::parse('12/01/1999 13:00:00');
        $data = [];
        for($i = 0;$i<=5;$i++){
            $data[] = [
                'up_his' => 'RKAKL '.($tahun+$i),
                'status' => 'Succes',
                'date' => $date->addYears($i)->format('d/m/Y H:i:s')
            ];
        }
        return view('upload',['data' => $data]);
    }
}
