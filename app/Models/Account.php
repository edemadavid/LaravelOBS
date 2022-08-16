<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'accounts';

    protected $primarykey = 'id';

    protected $fillable = [
        'user_id',
        'account_no',
        'account_type_id',
        'account_balance'
    ];


    public function userIdModel ()
    {
        return $this->belongsTo(User::class);
    }

    public function accountTypeModel ()
    {
        return $this->belongsto(AccountType::class);
    }
}
