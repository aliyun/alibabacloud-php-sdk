<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class BindPurchasedDeviceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 3939*****6580539-cn-qingdao
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description This parameter is required.
     *
     * @example 3484*****8732174-cn-qingdao
     *
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'groupId'  => 'GroupId',
        'ownerId'  => 'OwnerId',
        'region'   => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindPurchasedDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
