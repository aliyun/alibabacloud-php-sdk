<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateSubscriptionRequest;

use AlibabaCloud\Tea\Model;

class notifyObjectList extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $id;

    /**
     * @example 19
     *
     * @var int
     */
    public $notifyObjectId;
    protected $_name = [
        'id'             => 'id',
        'notifyObjectId' => 'notifyObjectId',
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
        if (null !== $this->notifyObjectId) {
            $res['notifyObjectId'] = $this->notifyObjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyObjectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['notifyObjectId'])) {
            $model->notifyObjectId = $map['notifyObjectId'];
        }

        return $model;
    }
}
