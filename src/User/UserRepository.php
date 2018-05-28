<?php

namespace Railken\LaraOre\User;

use DateTime;
use Railken\Laravel\Manager\ModelRepository;

class UserRepository extends ModelRepository
{
    /**
     * Find one user by email.
     *
     * @param string $email
     *
     * @return user
     */
    public function findOneByEmail(string $email)
    {
        return $this->findOneBy(['email' => $email]);
    }

    /**
     * Find all pending users expired.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function getExpiredPendingUsers()
    {
        return $this->getQuery()->where('enabled', 0)->where('created_at', '<=', (new DateTime())->modify('-3 hours'))->get();
    }

    /**
     * Find a user by uid and year.
     *
     * @param string $year
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function getLastOccurenceByUidYear($year)
    {
        return $this->getQuery()->where('uid', 'like', '%/'.$year)->orderBy('uid', 'DESC');
    }
}