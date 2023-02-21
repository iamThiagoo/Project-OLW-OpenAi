<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesCommission extends Model
{
    protected $table       = 'sales_commission_view';
    protected $incremeting = false;
    public $timestamps     = false;

    public static function scopeGetColumns ()
    {
        return [
            "company",   
            "seller",     
            "client",      
            "city",      
            "state",        
            "sold_at",      
            "status",     
            "commission",  
            "total_amount"
        ];
    }
}
