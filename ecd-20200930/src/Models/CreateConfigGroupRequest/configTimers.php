<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateConfigGroupRequest;

use AlibabaCloud\Dara\Model;

class configTimers extends Model
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
     * @var string[]
     */
    public $processWhitelist;

    /**
     * @var string
     */
    public $resetType;

    /**
     * @var string
     */
    public $timerType;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'allowClientSetting' => 'AllowClientSetting',
        'cronExpression' => 'CronExpression',
        'enforce' => 'Enforce',
        'interval' => 'Interval',
        'operationType' => 'OperationType',
        'processWhitelist' => 'ProcessWhitelist',
        'resetType' => 'ResetType',
        'timerType' => 'TimerType',
        'triggerType' => 'TriggerType',
    ];

    public function validate()
    {
        if (\is_array($this->processWhitelist)) {
            Model::validateArray($this->processWhitelist);
        }
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

        if (null !== $this->processWhitelist) {
            if (\is_array($this->processWhitelist)) {
                $res['ProcessWhitelist'] = [];
                $n1 = 0;
                foreach ($this->processWhitelist as $item1) {
                    $res['ProcessWhitelist'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }

        if (null !== $this->timerType) {
            $res['TimerType'] = $this->timerType;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
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

        if (isset($map['ProcessWhitelist'])) {
            if (!empty($map['ProcessWhitelist'])) {
                $model->processWhitelist = [];
                $n1 = 0;
                foreach ($map['ProcessWhitelist'] as $item1) {
                    $model->processWhitelist[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }

        if (isset($map['TimerType'])) {
            $model->timerType = $map['TimerType'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
