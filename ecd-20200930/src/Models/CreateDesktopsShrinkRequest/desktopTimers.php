<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsShrinkRequest;

use AlibabaCloud\Dara\Model;

class desktopTimers extends Model
{
    /**
     * @var bool
     */
    public $allowClientSetting;
    /**
     * @var string
     */
    public $cronExpression;
    /**
     * @var bool
     */
    public $enforce;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $operationType;
    /**
     * @var string
     */
    public $resetType;
    /**
     * @var string
     */
    public $timerType;
    protected $_name = [
        'allowClientSetting' => 'AllowClientSetting',
        'cronExpression'     => 'CronExpression',
        'enforce'            => 'Enforce',
        'interval'           => 'Interval',
        'operationType'      => 'OperationType',
        'resetType'          => 'ResetType',
        'timerType'          => 'TimerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
