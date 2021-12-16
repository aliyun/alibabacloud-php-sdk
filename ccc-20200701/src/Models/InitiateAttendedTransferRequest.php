<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class InitiateAttendedTransferRequest extends Model
{
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
    public $transferee;

    /**
     * @var string
     */
    public $transferor;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'deviceId'       => 'DeviceId',
        'instanceId'     => 'InstanceId',
        'jobId'          => 'JobId',
        'timeoutSeconds' => 'TimeoutSeconds',
        'transferee'     => 'Transferee',
        'transferor'     => 'Transferor',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->transferee) {
            $res['Transferee'] = $this->transferee;
        }
        if (null !== $this->transferor) {
            $res['Transferor'] = $this->transferor;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitiateAttendedTransferRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Transferee'])) {
            $model->transferee = $map['Transferee'];
        }
        if (isset($map['Transferor'])) {
            $model->transferor = $map['Transferor'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
