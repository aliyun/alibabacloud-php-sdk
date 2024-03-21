<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class desktopTimers extends Model
{
    /**
     * @var bool
     */
    public $allowClientSetting;

    /**
     * @example 0 0 0 ? * 1
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @example false
     *
     * @var bool
     */
    public $enforce;

    /**
     * @var string
     */
    public $executionTime;

    /**
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @example RESET_TYPE_BOTH
     *
     * @var string
     */
    public $resetType;

    /**
     * @example NoConnectShutdown
     *
     * @var string
     */
    public $timerType;
    protected $_name = [
        'allowClientSetting' => 'AllowClientSetting',
        'cronExpression'     => 'CronExpression',
        'enforce'            => 'Enforce',
        'executionTime'      => 'ExecutionTime',
        'interval'           => 'Interval',
        'operationType'      => 'OperationType',
        'resetType'          => 'ResetType',
        'timerType'          => 'TimerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowClientSetting) {
            $res['AllowClientSetting'] = $this->allowClientSetting;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->enforce) {
            $res['Enforce'] = $this->enforce;
        }
        if (null !== $this->executionTime) {
            $res['ExecutionTime'] = $this->executionTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }
        if (null !== $this->timerType) {
            $res['TimerType'] = $this->timerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopTimers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowClientSetting'])) {
            $model->allowClientSetting = $map['AllowClientSetting'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['Enforce'])) {
            $model->enforce = $map['Enforce'];
        }
        if (isset($map['ExecutionTime'])) {
            $model->executionTime = $map['ExecutionTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }
        if (isset($map['TimerType'])) {
            $model->timerType = $map['TimerType'];
        }

        return $model;
    }
}
