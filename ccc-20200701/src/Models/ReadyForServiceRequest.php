<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ReadyForServiceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var bool
     */
    public $outboundScenario;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'userId'           => 'UserId',
        'deviceId'         => 'DeviceId',
        'outboundScenario' => 'OutboundScenario',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->outboundScenario) {
            $res['OutboundScenario'] = $this->outboundScenario;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReadyForServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['OutboundScenario'])) {
            $model->outboundScenario = $map['OutboundScenario'];
        }

        return $model;
    }
}
