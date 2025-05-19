<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\ListAlarmHistoryResponseBody\alarmHistoryList;

use AlibabaCloud\Dara\Model;

class alarmHistory extends Model
{
    /**
     * @var int
     */
    public $alarmTime;

    /**
     * @var string
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'alarmTime' => 'AlarmTime',
        'contactGroups' => 'ContactGroups',
        'dimension' => 'Dimension',
        'evaluationCount' => 'EvaluationCount',
        'id' => 'Id',
        'instanceName' => 'InstanceName',
        'lastTime' => 'LastTime',
        'metricName' => 'MetricName',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'state' => 'State',
        'status' => 'Status',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmTime) {
            $res['AlarmTime'] = $this->alarmTime;
        }

        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['AlarmTime'])) {
            $model->alarmTime = $map['AlarmTime'];
        }

        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
