<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Receipt;


class ReceiptController extends Controller
{
    //
    public function addReceipt(Request $request)
    {
        $receipt = new Receipt;
        $receipt->normal_gallon = $request->normal_gallon;
        $receipt->round_gallon = $request->round_gallon;
        $receipt->water_bottle = $request->water_bottle;
        $receipt->name = $request->name;
        $receipt->phone_no = $request->phone_no;
        $receipt->payment_mode = $request->payment_mode;
        $receipt->address = $request->address;
        $receipt->landmarks = $request->landmarks;
        $receipt->save();
        return redirect('confirm');

    }
}
