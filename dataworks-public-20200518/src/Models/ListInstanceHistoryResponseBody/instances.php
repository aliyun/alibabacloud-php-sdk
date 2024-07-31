<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstanceHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The time when the instance started to be run. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
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
     * @description The time when the instance was generated.
     *
     * @example 1590416703313
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time when the node started to be run. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1590422400000
     *
     * @var int
     */
    public $cycTime;

    /**
     * @description The workflow ID.
     *
     * @example 33845
     *
     * @var int
     */
    public $dagId;

    /**
     * @description Indicates whether the instance is associated with a monitoring rule in Data Quality. Valid values:
     *
     *   0: The instance is associated with a monitoring rule in Data Quality.
     *   1: The instance is not associated with a monitoring rule in Data Quality.
     *
     * @example 1
     *
     * @var string
     */
    public $dagType;

    /**
     * @description The error message. This parameter is deprecated. You can call the GetInstanceLog operation to query the error information related to the node.
     *
     * @example error message
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The time when the running of the node was complete. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1590416703313
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The historical record number of the instance.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceHistoryId;

    /**
     * @description The instance ID.
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
     * @description The node ID.
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
     * @description The status of the node that generates the instance. Valid values:
     *
     *   NOT_RUN: The node is not run.
     *   WAIT_TIME: The node is waiting for the scheduling time to arrive.
     *   WAIT_RESOURCE: The node is waiting for resources.
     *   RUNNING: The node is running.
     *   CHECKING: Data quality is being checked for the node.
     *   CHECKING_CONDITION: Branch conditions are being checked for the node.
     *   FAILURE: The node fails to be run.
     *   SUCCESS: The node is successfully run.
     *
     * @example NOT_RUN
     *
     * @var string
     */
    public $status;

    /**
     * @description The scheduling type of the node. Valid values:
     *
     *   NORMAL(0): The node is an auto triggered node. The scheduling system regularly runs the node.
     *   MANUAL(1): The node is a manually triggered node. The scheduling system does not regularly run the node.
     *   PAUSE(2): The node is a frozen node. The scheduling system regularly runs the node but sets the status of the node to failed when the scheduling system starts to run the node.
     *   SKIP(3): The node is a dry-run node. The scheduling system regularly runs the node but sets the status of the node to successful when the scheduling system starts to run the node.
     *   SKIP_UNCHOOSE(4): The node is an unselected node in a temporary workflow. This type of node exists only in temporary workflows. The scheduling system sets the status of the node to successful when the scheduling system starts to run the node.
     *   SKIP_CYCLE(5): The node is a node that is scheduled by the week or month and is waiting for the scheduling time to arrive. The scheduling system regularly runs the node but sets the status of the node to successful when the scheduling system starts to run the node.
     *   CONDITION_UNCHOOSE(6): The node is not selected by its ancestor branch node and is run as a dry-run node.
     *   REALTIME_DEPRECATED(7): The node has instances that are generated in real time but deprecated. The scheduling system sets the status of the node to successful.
     *
     * @example NORMAL(0)
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'beginRunningTime'  => 'BeginRunningTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'bizdate'           => 'Bizdate',
        'createTime'        => 'CreateTime',
        'cycTime'           => 'CycTime',
        'dagId'             => 'DagId',
        'dagType'           => 'DagType',
        'errorMessage'      => 'ErrorMessage',
        'finishTime'        => 'FinishTime',
        'instanceHistoryId' => 'InstanceHistoryId',
        'instanceId'        => 'InstanceId',
        'modifyTime'        => 'ModifyTime',
        'nodeId'            => 'NodeId',
        'nodeName'          => 'NodeName',
        'status'            => 'Status',
        'taskType'          => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->instanceHistoryId) {
            $res['InstanceHistoryId'] = $this->instanceHistoryId;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InstanceHistoryId'])) {
            $model->instanceHistoryId = $map['InstanceHistoryId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
