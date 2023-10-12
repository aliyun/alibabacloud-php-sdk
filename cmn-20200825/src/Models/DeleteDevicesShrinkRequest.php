<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeleteDevicesShrinkRequest extends Model
{
    /**
     * @example device-evve560juend5owh
     *
     * @var string
     */
    public $deviceIdsShrink;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'deviceIdsShrink' => 'DeviceIds',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceIdsShrink) {
            $res['DeviceIds'] = $this->deviceIdsShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDevicesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceIds'])) {
            $model->deviceIdsShrink = $map['DeviceIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
