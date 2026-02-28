<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchSetEdgeInstanceDeviceConfigRequest\deviceConfigs;

class BatchSetEdgeInstanceDeviceConfigRequest extends Model
{
    /**
     * @var deviceConfigs[]
     */
    public $deviceConfigs;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'deviceConfigs' => 'DeviceConfigs',
        'instanceId' => 'InstanceId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->deviceConfigs)) {
            Model::validateArray($this->deviceConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceConfigs) {
            if (\is_array($this->deviceConfigs)) {
                $res['DeviceConfigs'] = [];
                $n1 = 0;
                foreach ($this->deviceConfigs as $item1) {
                    $res['DeviceConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceConfigs'])) {
            if (!empty($map['DeviceConfigs'])) {
                $model->deviceConfigs = [];
                $n1 = 0;
                foreach ($map['DeviceConfigs'] as $item1) {
                    $model->deviceConfigs[$n1] = deviceConfigs::fromMap($item1);
                    ++$n1;
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
