<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\GetCollectionPolicyResponseBody\collectionPolicy;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionPolicy) {
            $res['collectionPolicy'] = null !== $this->collectionPolicy ? $this->collectionPolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCollectionPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['collectionPolicy'])) {
            $model->collectionPolicy = collectionPolicy::fromMap($map['collectionPolicy']);
        }

        return $model;
    }
}
