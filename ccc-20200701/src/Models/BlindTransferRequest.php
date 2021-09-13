<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class BlindTransferRequest extends Model
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
    public $transferor;

    /**
     * @var string
     */
    public $transferee;

    /**
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @var string
     */
    public $jobId;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'userId'         => 'UserId',
        'deviceId'       => 'DeviceId',
        'transferor'     => 'Transferor',
        'transferee'     => 'Transferee',
        'timeoutSeconds' => 'TimeoutSeconds',
        'jobId'          => 'JobId',
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
        if (null !== $this->transferor) {
            $res['Transferor'] = $this->transferor;
        }
        if (null !== $this->transferee) {
            $res['Transferee'] = $this->transferee;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BlindTransferRequest
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
        if (isset($map['Transferor'])) {
            $model->transferor = $map['Transferor'];
        }
        if (isset($map['Transferee'])) {
            $model->transferee = $map['Transferee'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
