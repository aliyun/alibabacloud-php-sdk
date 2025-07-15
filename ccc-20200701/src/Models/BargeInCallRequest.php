<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class BargeInCallRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example agent2@ccc-test
     *
     * @var string
     */
    public $bargedUserId;

    /**
     * @example device
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example job-6538214103685****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 60
     *
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'bargedUserId' => 'BargedUserId',
        'deviceId' => 'DeviceId',
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
        'timeoutSeconds' => 'TimeoutSeconds',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bargedUserId) {
            $res['BargedUserId'] = $this->bargedUserId;
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

    /**
     * @param array $map
     *
     * @return BargeInCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BargedUserId'])) {
            $model->bargedUserId = $map['BargedUserId'];
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
