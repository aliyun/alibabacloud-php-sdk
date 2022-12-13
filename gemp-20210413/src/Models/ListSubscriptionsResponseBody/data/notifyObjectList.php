<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsResponseBody\data;

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
     * @var int
     */
    public $isValid;

    /**
     * @example 张珊
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var int
     */
    public $notifyObjectId;

    /**
     * @example USER
     *
     * @var int
     */
    public $notifyObjectType;
    protected $_name = [
        'id'               => 'id',
        'isValid'          => 'isValid',
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
        if (null !== $this->isValid) {
            $res['isValid'] = $this->isValid;
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
        if (isset($map['isValid'])) {
            $model->isValid = $map['isValid'];
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
