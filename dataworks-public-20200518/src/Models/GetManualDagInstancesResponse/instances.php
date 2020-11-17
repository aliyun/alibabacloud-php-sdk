<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetManualDagInstancesResponse;

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
    public $bizDate;

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
    protected $_name = [
        'nodeId'            => 'NodeId',
        'instanceId'        => 'InstanceId',
        'dagId'             => 'DagId',
        'dagType'           => 'DagType',
        'status'            => 'Status',
        'bizDate'           => 'BizDate',
        'cycTime'           => 'CycTime',
        'createTime'        => 'CreateTime',
        'modifyTime'        => 'ModifyTime',
        'nodeName'          => 'NodeName',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginRunningTime'  => 'BeginRunningTime',
        'paramValues'       => 'ParamValues',
        'finishTime'        => 'FinishTime',
    ];

    public function validate()
    {
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('dagId', $this->dagId, true);
        Model::validateRequired('dagType', $this->dagType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('bizDate', $this->bizDate, true);
        Model::validateRequired('cycTime', $this->cycTime, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('beginWaitTimeTime', $this->beginWaitTimeTime, true);
        Model::validateRequired('beginWaitResTime', $this->beginWaitResTime, true);
        Model::validateRequired('beginRunningTime', $this->beginRunningTime, true);
        Model::validateRequired('paramValues', $this->paramValues, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
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
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
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

        return $model;
    }
}
