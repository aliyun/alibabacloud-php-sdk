<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class InterceptCallRequest extends Model
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
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $interceptedUserId;

    /**
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'userId'            => 'UserId',
        'deviceId'          => 'DeviceId',
        'jobId'             => 'JobId',
        'interceptedUserId' => 'InterceptedUserId',
        'timeoutSeconds'    => 'TimeoutSeconds',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->interceptedUserId) {
            $res['InterceptedUserId'] = $this->interceptedUserId;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InterceptCallRequest
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['InterceptedUserId'])) {
            $model->interceptedUserId = $map['InterceptedUserId'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        return $model;
    }
}
