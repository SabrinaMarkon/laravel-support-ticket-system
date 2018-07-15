<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    /*
    "mass-assignment vulnerability occurs when user's pass unexpected HTTP parameters through a request, and then that parameter changes a column in your database you did not expect. For example, a malicious user might send an is_admin parameter through an HTTP request, which is then mapped onto your model's create method, allowing the user to escalate themselves to an administrator."

    The $fillable property make the columns mass assignable. Alternatively, you may use the $guarded property to make all attributes mass assignable except for your chosen attributes. You must use either $fillable or $guarded.
    */
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function getTitle() {
        return $this->title;
    }
}
