<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListBucketInventoryRequest extends Model
{
    /**
     * @example test1.txt
     *
     * @var string
     */
    public $continuationToken;
    protected $_name = [
        'continuationToken' => 'continuation-token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->continuationToken) {
            $res['continuation-token'] = $this->continuationToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBucketInventoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['continuation-token'])) {
            $model->continuationToken = $map['continuation-token'];
        }

        return $model;
    }
}
