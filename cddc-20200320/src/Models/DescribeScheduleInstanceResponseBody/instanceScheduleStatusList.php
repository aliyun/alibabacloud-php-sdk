<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instanceScheduleStatusList extends Model
{
    /**
     * @var string
     */
    public $scheduleStatus;

    /**
     * @var string
     */
    public $instanceNodeTargetHostId;

    /**
     * @var string
     */
    public $instanceNodeRole;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceNodeSourceHostId;
    protected $_name = [
        'scheduleStatus'           => 'ScheduleStatus',
        'instanceNodeTargetHostId' => 'InstanceNodeTargetHostId',
        'instanceNodeRole'         => 'InstanceNodeRole',
        'engine'                   => 'Engine',
        'instanceId'               => 'InstanceId',
        'instanceNodeSourceHostId' => 'InstanceNodeSourceHostId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduleStatus) {
            $res['ScheduleStatus'] = $this->scheduleStatus;
        }
        if (null !== $this->instanceNodeTargetHostId) {
            $res['InstanceNodeTargetHostId'] = $this->instanceNodeTargetHostId;
        }
        if (null !== $this->instanceNodeRole) {
            $res['InstanceNodeRole'] = $this->instanceNodeRole;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceNodeSourceHostId) {
            $res['InstanceNodeSourceHostId'] = $this->instanceNodeSourceHostId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceScheduleStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduleStatus'])) {
            $model->scheduleStatus = $map['ScheduleStatus'];
        }
        if (isset($map['InstanceNodeTargetHostId'])) {
            $model->instanceNodeTargetHostId = $map['InstanceNodeTargetHostId'];
        }
        if (isset($map['InstanceNodeRole'])) {
            $model->instanceNodeRole = $map['InstanceNodeRole'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceNodeSourceHostId'])) {
            $model->instanceNodeSourceHostId = $map['InstanceNodeSourceHostId'];
        }

        return $model;
    }
}
