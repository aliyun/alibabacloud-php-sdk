<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyTimerGroupRequest;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyTimerGroupRequest\configTimers\segmentTimers;
use AlibabaCloud\Tea\Model;

class configTimers extends Model
{
    /**
     * @description Specifies whether to allow end users to configure scheduled tasks.
     *
     * @example true
     *
     * @var bool
     */
    public $allowClientSetting;

    /**
     * @description The cron expression specified in the scheduled task.
     *
     * >  The time must be in UTC. For example, if your local time is 24:00 (UTC+8), you must set the value to 0 0 16 ? \\* 1,2,3,4,5,6,7.
     *
     * @example 0 0 16 ? * 1,2,3,4,5,6,7
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description Specifies whether to forcibly execute the scheduled task. A value of true specifies the scheduled task will run forcefully, ignoring the cloud computer and connection status.
     *
     * @example false
     *
     * @var bool
     */
    public $enforce;

    /**
     * @description The interval at which the scheduled task is executed. Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $notificationTime;

    /**
     * @description The type of the scheduled operation. If you set TimerType to NoConnect, you can specify this parameter.
     *
     * Valid values:
     *
     *   Hibernate: scheduled hibernation.
     *   Shutdown: scheduled shutdown.
     *
     * @example Shutdown
     *
     * @var string
     */
    public $operationType;

    /**
     * @description The process whitelist. If whitelisted processes are running, the scheduled task does not take effect upon inactivity.
     *
     * @var string[]
     */
    public $processWhitelist;

    /**
     * @description The reset option.
     *
     * Valid values:
     *
     *   RESET_TYPE_SYSTEM: resets the system disk.
     *   RESET_TYPE_USER_DISK: resets the data disk.
     *   RESET_TYPE_BOTH: resets the system disk and data disk.
     *
     * @example RESET_TYPE_SYSTEM
     *
     * @var string
     */
    public $resetType;

    /**
     * @var segmentTimers[]
     */
    public $segmentTimers;

    /**
     * @description The scheduled task type.
     *
     * Valid value:
     *
     *   NoOperationDisconnect: scheduled disconnection upon inactivity.
     *   NoConnect: scheduled disconnection upon specified operation (OperationType).
     *   TimerBoot: scheduled start.
     *   TimerReset: scheduled reset.
     *   NoOperationShutdown: scheduled shutdown upon inactivity.
     *   NoOperationHibernate: scheduled hibernation upon inactivity.
     *   TimerShutdown: scheduled shutdown.
     *   NoOperationReboot: scheduled restart upon inactivity.
     *   TimerReboot: scheduled restart.
     *
     * @example TIMER_BOOT
     *
     * @var string
     */
    public $timerType;

    /**
     * @description The method to trigger the scheduled task upon inactivity.
     *
     * Valid values:
     *
     *   Advanced: intelligent detection.
     *   Standard: standard detection.
     *
     * @example Standard
     *
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'allowClientSetting' => 'AllowClientSetting',
        'cronExpression' => 'CronExpression',
        'enforce' => 'Enforce',
        'interval' => 'Interval',
        'notificationTime' => 'NotificationTime',
        'operationType' => 'OperationType',
        'processWhitelist' => 'ProcessWhitelist',
        'resetType' => 'ResetType',
        'segmentTimers' => 'SegmentTimers',
        'timerType' => 'TimerType',
        'triggerType' => 'TriggerType',
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
        if (null !== $this->segmentTimers) {
            $res['SegmentTimers'] = [];
            if (null !== $this->segmentTimers && \is_array($this->segmentTimers)) {
                $n = 0;
                foreach ($this->segmentTimers as $item) {
                    $res['SegmentTimers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timerType) {
            $res['TimerType'] = $this->timerType;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configTimers
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
        if (isset($map['SegmentTimers'])) {
            if (!empty($map['SegmentTimers'])) {
                $model->segmentTimers = [];
                $n = 0;
                foreach ($map['SegmentTimers'] as $item) {
                    $model->segmentTimers[$n++] = null !== $item ? segmentTimers::fromMap($item) : $item;
                }
            }
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
