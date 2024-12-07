<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function user()
{
    return $this->belongsTo(User::class);
}

public function package()
{
    return $this->belongsTo(Package::class);
}

public function payments()
{
    return $this->hasMany(Payment::class);
}


}
