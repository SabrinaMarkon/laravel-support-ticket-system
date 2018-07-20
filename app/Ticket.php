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

    /* prevent id column from being mass assignable (security for id column). Everything else is fillable. */
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function getTitle() {
        return $this->title;
    }

    /* Establishes a one to many relationship with Comments (one ticket can have many comments), and Eloquent ORM can use post_id (ticket id) to find all related comments. */
    public function comments() {
        return $this->hasMany('App\Comment', 'post_id');
    }
}
