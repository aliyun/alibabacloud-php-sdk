<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ModifyDeviceChannelsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $channels;

    /**
     * @example on
     *
     * @var string
     */
    public $deviceStatus;

    /**
     * @example 210235C3GN32090008286cf17e130d
     *
     * @var string
     */
    public $dsn;

    /**
     * @description This parameter is required.
     *
     * @example 348*****380-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'channels'     => 'Channels',
        'deviceStatus' => 'DeviceStatus',
        'dsn'          => 'Dsn',
        'id'           => 'Id',
        'ownerId'      => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }
        if (null !== $this->dsn) {
            $res['Dsn'] = $this->dsn;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDeviceChannelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }
        if (isset($map['Dsn'])) {
            $model->dsn = $map['Dsn'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
