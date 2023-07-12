<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeInstanceChannelRequest\configs;
use AlibabaCloud\Tea\Model;

class CreateEdgeInstanceChannelRequest extends Model
{
    /**
     * @var string
     */
    public $channelName;

    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @var string
     */
    public $driverId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'channelName'   => 'ChannelName',
        'configs'       => 'Configs',
        'driverId'      => 'DriverId',
        'instanceId'    => 'InstanceId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('channelName', $this->channelName, true);
        Model::validateRequired('configs', $this->configs, true);
        Model::validateRequired('driverId', $this->driverId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->configs) {
            $res['Configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['Configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
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
     * @return CreateEdgeInstanceChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['Configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
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
