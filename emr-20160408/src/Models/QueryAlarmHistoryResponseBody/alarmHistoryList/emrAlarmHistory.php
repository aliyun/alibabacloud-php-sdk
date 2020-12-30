<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\QueryAlarmHistoryResponseBody\alarmHistoryList;

use AlibabaCloud\Tea\Model;

class emrAlarmHistory extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var int
     */
    public $alarmTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'        => 'Status',
        'lastTime'      => 'LastTime',
        'metricName'    => 'MetricName',
        'alarmTime'     => 'AlarmTime',
        'state'         => 'State',
        'contactGroups' => 'ContactGroups',
        'instanceId'    => 'InstanceId',
        'name'          => 'Name',
        'role'          => 'Role',
        'clusterId'     => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->alarmTime) {
            $res['AlarmTime'] = $this->alarmTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emrAlarmHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['AlarmTime'])) {
            $model->alarmTime = $map['AlarmTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
