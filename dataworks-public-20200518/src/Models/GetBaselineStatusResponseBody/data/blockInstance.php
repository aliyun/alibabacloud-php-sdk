<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class blockInstance extends Model
{
    /**
     * @description The timestamp of the predicted time when the instance finished running.
     *
     * @example 1553443200000
     *
     * @var int
     */
    public $endCast;

    /**
     * @description The timestamp of the actual time when the instance finished running.
     *
     * @example 1553443200000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The ID of the instance.
     *
     * @example 12345
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The ID of the node.
     *
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @example Node name
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The ID of the Alibaba Cloud account used by the node owner.
     *
     * @example 9527952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the workspace to which the node belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The status of the instance. Valid values: NOT_RUN, WAIT_TIME, WAIT_RESOURCE, RUNNING, CHECKING, CHECKING_CONDITION, FAILURE, and SUCCESS. The value NOT_RUN indicates that the instance is not run. The value WAIT_TIME indicates that the instance is waiting to be run. The value WAIT_RESOURCE indicates that the instance is waiting for resources. The value RUNNING indicates that the instance is running. The value CHECKING indicates that data quality is being checked for the instance. The value CHECKING_CONDITION indicates that branch conditions are being checked for the instance. The value FAILURE indicates that the instance fails to run. The value SUCCESS indicates that the instance is run.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endCast'    => 'EndCast',
        'finishTime' => 'FinishTime',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'nodeName'   => 'NodeName',
        'owner'      => 'Owner',
        'projectId'  => 'ProjectId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
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
     * @return blockInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
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
