<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeleteDeviceResourceRequest extends Model
{
    /**
     * @example deviceResourceId
     *
     * @var string
     */
    public $deviceResourceId;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'deviceResourceId' => 'DeviceResourceId',
        'instanceId'       => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceResourceId) {
            $res['DeviceResourceId'] = $this->deviceResourceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDeviceResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceResourceId'])) {
            $model->deviceResourceId = $map['DeviceResourceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
