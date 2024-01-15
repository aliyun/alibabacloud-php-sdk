<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopTimerRequest;

use AlibabaCloud\Tea\Model;

class desktopTimers extends Model
{
    /**
     * @description Specifies whether to allow end users to configure scheduled tasks on an Alibaba Cloud Workspace client.
     *
     * @example true
     *
     * @var bool
     */
    public $allowClientSetting;

    /**
     * @description The cron expression of the scheduled task.
     *
     * >  You must specify the time in UTC format. For example, if you want to specify 00:00 of UTC+8, use the following cron expression: 0 0 16. \* 1,2,3,4,5,6,7
     * @example 0 0 16 ? * 1,2,3,4,5,6,7
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description Specifies whether to forcefully execute the scheduled task. A value of true indicates that the system forcefully executes the scheduled task regardless of the connection status of the cloud desktop.
     *
     * @example true
     *
     * @var bool
     */
    public $enforce;

    /**
     * @description The interval. Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $interval;

    /**
     * @description The type of the scheduled operation. This parameter is valid only when TimerType is set to NoConnect.
     *
     * Valid values:
     *
     *   Hibernate
     *
     * .
     *
     *   Shutdown
     *
     * .
     * @var string
     */
    public $operationType;

    /**
     * @description Indicates which type of disk that is used by the cloud desktop is reset.
     *
     * Valid values:
     *
     *   RESET_TYPE_SYSTEM
     *
     * .
     *
     *   RESET_TYPE_BOTH
     *
     * <!-- -->
     * @var string
     */
    public $resetType;

    /**
     * @description The type of the scheduled task.
     *
     * Valid values:
     *
     *   NoOperationDisconnect: Disconnects the cloud desktops when no operations are performed on the cloud desktops.
     *
     * <!-- -->
     *
     *   LogoutShutdown: Stops the cloud desktops when end users log out of Alibaba Cloud Workspace clients.
     *
     * <!-- -->
     *
     *   NoConnect: Disconnets the cloud desktops when end users perform one of the actions that is specified by the OperationType parameter.
     *
     * <!-- -->
     *
     *   TimerBoot: Starts the cloud desktops at a scheduled point in time.
     *
     * <!-- -->
     *
     *   TimerReset: Resets the cloud desktops at a scheduled point in time.
     *
     * <!-- -->
     *
     *   LoginAutoConnect: automatically connects to cloud desktops when end users log on to Alibaba Cloud Workspace clients.
     *
     * <!-- -->
     *
     *   NoOperationShutdown: Stops the cloud desktops when no operations are performed on the cloud desktops.
     *
     * <!-- -->
     *
     *   TimerShutdown: Stops the cloud desktops at a scheduled point in time.
     *
     * <!-- -->
     *
     *   NoOperationReboot: Restarts the cloud desktops when no operations are performed on the cloud desktops.
     *
     * <!-- -->
     *
     *   TimerReboot: Restarts the cloud desktops at a scheduled point in time.
     *
     * <!-- -->
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
