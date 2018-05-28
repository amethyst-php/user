<?php

namespace Railken\LaraOre\User\Events;

use Illuminate\Queue\SerializesModels;
use Railken\LaraOre\User\User;

class UserRegistered
{
    use SerializesModels;

    public $user;
    public $token;

    /**
     * Create a new event instance.
     *
     * @param User $user
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->token = $user->pendingEmail->token;
    }
}