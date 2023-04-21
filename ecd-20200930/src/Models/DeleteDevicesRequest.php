<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteDevicesRequest extends Model
{
    /**
     * @description The type of the device.
     *
     *   1: the hardware client device
     *   2: the software client device
     *
     * @example 2
     *
     * @var int
     */
    public $clientType;

    /**
     * @description The list of universally unique identifiers (UUIDs) of devices.
     *
     * @var string[]
     */
    public $deviceIds;

    /**
     * @description Specifies whether to forcefully delete the device.
     *
     *   1: forcefully deletes the device.
     *   0: does not forcefully delete the device. (You cannot delete a device to which a user is bound.)
     *
     * @example 1
     *
     * @var int
     */
    public $force;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientType' => 'ClientType',
        'deviceIds'  => 'DeviceIds',
        'force'      => 'Force',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = $this->deviceIds;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['DeviceIds'])) {
            if (!empty($map['DeviceIds'])) {
                $model->deviceIds = $map['DeviceIds'];
            }
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
