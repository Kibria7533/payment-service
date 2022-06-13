<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public  function  getPayments(){

        $order=Payment::get();
        return response($order,'200');
    }



    /**
     * @param int $id
     * @return bool
     * @throws \Throwable
     */

    public function delete(int $id){
        $order=Payment::find($id);
        throw_if(!$order->delete($id),'RuntimeException', 'Payment has not been deleted.', 500);
        return true;
    }
}
