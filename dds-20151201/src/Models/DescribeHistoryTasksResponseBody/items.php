<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeHistoryTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example `{\"steps\":[{\"action_info\":{\"Waiting\":[\"modifySwitchTime\"]},\"step_name\":\"exec_task\"}]}`
     *
     * @var string
     */
    public $actionInfo;

    /**
     * @example System
     *
     * @var string
     */
    public $callerSource;

    /**
     * @example 141345906006****
     *
     * @var string
     */
    public $callerUid;

    /**
     * @example exec_task
     *
     * @var string
     */
    public $currentStepName;

    /**
     * @example mongodb
     *
     * @var string
     */
    public $dbType;

    /**
     * @example 2023-03-16T02:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example dds-t4n18194768fxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test-dds
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example Instance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example dds
     *
     * @var string
     */
    public $product;

    /**
     * @example 100.0
     *
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $remainTime;

    /**
     * @example 2023-02-11T02:33Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Succeed
     *
     * @var int
     */
    public $status;

    /**
     * @example {\"callerUid\":\"test\"}
     *
     * @var string
     */
    public $taskDetail;

    /**
     * @example t-0mq1yyhm3ffl2bxxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @example CreateIns
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 141345906006****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'actionInfo'      => 'ActionInfo',
        'callerSource'    => 'CallerSource',
        'callerUid'       => 'CallerUid',
        'currentStepName' => 'CurrentStepName',
        'dbType'          => 'DbType',
        'endTime'         => 'EndTime',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'instanceType'    => 'InstanceType',
        'product'         => 'Product',
        'progress'        => 'Progress',
        'reasonCode'      => 'ReasonCode',
        'regionId'        => 'RegionId',
        'remainTime'      => 'RemainTime',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'taskDetail'      => 'TaskDetail',
        'taskId'          => 'TaskId',
        'taskType'        => 'TaskType',
        'uid'             => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionInfo) {
            $res['ActionInfo'] = $this->actionInfo;
        }
        if (null !== $this->callerSource) {
            $res['CallerSource'] = $this->callerSource;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->currentStepName) {
            $res['CurrentStepName'] = $this->currentStepName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskDetail) {
            $res['TaskDetail'] = $this->taskDetail;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionInfo'])) {
            $model->actionInfo = $map['ActionInfo'];
        }
        if (isset($map['CallerSource'])) {
            $model->callerSource = $map['CallerSource'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['CurrentStepName'])) {
            $model->currentStepName = $map['CurrentStepName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskDetail'])) {
            $model->taskDetail = $map['TaskDetail'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
