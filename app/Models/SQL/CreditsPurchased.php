<?php

namespace Aham\Models\SQL;

use Illuminate\Database\Eloquent\Model;

class CreditsPurchased extends Model
{
    protected $table = 'credits_purchased';
    protected $guarded = [];
    public $dates = ['added_on'];

    public static function boot()
    {
        parent::boot();

        static::created(function ($credit) {
            if (is_null($credit->invoice_no)) {
                $suffix = str_pad($credit->id, 5, '0', STR_PAD_LEFT);
                $suffix = $credit->created_at->format('mdY').$suffix;
                $invoice_no = 'ALH'.$suffix;
                $credit->invoice_no = $invoice_no;
                $credit->save();
            }
        });
    }

    public function bucket()
    {
        return $this->belongsTo('Aham\Models\SQL\CreditsBucket','bucket_id');
    }

    public function of()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('Aham\Models\SQL\User');
    }
}