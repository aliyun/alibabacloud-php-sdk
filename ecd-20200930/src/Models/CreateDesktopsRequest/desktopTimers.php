<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;

use AlibabaCloud\Tea\Model;

class desktopTimers extends Model
{
    /**
     * @description Specifies whether to allow the end user to configure the scheduled task.
     *
     * @example true
     *
     * @var bool
     */
    public $allowClientSetting;

    /**
     * @description The cron expression for the scheduled task.
     *
     * >  The time must be in UTC. For example, for 24:00 (UTC+8), you must set the value to 0 0 16 ? \\* 1,2,3,4,5,6,7
     *
     * @example 0 40 7 ? * 1,2,3,4,5,6,7
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description Specifies whether to forcibly execute the scheduled task.
     *
     * Valid values:
     *
     *   true: forcibly executes the scheduled task regardless of the status and connection of the cloud computers.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   false: does not forcibly execute the scheduled task.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example True
     *
     * @var bool
     */
    public $enforce;

    /**
     * @description The interval at which cloud computers are created. Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $interval;

    /**
     * @description The operations that scheduled tasks support. This parameter is valid only when TimerType is set to NoConnect.
     *
     * Valid values:
     *
     *   Hibernate: hibernates the cloud computers.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Shutdown: stops the cloud computers.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example Shutdown
     *
     * @var string
     */
    public $operationType;

    /**
     * @description The reset type of the cloud computers.
     *
     * Valid values:
     *
     *   RESET_TYPE_SYSTEM: resets the system disks.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   RESET_TYPE_BOTH: resets the system disks and data disks.
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example RESET_TYPE_SYSTEM
     *
     * @var string
     */
    public $resetType;

    /**
     * @description The type of the scheduled task.
     *
     * @example NoOperationReboot
     *
     * @var string
     */
    public $timerType;
    protected $_name = [
        'allowClientSetting' => 'AllowClientSetting',
        'cronExpression' => 'CronExpression',
        'enforce' => 'Enforce',
        'interval' => 'Interval',
        'operationType' => 'OperationType',
        'resetType' => 'ResetType',
        'timerType' => 'TimerType',
    ];

    public function validate() {}

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
