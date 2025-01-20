<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class CoachCallRequest extends Model
{
    /**
     * @var string
     */
    public $coachedUserId;
    /**
     * @var string
     */
    public $deviceId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var int
     */
    public $timeoutSeconds;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'coachedUserId'  => 'CoachedUserId',
        'deviceId'       => 'DeviceId',
        'instanceId'     => 'InstanceId',
        'jobId'          => 'JobId',
        'timeoutSeconds' => 'TimeoutSeconds',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coachedUserId) {
            $res['CoachedUserId'] = $this->coachedUserId;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CoachedUserId'])) {
            $model->coachedUserId = $map['CoachedUserId'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
