<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListManualDagInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The time when the node started to run. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1605178414676
     *
     * @var int
     */
    public $beginRunningTime;

    /**
     * @description The time when the node started to wait for resources. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1605178414676
     *
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @description The time when the node started to wait to be scheduled. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1605178414676
     *
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @description The data timestamp of the instance. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. In most cases, the value indicates one day before the time when the node was run.
     *
     * @example 1605178414676
     *
     * @var int
     */
    public $bizDate;

    /**
     * @description The time when the node was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1605178414676
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The name of the account used to run the instance. For example, if an account named Test was used to run the instance to backfill data, the value of this parameter is Test.
     *
     * @example Test
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The time when the node was scheduled to run. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1605178414676
     *
     * @var int
     */
    public $cycTime;

    /**
     * @description The ID of the DAG for the manually triggered workflow.
     *
     * @example 350850491
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The identifier of the manually triggered workflow.
     *
     * @example 5
     *
     * @var string
     */
    public $dagType;

    /**
     * @description The time when the node stopped running. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1605178414676
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The ID of the instance in the manually triggered workflow.
     *
     * @example 11726873619
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The time when the node was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1605178414676
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The ID of the node in the manually triggered workflow.
     *
     * @example 37851
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @example test2
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The parameters related to the instance.
     *
     * @example xxx=yyy
     *
     * @var string
     */
    public $paramValues;

    /**
     * @description The status of the node. Valid values:
     *
     *   NOT_RUN: The node is not run.
     *   WAIT_TIME: The node is waiting for its scheduled time to arrive.
     *   WAIT_RESOURCE: The node is waiting for resources.
     *   RUNNING: The node is running.
     *   CHECKING: Data quality is being checked for the node.
     *   CHECKING_CONDITION: Branch conditions are being checked for the node.
     *   FAILURE: The node fails to run.
     *   SUCCESS: The node is run as expected.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The scheduling type of the node. Valid values:
     *
     *   NORMAL(0): The node is an auto triggered node. It is run on a regular basis.
     *   MANUAL(1): The node is a manually triggered node. It is not run on a regular basis.
     *   PAUSE(2): The node is a frozen node. The scheduling system still runs the node on a regular basis but sets it to Failed when the scheduling system starts to run the node.
     *   SKIP(3): The node is a dry-run node. The scheduling system still runs the node on a regular basis but sets it to Succeeded when the scheduling system starts to run the node.
     *   SKIP_UNCHOOSE(4): The node is an unselected node in a temporary workflow. This type of node exists only in temporary workflows. The scheduling system sets the node to Succeeded when the scheduling system starts to run the node.
     *   SKIP_CYCLE(5): The node is a node that is scheduled by week or month and is waiting for its scheduled time. The scheduling system still runs the node on a regular basis but sets it to Succeeded when the scheduling system starts to run the node.
     *   CONDITION_UNCHOOSE(6): The node is not selected by its ancestor branch node and is run as a dry-run node.
     *   REALTIME_DEPRECATED(7): The node has instances generated in real time but deprecated. The scheduling system directly sets the node to Succeeded.
     *
     * @example MANUAL
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'beginRunningTime'  => 'BeginRunningTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'bizDate'           => 'BizDate',
        'createTime'        => 'CreateTime',
        'createUser'        => 'CreateUser',
        'cycTime'           => 'CycTime',
        'dagId'             => 'DagId',
        'dagType'           => 'DagType',
        'finishTime'        => 'FinishTime',
        'instanceId'        => 'InstanceId',
        'modifyTime'        => 'ModifyTime',
        'nodeId'            => 'NodeId',
        'nodeName'          => 'NodeName',
        'paramValues'       => 'ParamValues',
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
