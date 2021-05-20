<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesResponse\data;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $dagId;

    /**
     * @var string
     */
    public $dagType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $bizdate;

    /**
     * @var int
     */
    public $cycTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @var int
     */
    public $beginRunningTime;

    /**
     * @var string
     */
    public $paramValues;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var bool
     */
    public $repeatability;

    /**
     * @var int
     */
    public $repeatInterval;

    /**
     * @var string
     */
    public $connection;

    /**
     * @var int
     */
    public $dqcType;

    /**
     * @var string
     */
    public $dqcDescription;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $relatedFlowId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $taskRerunTime;
    protected $_name = [
        'nodeId'            => 'NodeId',
        'instanceId'        => 'InstanceId',
        'dagId'             => 'DagId',
        'dagType'           => 'DagType',
        'status'            => 'Status',
        'bizdate'           => 'Bizdate',
        'cycTime'           => 'CycTime',
        'createTime'        => 'CreateTime',
        'modifyTime'        => 'ModifyTime',
        'nodeName'          => 'NodeName',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginRunningTime'  => 'BeginRunningTime',
        'paramValues'       => 'ParamValues',
        'finishTime'        => 'FinishTime',
        'priority'          => 'Priority',
        'baselineId'        => 'BaselineId',
        'repeatability'     => 'Repeatability',
        'repeatInterval'    => 'RepeatInterval',
        'connection'        => 'Connection',
        'dqcType'           => 'DqcType',
        'dqcDescription'    => 'DqcDescription',
        'errorMessage'      => 'ErrorMessage',
        'relatedFlowId'     => 'RelatedFlowId',
        'taskType'          => 'TaskType',
        'taskRerunTime'     => 'TaskRerunTime',
    ];

    public function validate()
    {
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('dagId', $this->dagId, true);
        Model::validateRequired('dagType', $this->dagType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
        Model::validateRequired('cycTime', $this->cycTime, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('beginWaitTimeTime', $this->beginWaitTimeTime, true);
        Model::validateRequired('beginWaitResTime', $this->beginWaitResTime, true);
        Model::validateRequired('beginRunningTime', $this->beginRunningTime, true);
        Model::validateRequired('paramValues', $this->paramValues, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('baselineId', $this->baselineId, true);
        Model::validateRequired('repeatability', $this->repeatability, true);
        Model::validateRequired('repeatInterval', $this->repeatInterval, true);
        Model::validateRequired('connection', $this->connection, true);
        Model::validateRequired('dqcType', $this->dqcType, true);
        Model::validateRequired('dqcDescription', $this->dqcDescription, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('relatedFlowId', $this->relatedFlowId, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('taskRerunTime', $this->taskRerunTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->dagType) {
            $res['DagType'] = $this->dagType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->cycTime) {
            $res['CycTime'] = $this->cycTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->beginWaitTimeTime) {
            $res['BeginWaitTimeTime'] = $this->beginWaitTimeTime;
        }
        if (null !== $this->beginWaitResTime) {
            $res['BeginWaitResTime'] = $this->beginWaitResTime;
        }
        if (null !== $this->beginRunningTime) {
            $res['BeginRunningTime'] = $this->beginRunningTime;
        }
        if (null !== $this->paramValues) {
            $res['ParamValues'] = $this->paramValues;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->repeatability) {
            $res['Repeatability'] = $this->repeatability;
        }
        if (null !== $this->repeatInterval) {
            $res['RepeatInterval'] = $this->repeatInterval;
        }
        if (null !== $this->connection) {
            $res['Connection'] = $this->connection;
        }
        if (null !== $this->dqcType) {
            $res['DqcType'] = $this->dqcType;
        }
        if (null !== $this->dqcDescription) {
            $res['DqcDescription'] = $this->dqcDescription;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->relatedFlowId) {
            $res['RelatedFlowId'] = $this->relatedFlowId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskRerunTime) {
            $res['TaskRerunTime'] = $this->taskRerunTime;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['DagType'])) {
            $model->dagType = $map['DagType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['CycTime'])) {
            $model->cycTime = $map['CycTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['BeginWaitTimeTime'])) {
            $model->beginWaitTimeTime = $map['BeginWaitTimeTime'];
        }
        if (isset($map['BeginWaitResTime'])) {
            $model->beginWaitResTime = $map['BeginWaitResTime'];
        }
        if (isset($map['BeginRunningTime'])) {
            $model->beginRunningTime = $map['BeginRunningTime'];
        }
        if (isset($map['ParamValues'])) {
            $model->paramValues = $map['ParamValues'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['Repeatability'])) {
            $model->repeatability = $map['Repeatability'];
        }
        if (isset($map['RepeatInterval'])) {
            $model->repeatInterval = $map['RepeatInterval'];
        }
        if (isset($map['Connection'])) {
            $model->connection = $map['Connection'];
        }
        if (isset($map['DqcType'])) {
            $model->dqcType = $map['DqcType'];
        }
        if (isset($map['DqcDescription'])) {
            $model->dqcDescription = $map['DqcDescription'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RelatedFlowId'])) {
            $model->relatedFlowId = $map['RelatedFlowId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskRerunTime'])) {
            $model->taskRerunTime = $map['TaskRerunTime'];
        }

        return $model;
    }
}
