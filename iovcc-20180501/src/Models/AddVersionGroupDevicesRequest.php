<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class AddVersionGroupDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $deviceIdType;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $deviceIds;

    /**
     * @var string
     */
    public $deviceGroupId;
    protected $_name = [
        'deviceIdType'  => 'DeviceIdType',
        'projectId'     => 'ProjectId',
        'deviceIds'     => 'DeviceIds',
        'deviceGroupId' => 'DeviceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceIdType) {
            $res['DeviceIdType'] = $this->deviceIdType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = $this->deviceIds;
        }
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddVersionGroupDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceIdType'])) {
            $model->deviceIdType = $map['DeviceIdType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DeviceIds'])) {
            $model->deviceIds = $map['DeviceIds'];
        }
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }

        return $model;
    }
}
