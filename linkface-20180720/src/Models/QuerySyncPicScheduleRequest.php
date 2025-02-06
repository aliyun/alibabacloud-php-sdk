<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720\Models;

use AlibabaCloud\Dara\Model;

class QuerySyncPicScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $iotId;
    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'groupId'    => 'GroupId',
        'iotId'      => 'IotId',
        'productKey' => 'ProductKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
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
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
