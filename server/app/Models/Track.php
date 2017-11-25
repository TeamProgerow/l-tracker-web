<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 25 Nov 2017 19:47:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Track
 * 
 * @property int $id
 * @property string $description
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $stop_date
 * @property string $route_file_link
 * @property int $student_id
 * @property int $instructor_id
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Track extends Eloquent
{
	protected $table = 'track';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'student_id' => 'int',
		'instructor_id' => 'int'
	];

	protected $dates = [
		'start_date',
		'stop_date'
	];

	protected $fillable = [
		'description',
		'start_date',
		'stop_date',
		'route_file_link',
		'student_id',
		'instructor_id'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'student_id');
	}
}
