<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest;

use AlibabaCloud\Tea\Model;

class scopeObjectList extends Model
{
    /**
     * @description 订阅范围对象id
     *
     * @var int
     */
    public $scopeObjectId;
    protected $_name = [
        'scopeObjectId' => 'scopeObjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scopeObjectId) {
            $res['scopeObjectId'] = $this->scopeObjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scopeObjectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scopeObjectId'])) {
            $model->scopeObjectId = $map['scopeObjectId'];
        }

        return $model;
    }
}
