<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchSetEdgeInstanceDeviceConfigRequest\deviceConfigs;
use AlibabaCloud\Tea\Model;

class BatchSetEdgeInstanceDeviceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var deviceConfigs[]
     */
    public $deviceConfigs;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'instanceId'    => 'InstanceId',
        'deviceConfigs' => 'DeviceConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->deviceConfigs) {
            $res['DeviceConfigs'] = [];
            if (null !== $this->deviceConfigs && \is_array($this->deviceConfigs)) {
                $n = 0;
                foreach ($this->deviceConfigs as $item) {
                    $res['DeviceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSetEdgeInstanceDeviceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DeviceConfigs'])) {
            if (!empty($map['DeviceConfigs'])) {
                $model->deviceConfigs = [];
                $n                    = 0;
                foreach ($map['DeviceConfigs'] as $item) {
                    $model->deviceConfigs[$n++] = null !== $item ? deviceConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
