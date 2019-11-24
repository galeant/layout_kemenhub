<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

class DashboardController extends Controller
{
    public function index(){
        $start_date = CarbonImmutable::parse('11/12/2019');
        $end_date = CarbonImmutable::parse('12/01/2019');
        $data = [];
        for($i=1;$i<=10;$i++){
            if($i%2 === 0){
                $data[] = [
                    'mak_code' => $i,
                    'mon_rkakl' => 'Pengadaan Layanan B',
                    'total' => 0, 
                    'start_date' => $start_date->addDays($i)->format('d/m/Y'),
                    'end_date' => $end_date->addDays($i)->format('d/m/Y'),
                    'status'=>'Approved'
                ];
            }else{
                $data[] = [
                    'mak_code' => $i,
                    'mon_rkakl' => 'Pengadaan Barang A',
                    'total' => 0, 
                    'start_date' => $start_date->addDays($i)->format('d/m/Y'),
                    'end_date' => $end_date->addDays($i)->format('d/m/Y'),
                    'status'=>'Approved'
                ];
            }
        }
        
        return view('dashboard',['data' => $data]);
    }
}
