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
     * @var int
     */
    public $queuingOverflowThreshold;

    /**
     * @var int
     */
    public $queuingTimeoutSeconds;

    /**
     * @var string
     */
    public $routingType;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var string
     */
    public $strategyParams;

    /**
     * @var string
     */
    public $tags;

    /**
     * @example 60
     *
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @description This parameter is required.
     *
     * @example agent2@ccc-test
     *
     * @var string
     */
    public $transferee;

    /**
     * @var string
     */
    public $transfereeType;

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
        'callPriority'             => 'CallPriority',
        'deviceId'                 => 'DeviceId',
        'instanceId'               => 'InstanceId',
        'jobId'                    => 'JobId',
        'queuingOverflowThreshold' => 'QueuingOverflowThreshold',
        'queuingTimeoutSeconds'    => 'QueuingTimeoutSeconds',
        'routingType'              => 'RoutingType',
        'strategyName'             => 'StrategyName',
        'strategyParams'           => 'StrategyParams',
        'tags'                     => 'Tags',
        'timeoutSeconds'           => 'TimeoutSeconds',
        'transferee'               => 'Transferee',
        'transfereeType'           => 'TransfereeType',
        'transferor'               => 'Transferor',
        'userId'                   => 'UserId',
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
        if (null !== $this->queuingOverflowThreshold) {
            $res['QueuingOverflowThreshold'] = $this->queuingOverflowThreshold;
        }
        if (null !== $this->queuingTimeoutSeconds) {
            $res['QueuingTimeoutSeconds'] = $this->queuingTimeoutSeconds;
        }
        if (null !== $this->routingType) {
            $res['RoutingType'] = $this->routingType;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->strategyParams) {
            $res['StrategyParams'] = $this->strategyParams;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }
        if (null !== $this->transferee) {
            $res['Transferee'] = $this->transferee;
        }
        if (null !== $this->transfereeType) {
            $res['TransfereeType'] = $this->transfereeType;
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
        if (isset($map['QueuingOverflowThreshold'])) {
            $model->queuingOverflowThreshold = $map['QueuingOverflowThreshold'];
        }
        if (isset($map['QueuingTimeoutSeconds'])) {
            $model->queuingTimeoutSeconds = $map['QueuingTimeoutSeconds'];
        }
        if (isset($map['RoutingType'])) {
            $model->routingType = $map['RoutingType'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['StrategyParams'])) {
            $model->strategyParams = $map['StrategyParams'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }
        if (isset($map['Transferee'])) {
            $model->transferee = $map['Transferee'];
        }
        if (isset($map['TransfereeType'])) {
            $model->transfereeType = $map['TransfereeType'];
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
