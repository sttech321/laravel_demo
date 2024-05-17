<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersList extends Model
{
    use HasFactory;

    protected $table = 'members_lists';

    protected $guarded = [];
}
