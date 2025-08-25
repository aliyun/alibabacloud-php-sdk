<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class InitiateAttendedTransferRequest extends Model
{
    /**
     * @var int
     */
    public $callPriority;

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
    public $transfereeType;

    /**
     * @var string
     */
    public $transferor;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'callPriority' => 'CallPriority',
        'deviceId' => 'DeviceId',
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
        'queuingOverflowThreshold' => 'QueuingOverflowThreshold',
        'queuingTimeoutSeconds' => 'QueuingTimeoutSeconds',
        'routingType' => 'RoutingType',
        'strategyName' => 'StrategyName',
        'strategyParams' => 'StrategyParams',
        'tags' => 'Tags',
        'timeoutSeconds' => 'TimeoutSeconds',
        'transferee' => 'Transferee',
        'transfereeType' => 'TransfereeType',
        'transferor' => 'Transferor',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
