<?php

namespace Amethyst\Serializers;

use Illuminate\Support\Collection;
use Railken\Lem\Contracts\EntityContract;
use Railken\Lem\Serializer;

class UserSerializer extends Serializer
{
    /**
     * Serialize entity.
     *
     * @param \Amethyst\Models\User          $entity
     * @param \Illuminate\Support\Collection $select
     *
     * @return \Railken\Bag
     */
    public function serialize(EntityContract $entity, Collection $select = null)
    {
        $bag = parent::serialize($entity, $select);

        return $bag;
    }
}
