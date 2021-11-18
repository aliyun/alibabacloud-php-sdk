<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class InstanceStatus extends Model
{
    /**
     * @description 累计运行时间（分钟）
     *
     * @var int
     */
    public $accumulativeRunningTimeInMinutes;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var InstanceShutdownTimer
     */
    public $instanceShutdownTimer;

    /**
     * @description 实例状态
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description 实例消息
     *
     * @var string
     */
    public $msg;

    /**
     * @description 是否允许使用定时关机
     *
     * @var bool
     */
    public $shutdownEnabled;

    /**
     * @description 实例类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accumulativeRunningTimeInMinutes' => 'AccumulativeRunningTimeInMinutes',
        'instanceId'                       => 'InstanceId',
        'instanceShutdownTimer'            => 'InstanceShutdownTimer',
        'instanceStatus'                   => 'InstanceStatus',
        'msg'                              => 'Msg',
        'shutdownEnabled'                  => 'ShutdownEnabled',
        'type'                             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accumulativeRunningTimeInMinutes) {
            $res['AccumulativeRunningTimeInMinutes'] = $this->accumulativeRunningTimeInMinutes;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceShutdownTimer) {
            $res['InstanceShutdownTimer'] = null !== $this->instanceShutdownTimer ? $this->instanceShutdownTimer->toMap() : null;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->shutdownEnabled) {
            $res['ShutdownEnabled'] = $this->shutdownEnabled;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstanceStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccumulativeRunningTimeInMinutes'])) {
            $model->accumulativeRunningTimeInMinutes = $map['AccumulativeRunningTimeInMinutes'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceShutdownTimer'])) {
            $model->instanceShutdownTimer = InstanceShutdownTimer::fromMap($map['InstanceShutdownTimer']);
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['ShutdownEnabled'])) {
            $model->shutdownEnabled = $map['ShutdownEnabled'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
