<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteEdgeInstanceChannelRequest extends Model
{
    /**
     * @var string[]
     */
    public $channelIds;

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
        'channelIds' => 'ChannelIds',
        'driverId' => 'DriverId',
        'instanceId' => 'InstanceId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->channelIds)) {
            Model::validateArray($this->channelIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelIds) {
            if (\is_array($this->channelIds)) {
                $res['ChannelIds'] = [];
                $n1 = 0;
                foreach ($this->channelIds as $item1) {
                    $res['ChannelIds'][$n1] = $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelIds'])) {
            if (!empty($map['ChannelIds'])) {
                $model->channelIds = [];
                $n1 = 0;
                foreach ($map['ChannelIds'] as $item1) {
                    $model->channelIds[$n1] = $item1;
                    ++$n1;
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
