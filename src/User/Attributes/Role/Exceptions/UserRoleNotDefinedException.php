<?php

namespace Railken\LaraOre\User\Attributes\Role\Exceptions;

use Railken\LaraOre\User\Exceptions\UserAttributeException;

class UserRoleNotDefinedException extends UserAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'role';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'USER_ROLE_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}