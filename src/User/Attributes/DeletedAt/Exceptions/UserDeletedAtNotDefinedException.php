<?php

namespace Railken\LaraOre\User\Attributes\DeletedAt\Exceptions;

use Railken\LaraOre\User\Exceptions\UserAttributeException;

class UserDeletedAtNotDefinedException extends UserAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'deleted_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'USER_DELETED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}