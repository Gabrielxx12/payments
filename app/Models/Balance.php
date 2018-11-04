<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Events\Failed;

class Balance extends Model
{
    public $timestamps = false;

    public function deposit(float $value) : Array{ 
        $this->amount += number_format($value, 2, ".", "");
        $deposit = $this->save();

        if($deposit)
            return[
                'success'   =>  true,
                'message'   =>  'Sucesso ao atualizar saldo'
            ];
        

            return[
                'success'    => false,
                'message'   => 'Falha ao tentar atualizar saldo'
            ];            
    }
}
