<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $cycTime;

    /**
     * @var int
     */
    public $beginRunningTime;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $dagId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $paramValues;

    /**
     * @var string
     */
    public $connection;

    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var int
     */
    public $dqcType;

    /**
     * @var string
     */
    public $dagType;

    /**
     * @var int
     */
    public $taskRerunTime;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var bool
     */
    public $repeatability;

    /**
     * @var int
     */
    public $repeatInterval;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @var int
     */
    public $relatedFlowId;

    /**
     * @var int
     */
    public $bizdate;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @var string
     */
    public $dqcDescription;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'status'            => 'Status',
        'cycTime'           => 'CycTime',
        'beginRunningTime'  => 'BeginRunningTime',
        'finishTime'        => 'FinishTime',
        'errorMessage'      => 'ErrorMessage',
        'createTime'        => 'CreateTime',
        'dagId'             => 'DagId',
        'priority'          => 'Priority',
        'taskType'          => 'TaskType',
        'paramValues'       => 'ParamValues',
        'connection'        => 'Connection',
        'baselineId'        => 'BaselineId',
        'dqcType'           => 'DqcType',
        'dagType'           => 'DagType',
        'taskRerunTime'     => 'TaskRerunTime',
        'modifyTime'        => 'ModifyTime',
        'repeatability'     => 'Repeatability',
        'repeatInterval'    => 'RepeatInterval',
        'instanceId'        => 'InstanceId',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'relatedFlowId'     => 'RelatedFlowId',
        'bizdate'           => 'Bizdate',
        'nodeName'          => 'NodeName',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'dqcDescription'    => 'DqcDescription',
        'nodeId'            => 'NodeId',
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
        if (null !== $this->cycTime) {
            $res['CycTime'] = $this->cycTime;
        }
        if (null !== $this->beginRunningTime) {
            $res['BeginRunningTime'] = $this->beginRunningTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->paramValues) {
            $res['ParamValues'] = $this->paramValues;
        }
        if (null !== $this->connection) {
            $res['Connection'] = $this->connection;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->dqcType) {
            $res['DqcType'] = $this->dqcType;
        }
        if (null !== $this->dagType) {
            $res['DagType'] = $this->dagType;
        }
        if (null !== $this->taskRerunTime) {
            $res['TaskRerunTime'] = $this->taskRerunTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->repeatability) {
            $res['Repeatability'] = $this->repeatability;
        }
        if (null !== $this->repeatInterval) {
            $res['RepeatInterval'] = $this->repeatInterval;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->beginWaitResTime) {
            $res['BeginWaitResTime'] = $this->beginWaitResTime;
        }
        if (null !== $this->relatedFlowId) {
            $res['RelatedFlowId'] = $this->relatedFlowId;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->beginWaitTimeTime) {
            $res['BeginWaitTimeTime'] = $this->beginWaitTimeTime;
        }
        if (null !== $this->dqcDescription) {
            $res['DqcDescription'] = $this->dqcDescription;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CycTime'])) {
            $model->cycTime = $map['CycTime'];
        }
        if (isset($map['BeginRunningTime'])) {
            $model->beginRunningTime = $map['BeginRunningTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['ParamValues'])) {
            $model->paramValues = $map['ParamValues'];
        }
        if (isset($map['Connection'])) {
            $model->connection = $map['Connection'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['DqcType'])) {
            $model->dqcType = $map['DqcType'];
        }
        if (isset($map['DagType'])) {
            $model->dagType = $map['DagType'];
        }
        if (isset($map['TaskRerunTime'])) {
            $model->taskRerunTime = $map['TaskRerunTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Repeatability'])) {
            $model->repeatability = $map['Repeatability'];
        }
        if (isset($map['RepeatInterval'])) {
            $model->repeatInterval = $map['RepeatInterval'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['BeginWaitResTime'])) {
            $model->beginWaitResTime = $map['BeginWaitResTime'];
        }
        if (isset($map['RelatedFlowId'])) {
            $model->relatedFlowId = $map['RelatedFlowId'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['BeginWaitTimeTime'])) {
            $model->beginWaitTimeTime = $map['BeginWaitTimeTime'];
        }
        if (isset($map['DqcDescription'])) {
            $model->dqcDescription = $map['DqcDescription'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
