<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 25 Nov 2017 19:47:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $name
 * @property string $surname
 * @property int $Role
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tracks
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $table = 'user';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'Role' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'login',
		'password',
		'name',
		'surname',
		'Role'
	];

	public function tracks()
	{
		return $this->hasMany(\App\Models\Track::class, 'student_id');
	}
}
