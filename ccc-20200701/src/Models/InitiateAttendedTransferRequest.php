<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class InitiateAttendedTransferRequest extends Model
{
    /**
     * @var int
     */
    public $callPriority;

    /**
     * @example ACC-YUNBS-1.0.10-****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example job-6538214103685****
     *
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var string
     */
    public $strategyParams;

    /**
     * @example 60
     *
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @example agent2@ccc-test
     *
     * @var string
     */
    public $transferee;

    /**
     * @var string
     */
    public $transferor;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'callPriority'   => 'CallPriority',
        'deviceId'       => 'DeviceId',
        'instanceId'     => 'InstanceId',
        'jobId'          => 'JobId',
        'strategyName'   => 'StrategyName',
        'strategyParams' => 'StrategyParams',
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
        if (null !== $this->callPriority) {
            $res['CallPriority'] = $this->callPriority;
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
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->strategyParams) {
            $res['StrategyParams'] = $this->strategyParams;
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
        if (isset($map['CallPriority'])) {
            $model->callPriority = $map['CallPriority'];
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
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['StrategyParams'])) {
            $model->strategyParams = $map['StrategyParams'];
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
