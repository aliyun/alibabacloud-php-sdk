<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DeleteVersionGroupDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $deviceIds;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string
     */
    public $deviceIdType;
    protected $_name = [
        'deviceIds'     => 'DeviceIds',
        'projectId'     => 'ProjectId',
        'deviceGroupId' => 'DeviceGroupId',
        'deviceIdType'  => 'DeviceIdType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = $this->deviceIds;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->deviceIdType) {
            $res['DeviceIdType'] = $this->deviceIdType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVersionGroupDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceIds'])) {
            $model->deviceIds = $map['DeviceIds'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['DeviceIdType'])) {
            $model->deviceIdType = $map['DeviceIdType'];
        }

        return $model;
    }
}
