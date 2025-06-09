<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCollectionPolicyResponseBody\collectionPolicy;

class GetCollectionPolicyResponseBody extends Model
{
    /**
     * @var collectionPolicy
     */
    public $collectionPolicy;
    protected $_name = [
        'collectionPolicy' => 'collectionPolicy',
    ];

    public function validate()
    {
        if (null !== $this->collectionPolicy) {
            $this->collectionPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectionPolicy) {
            $res['collectionPolicy'] = null !== $this->collectionPolicy ? $this->collectionPolicy->toArray($noStream) : $this->collectionPolicy;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['collectionPolicy'])) {
            $model->collectionPolicy = collectionPolicy::fromMap($map['collectionPolicy']);
        }

        return $model;
    }
}
