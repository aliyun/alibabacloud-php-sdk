<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeleteDevicePropertyRequest extends Model
{
    /**
     * @example property-z50wex75a1lkx7vx
     *
     * @var string
     */
    public $devicePropertyId;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'devicePropertyId' => 'DevicePropertyId',
        'instanceId'       => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devicePropertyId) {
            $res['DevicePropertyId'] = $this->devicePropertyId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDevicePropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DevicePropertyId'])) {
            $model->devicePropertyId = $map['DevicePropertyId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
