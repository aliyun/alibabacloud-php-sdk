<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AddDevicesRequest extends Model
{
    /**
     * @description The type of the Alibaba Cloud Workspace client that runs on the device.
     *
     *   1: the hardware client
     *   2: the software client
     *
     * @example 2
     *
     * @var int
     */
    public $clientType;

    /**
     * @description The list of devices.
     *
     * @var string[]
     */
    public $deviceIds;

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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDevicesRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
