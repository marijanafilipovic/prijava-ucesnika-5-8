<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable =
        [
            'ime',
            'prezime',
            'email',
            'godina_rodjenja',
            'organizacija',
            'tip_organizacije',
            'drugi_tip_organizacije',
            'pozicija',
            'iskustvo',
        ];
}
