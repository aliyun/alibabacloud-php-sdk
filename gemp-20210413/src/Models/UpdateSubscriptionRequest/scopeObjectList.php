<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateSubscriptionRequest;

use AlibabaCloud\Tea\Model;

class scopeObjectList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $scopeObjectId;
    protected $_name = [
        'id'            => 'id',
        'scopeObjectId' => 'scopeObjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['scopeObjectId'])) {
            $model->scopeObjectId = $map['scopeObjectId'];
        }

        return $model;
    }
}
