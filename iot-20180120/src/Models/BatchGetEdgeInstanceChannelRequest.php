<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchGetEdgeInstanceChannelRequest extends Model
{
    /**
     * @example BE0BD49EF5EF4D119D09CC1B25******
     *
     * @var string[]
     */
    public $channelIds;

    /**
     * @example 9c1ae7bd59f1469abbdccc9592******
     *
     * @var string
     */
    public $driverId;

    /**
     * @example 6GaTtvTj7vJhiS******
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
        'channelIds'    => 'ChannelIds',
        'driverId'      => 'DriverId',
        'instanceId'    => 'InstanceId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelIds) {
            $res['ChannelIds'] = $this->channelIds;
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
     * @return BatchGetEdgeInstanceChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelIds'])) {
            if (!empty($map['ChannelIds'])) {
                $model->channelIds = $map['ChannelIds'];
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
