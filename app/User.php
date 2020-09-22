<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['profile_picture_path'];

    /**
     * Get the user's profile picture full path.
     *
     * @return string
     */
    public function getProfilePicturePathAttribute()
    {
        if (preg_match('(https://|http://)', $this->profile_picture) === 1) {
            return $this->profile_picture;
        }
        return $this->profile_picture ? url("storage/user/profile/$this->profile_picture") : asset('assets/images/user.png');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Check user role is Admin
     *
     * @return boolean
     */
    public function isSuperAdmin()
    {
        return $this->role_id == Role::SUPER_ADMIN_ROLE_ID;
    }

    /**
     * Check user role is Pool Owner
     *
     * @return boolean
     */
    public function isAdmin()
    {
        return $this->role_id == Role::ADMIN_ROLE_ID;
    }

    /**
     * Check user role is Inspector
     *
     * @return boolean
     */
    public function isUser()
    {
        return $this->role_id == Role::USER_ROLE_ID;
    }

    /**
     * Get the role associated with the user.
     */
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class);
    }
}
