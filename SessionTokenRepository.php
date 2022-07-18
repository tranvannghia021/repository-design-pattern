<?php

namespace App\Repositories;

use App\Models\Session_token;

use App\Repositories\BaseRepository;

class SessionTokenRepository extends BaseRepository
{
    protected $sessionToken;

   public function __construct(Session_token $sessionToken)
   {
    $this->sessionToken=$sessionToken;
    parent::__construct($sessionToken);
   }


  public function findByIdUser($id){
    return $this->sessionToken->where('user_id',$id)->first();
  }
  
}
