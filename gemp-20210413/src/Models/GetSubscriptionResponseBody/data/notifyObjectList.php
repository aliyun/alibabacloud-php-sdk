<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetSubscriptionResponseBody\data;

use AlibabaCloud\Tea\Model;

class notifyObjectList extends Model
{
    /**
     * @description id主键
     *
     * @var int
     */
    public $id;

    /**
     * @description 通知对象名
     *
     * @var string
     */
    public $name;

    /**
     * @description 关联主键id
     *
     * @var int
     */
    public $notifyObjectId;

    /**
     * @description 通知对象类型0服务组 1个人
     *
     * @var int
     */
    public $notifyObjectType;
    protected $_name = [
        'id'               => 'id',
        'name'             => 'name',
        'notifyObjectId'   => 'notifyObjectId',
        'notifyObjectType' => 'notifyObjectType',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->notifyObjectId) {
            $res['notifyObjectId'] = $this->notifyObjectId;
        }
        if (null !== $this->notifyObjectType) {
            $res['notifyObjectType'] = $this->notifyObjectType;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['notifyObjectId'])) {
            $model->notifyObjectId = $map['notifyObjectId'];
        }
        if (isset($map['notifyObjectType'])) {
            $model->notifyObjectType = $map['notifyObjectType'];
        }

        return $model;
    }
}
