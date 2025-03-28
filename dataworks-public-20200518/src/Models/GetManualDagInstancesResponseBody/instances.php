<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetManualDagInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var int
     */
    public $beginRunningTime;

    /**
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @var int
     */
    public $bizDate;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var int
     */
    public $cycTime;

    /**
     * @var int
     */
    public $dagId;

    /**
     * @var string
     */
    public $dagType;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $paramValues;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'beginRunningTime' => 'BeginRunningTime',
        'beginWaitResTime' => 'BeginWaitResTime',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'bizDate' => 'BizDate',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'cycTime' => 'CycTime',
        'dagId' => 'DagId',
        'dagType' => 'DagType',
        'finishTime' => 'FinishTime',
        'instanceId' => 'InstanceId',
        'modifyTime' => 'ModifyTime',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'paramValues' => 'ParamValues',
        'status' => 'Status',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginRunningTime) {
            $res['BeginRunningTime'] = $this->beginRunningTime;
        }

        if (null !== $this->beginWaitResTime) {
            $res['BeginWaitResTime'] = $this->beginWaitResTime;
        }

        if (null !== $this->beginWaitTimeTime) {
            $res['BeginWaitTimeTime'] = $this->beginWaitTimeTime;
        }

        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['BeginRunningTime'])) {
            $model->beginRunningTime = $map['BeginRunningTime'];
        }

        if (isset($map['BeginWaitResTime'])) {
            $model->beginWaitResTime = $map['BeginWaitResTime'];
        }

        if (isset($map['BeginWaitTimeTime'])) {
            $model->beginWaitTimeTime = $map['BeginWaitTimeTime'];
        }

        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
