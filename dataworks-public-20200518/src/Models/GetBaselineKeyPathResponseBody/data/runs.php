<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data;

use AlibabaCloud\Tea\Model;

class runs extends Model
{
    /**
     * @example 1553531402000
     *
     * @var int
     */
    public $absTime;

    /**
     * @example 1553531686000
     *
     * @var int
     */
    public $beginCast;

    /**
     * @example 1553531401000
     *
     * @var int
     */
    public $beginRunningTime;

    /**
     * @example 1553531401000
     *
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @example 1553531400000
     *
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @example 1553443200000
     *
     * @var int
     */
    public $bizdate;

    /**
     * @example 1553443200000
     *
     * @var int
     */
    public $cycTime;

    /**
     * @example 1553531687000
     *
     * @var int
     */
    public $endCast;

    /**
     * @example 1553531401000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $inGroupId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @example 9527952****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'absTime'           => 'AbsTime',
        'beginCast'         => 'BeginCast',
        'beginRunningTime'  => 'BeginRunningTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'bizdate'           => 'Bizdate',
        'cycTime'           => 'CycTime',
        'endCast'           => 'EndCast',
        'finishTime'        => 'FinishTime',
        'inGroupId'         => 'InGroupId',
        'instanceId'        => 'InstanceId',
        'nodeId'            => 'NodeId',
        'nodeName'          => 'NodeName',
        'owner'             => 'Owner',
        'projectId'         => 'ProjectId',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->absTime) {
            $res['AbsTime'] = $this->absTime;
        }
        if (null !== $this->beginCast) {
            $res['BeginCast'] = $this->beginCast;
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
        if (null !== $this->cycTime) {
            $res['CycTime'] = $this->cycTime;
        }
        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AbsTime'])) {
            $model->absTime = $map['AbsTime'];
        }
        if (isset($map['BeginCast'])) {
            $model->beginCast = $map['BeginCast'];
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
        if (isset($map['CycTime'])) {
            $model->cycTime = $map['CycTime'];
        }
        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
