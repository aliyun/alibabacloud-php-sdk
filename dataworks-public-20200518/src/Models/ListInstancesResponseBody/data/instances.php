<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The ID of the baseline.
     *
     * @example 123123
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The time when the instance started to run.
     *
     * @example 1590416703313
     *
     * @var int
     */
    public $beginRunningTime;

    /**
     * @description The time when the instance started to wait for resources.
     *
     * @example 1590416703313
     *
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @description The time when the instance started to wait to be scheduled.
     *
     * @example 1590416703313
     *
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @description The data timestamp of the instance. In most cases, the value is one day before the time when the instance was run.
     *
     * @example 1590336000000
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description The ID of the workflow.
     *
     * @example 123
     *
     * @var int
     */
    public $businessId;

    /**
     * @description The connection string.
     *
     * @example odps_first
     *
     * @var string
     */
    public $connection;

    /**
     * @description The time when the instance was generated.
     *
     * @example 1590416703313
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The name of the account that is used to run the instance. For example, if an account named Test was used to run the instance to backfill data, the value of this parameter is Test.
     *
     * @example Test
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The time when the node was scheduled to run.
     *
     * @example 1590422400000
     *
     * @var int
     */
    public $cycTime;

    /**
     * @description The ID of the workflow.
     *
     * @example 33845
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The type of the workflow. Valid values:
     *
     *   DAILY: The workflow is used to run auto triggered nodes.
     *   MANUAL: The workflow is used to run manually triggered nodes.
     *   SMOKE_TEST: The workflow is used to perform smoke testing.
     *   SUPPLY_DATA: The workflow is used to backfill data.
     *
     * @example DAILY
     *
     * @var string
     */
    public $dagType;

    /**
     * @description The table and partition filter expression in Data Quality that are associated with the node.
     *
     * @example [{"projectName":"ztjy_dim","tableName":"dim_user_agent_manage_area_a","partition":"ds\u003d$[yyyy-mm-dd-1]"}]
     *
     * @var string
     */
    public $dqcDescription;

    /**
     * @description Indicates whether the instance is associated with a monitoring rule in Data Quality. Valid values:
     *
     *   0: The instance is associated with a monitoring rule in Data Quality.
     *   1: The instance is not associated with a monitoring rule in Data Quality.
     *
     * @example 1
     *
     * @var int
     */
    public $dqcType;

    /**
     * @description The error message that is returned for the instance.
     *
     * This parameter is deprecated. You can call the [GetInstanceLog](~~173983~~) operation to query the error information related to the node.
     * @example error message
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The time when the node stopped running.
     *
     * @example 1590416703313
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The ID of the instance.
     *
     * @example 1234
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The time when the node was last modified.
     *
     * @example 1590416703313
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The ID of the node.
     *
     * @example 33115
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @example kzh
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The parameters related to the node.
     *
     * @example bizdate=$bizdate tbods=$tbods
     *
     * @var string
     */
    public $paramValues;

    /**
     * @description The priority of the instance. Valid values: 1, 3, 5, 7, and 8.
     *
     * A greater value indicates a higher priority. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the workflow to which the node belongs.
     *
     * @example 123456
     *
     * @var int
     */
    public $relatedFlowId;

    /**
     * @description The interval at which the node is rerun after the node fails to run. Unit: milliseconds.
     *
     * @example 60000
     *
     * @var int
     */
    public $repeatInterval;

    /**
     * @description Indicates whether the node can be rerun.
     *
     * @example true
     *
     * @var bool
     */
    public $repeatability;

    /**
     * @description The status of the node. Valid values:
     *
     *   NOT_RUN: The node is not run.
     *   WAIT_TIME: The node is waiting for the scheduling time to arrive.
     *   WAIT_RESOURCE: The node is waiting for resources.
     *   RUNNING: The node is running.
     *   CHECKING: Data quality is being checked for the node.
     *   CHECKING_CONDITION: Branch conditions are being checked for the node.
     *   FAILURE: The node fails to run.
     *   SUCCESS: The node is successfully run.
     *
     * @example NOT_RUN
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of times the node can be rerun. The value of this parameter can be empty or an integer that is greater than or equal to 0.
     *
     *   If the value of this parameter is empty, the number of times that the node can be rerun is not specified.
     *   If the value of this parameter is 0, the node cannot be rerun.
     *   If the value of this parameter is a positive integer such as n, the node can be rerun n times. For example, if the value of this parameter is 1, the node can be rerun once. If the value of this parameter is 2, the node can be rerun twice.
     *
     * @example 0
     *
     * @var int
     */
    public $taskRerunTime;

    /**
     * @description The scheduling type of the node. Valid values:
     *
     *   NORMAL(0): The node is an auto triggered node. The scheduling system regularly runs the node.
     *
     *   MANUAL(1): The node is a manually triggered node. The scheduling system does not regularly run the node.
     *
     *   PAUSE(2): The node is a frozen node. The scheduling system regularly runs the node but sets the status of the node to failed when the scheduling system starts to run the node.
     *
     *   SKIP(3): The node is a dry-run node. The scheduling system regularly runs the node but sets the status of the node to succeeded when the scheduling system starts to run the node.
     *
     *   SKIP_UNCHOOSE(4): The node is an unselected node in a temporary workflow. This type of node exists only in temporary workflows. The scheduling system sets the status of the node to succeeded when the scheduling system starts to run the node.
     *
     *   SKIP_CYCLE(5): The node is a node that is scheduled by week or month and is waiting for the scheduling time to arrive. The scheduling system regularly runs the node but sets the status of the node to succeeded when the scheduling system starts to run the node.
     *
     *   CONDITION_UNCHOOSE(6): The node is not selected by its ancestor branch node and is run as a dry-run node.
     *
     * REALTIME_DEPRECATED(7): The node has instances that are generated in real time but deprecated. The scheduling system sets the status of the node to succeeded.
     * @example NORMAL(0)
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'baselineId'        => 'BaselineId',
        'beginRunningTime'  => 'BeginRunningTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'bizdate'           => 'Bizdate',
        'businessId'        => 'BusinessId',
        'connection'        => 'Connection',
        'createTime'        => 'CreateTime',
        'createUser'        => 'CreateUser',
        'cycTime'           => 'CycTime',
        'dagId'             => 'DagId',
        'dagType'           => 'DagType',
        'dqcDescription'    => 'DqcDescription',
        'dqcType'           => 'DqcType',
        'errorMessage'      => 'ErrorMessage',
        'finishTime'        => 'FinishTime',
        'instanceId'        => 'InstanceId',
        'modifyTime'        => 'ModifyTime',
        'nodeId'            => 'NodeId',
        'nodeName'          => 'NodeName',
        'paramValues'       => 'ParamValues',
        'priority'          => 'Priority',
        'relatedFlowId'     => 'RelatedFlowId',
        'repeatInterval'    => 'RepeatInterval',
        'repeatability'     => 'Repeatability',
        'status'            => 'Status',
        'taskRerunTime'     => 'TaskRerunTime',
        'taskType'          => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->beginRunningTime) {
            $res['BeginRunningTime'] = $this->beginRunningTime;
        }
        if (null !== $this->beginWaitResTime) {
            $res['BeginWaitResTime'] = $this->beginWaitResTime;
        }
        if (null !== $this->beginWaitTimeTime) {
            $res['BeginWaitTimeTime'] = $this->beginWaitTimeTime;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->connection) {
            $res['Connection'] = $this->connection;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->cycTime) {
            $res['CycTime'] = $this->cycTime;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->dagType) {
            $res['DagType'] = $this->dagType;
        }
        if (null !== $this->dqcDescription) {
            $res['DqcDescription'] = $this->dqcDescription;
        }
        if (null !== $this->dqcType) {
            $res['DqcType'] = $this->dqcType;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->paramValues) {
            $res['ParamValues'] = $this->paramValues;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->relatedFlowId) {
            $res['RelatedFlowId'] = $this->relatedFlowId;
        }
        if (null !== $this->repeatInterval) {
            $res['RepeatInterval'] = $this->repeatInterval;
        }
        if (null !== $this->repeatability) {
            $res['Repeatability'] = $this->repeatability;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskRerunTime) {
            $res['TaskRerunTime'] = $this->taskRerunTime;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BeginRunningTime'])) {
            $model->beginRunningTime = $map['BeginRunningTime'];
        }
        if (isset($map['BeginWaitResTime'])) {
            $model->beginWaitResTime = $map['BeginWaitResTime'];
        }
        if (isset($map['BeginWaitTimeTime'])) {
            $model->beginWaitTimeTime = $map['BeginWaitTimeTime'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['Connection'])) {
            $model->connection = $map['Connection'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['CycTime'])) {
            $model->cycTime = $map['CycTime'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['DagType'])) {
            $model->dagType = $map['DagType'];
        }
        if (isset($map['DqcDescription'])) {
            $model->dqcDescription = $map['DqcDescription'];
        }
        if (isset($map['DqcType'])) {
            $model->dqcType = $map['DqcType'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ParamValues'])) {
            $model->paramValues = $map['ParamValues'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RelatedFlowId'])) {
            $model->relatedFlowId = $map['RelatedFlowId'];
        }
        if (isset($map['RepeatInterval'])) {
            $model->repeatInterval = $map['RepeatInterval'];
        }
        if (isset($map['Repeatability'])) {
            $model->repeatability = $map['Repeatability'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskRerunTime'])) {
            $model->taskRerunTime = $map['TaskRerunTime'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
