<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTimerGroupResponseBody\data\configTimers;

use AlibabaCloud\Tea\Model;

class segmentTimers extends Model
{
    /**
     * @var string
     */
    public $endCronExpression;

    /**
     * @var bool
     */
    public $enforce;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $notificationTime;

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
    public $startCronExpression;

    /**
     * @var int
     */
    public $timerOrder;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'endCronExpression' => 'EndCronExpression',
        'enforce' => 'Enforce',
        'interval' => 'Interval',
        'notificationTime' => 'NotificationTime',
        'operationType' => 'OperationType',
        'processWhitelist' => 'ProcessWhitelist',
        'resetType' => 'ResetType',
        'startCronExpression' => 'StartCronExpression',
        'timerOrder' => 'TimerOrder',
        'timezone' => 'Timezone',
        'triggerType' => 'TriggerType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endCronExpression) {
            $res['EndCronExpression'] = $this->endCronExpression;
        }
        if (null !== $this->enforce) {
            $res['Enforce'] = $this->enforce;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->notificationTime) {
            $res['NotificationTime'] = $this->notificationTime;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->processWhitelist) {
            $res['ProcessWhitelist'] = $this->processWhitelist;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }
        if (null !== $this->startCronExpression) {
            $res['StartCronExpression'] = $this->startCronExpression;
        }
        if (null !== $this->timerOrder) {
            $res['TimerOrder'] = $this->timerOrder;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segmentTimers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndCronExpression'])) {
            $model->endCronExpression = $map['EndCronExpression'];
        }
        if (isset($map['Enforce'])) {
            $model->enforce = $map['Enforce'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['NotificationTime'])) {
            $model->notificationTime = $map['NotificationTime'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['ProcessWhitelist'])) {
            if (!empty($map['ProcessWhitelist'])) {
                $model->processWhitelist = $map['ProcessWhitelist'];
            }
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }
        if (isset($map['StartCronExpression'])) {
            $model->startCronExpression = $map['StartCronExpression'];
        }
        if (isset($map['TimerOrder'])) {
            $model->timerOrder = $map['TimerOrder'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
