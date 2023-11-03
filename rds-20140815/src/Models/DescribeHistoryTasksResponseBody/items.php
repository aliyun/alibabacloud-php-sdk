<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHistoryTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description A set of allowed actions that can be taken on the task. The system matches the current step name and status of the task to the available actions specified by ActionInfo. If no matching action is found, the current status of the task does not support any action. Example:
     *
     * The system may support the following actions: retry cancel modifySwitchTime: changes the switching or restoration time.
     * @example {\"steps\":[{\"action_info\":{\"Waiting\":[\"modifySwitchTime\"]},\"step_name\":\"exec_task\"}]}
     *
     * @var string
     */
    public $actionInfo;

    /**
     * @description The ID of the user who made the request. If CallerSource is set to User, CallerUid indicates the unique ID (UID) of the user.
     *
     * @example 141345906006****
     *
     * @var string
     */
    public $callerSource;

    /**
     * @description The request source. Valid values: System User
     *
     * @example User
     *
     * @var string
     */
    public $callerUid;

    /**
     * @description The name of the current step. If this parameter is left empty, the task is not started.
     *
     * @example exec_task
     *
     * @var string
     */
    public $currentStepName;

    /**
     * @description The database type.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The end time of the task. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-02-03T12:06:17Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The instance ID. Example: rm-xxx.
     *
     * @example rm-uf62br2491p5l****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name, which is a user-defined alias.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The type of the instance. Example: user instance.
     *
     * @example Instance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The product. Example: rds.
     *
     * @example rds
     *
     * @var string
     */
    public $product;

    /**
     * @description The task progress. Valid values: 0 to 100.
     *
     * @example 79.0
     *
     * @var float
     */
    public $progress;

    /**
     * @description The reason why the current task was initiated.
     *
     * @example ****
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @description The region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The estimated amount of time remaining to complete the task. Unit: seconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $remainTime;

    /**
     * @description The start time of the task. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-02-03T11:31:03Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the task.
     *
     *   Scheduled
     *   Running
     *   Succeed
     *   Failed
     *   Cancelling
     *   Canceled
     *   Waiting
     *
     * @example Running
     *
     * @var int
     */
    public $status;

    /**
     * @description The task details provided in the form of a JSON string. The JSON string can be customized and extended to include additional information about the task. The details vary based on the task type.
     *
     * @example {\"callerUid\":\"test\"}
     *
     * @var string
     */
    public $taskDetail;

    /**
     * @description The task ID in the t-\*\*\* format.
     *
     * @example t-83br18hloy3faf****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task type or name.
     *
     * @example autotest_dispatch_cases
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The ID of the user to which the resources belong.
     *
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
