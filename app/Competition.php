<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    //
    protected $fillable = array(
		'competition',
		'url',
		'type',
		'country',
		'closing_date',
		'winner_announcement',
		'max_words',
		'currency',
		'fee',
		'prize',
		'notes'
		);
}
