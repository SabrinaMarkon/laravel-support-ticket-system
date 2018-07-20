<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /* prevent id column from being mass assignable (security for id column). Everything else is fillable. */
    protected $guarded = ['id'];

    public function ticket() {
        /* Let Eloquent know that this Comment model belongs to the Ticket model */
        return $this->belongsTo('App\Ticket');
    }
}
