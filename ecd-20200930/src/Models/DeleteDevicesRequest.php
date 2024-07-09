<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteDevicesRequest extends Model
{
    /**
     * @description The type of the client.
     *
     * Valid values:
     *
     *   1: hardware client.
     *   2: software client.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $clientType;

    /**
     * @description The IDs of the devices. You can specify up to 200 IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $deviceIds;

    /**
     * @description Specifies whether to forcefully delete the device if the device is bound to a user.
     *
     * Valid values:
     *
     *   0: do not forcefully delete the device.
     *   1: forcefully delete the device.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $force;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the regions supported by WUYING Workspace.
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
