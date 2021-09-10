<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data;

use AlibabaCloud\Tea\Model;

class runs extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $absTime;

    /**
     * @var int
     */
    public $beginRunningTime;

    /**
     * @var int
     */
    public $cycTime;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $beginCast;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $endCast;

    /**
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @var int
     */
    public $inGroupId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $bizdate;

    /**
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'status'            => 'Status',
        'absTime'           => 'AbsTime',
        'beginRunningTime'  => 'BeginRunningTime',
        'cycTime'           => 'CycTime',
        'owner'             => 'Owner',
        'finishTime'        => 'FinishTime',
        'projectId'         => 'ProjectId',
        'beginCast'         => 'BeginCast',
        'instanceId'        => 'InstanceId',
        'endCast'           => 'EndCast',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'inGroupId'         => 'InGroupId',
        'nodeName'          => 'NodeName',
        'bizdate'           => 'Bizdate',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
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
        if (null !== $this->absTime) {
            $res['AbsTime'] = $this->absTime;
        }
        if (null !== $this->beginRunningTime) {
            $res['BeginRunningTime'] = $this->beginRunningTime;
        }
        if (null !== $this->cycTime) {
            $res['CycTime'] = $this->cycTime;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->beginCast) {
            $res['BeginCast'] = $this->beginCast;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }
        if (null !== $this->beginWaitResTime) {
            $res['BeginWaitResTime'] = $this->beginWaitResTime;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->beginWaitTimeTime) {
            $res['BeginWaitTimeTime'] = $this->beginWaitTimeTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AbsTime'])) {
            $model->absTime = $map['AbsTime'];
        }
        if (isset($map['BeginRunningTime'])) {
            $model->beginRunningTime = $map['BeginRunningTime'];
        }
        if (isset($map['CycTime'])) {
            $model->cycTime = $map['CycTime'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['BeginCast'])) {
            $model->beginCast = $map['BeginCast'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }
        if (isset($map['BeginWaitResTime'])) {
            $model->beginWaitResTime = $map['BeginWaitResTime'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['BeginWaitTimeTime'])) {
            $model->beginWaitTimeTime = $map['BeginWaitTimeTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
