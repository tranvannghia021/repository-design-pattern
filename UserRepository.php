<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    protected $user;
   public function __construct(User $user)
   {
    $this->user=$user;
    parent::__construct($user);
   }
  
  
}
