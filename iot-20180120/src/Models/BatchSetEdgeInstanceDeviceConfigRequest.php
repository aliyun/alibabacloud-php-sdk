<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchSetEdgeInstanceDeviceConfigRequest\deviceConfigs;
use AlibabaCloud\Tea\Model;

class BatchSetEdgeInstanceDeviceConfigRequest extends Model
{
    /**
     * @var deviceConfigs[]
     */
    public $deviceConfigs;

    /**
     * @example F3APY0tPLhmgGtx0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'deviceConfigs' => 'DeviceConfigs',
        'instanceId'    => 'InstanceId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceConfigs) {
            $res['DeviceConfigs'] = [];
            if (null !== $this->deviceConfigs && \is_array($this->deviceConfigs)) {
                $n = 0;
                foreach ($this->deviceConfigs as $item) {
                    $res['DeviceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
        if (isset($map['DeviceConfigs'])) {
            if (!empty($map['DeviceConfigs'])) {
                $model->deviceConfigs = [];
                $n                    = 0;
                foreach ($map['DeviceConfigs'] as $item) {
                    $model->deviceConfigs[$n++] = null !== $item ? deviceConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
