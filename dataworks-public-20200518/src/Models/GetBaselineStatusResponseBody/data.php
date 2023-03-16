<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponseBody\data\blockInstance;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponseBody\data\lastInstance;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the baseline.
     *
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The name of the baseline.
     *
     * @example Baseline name
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description The data timestamp of the baseline instance.
     *
     * @example 1553443200000
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description The information about the key instance.
     *
     * @var blockInstance
     */
    public $blockInstance;

    /**
     * @description The margin of the baseline instance. Unit: seconds.
     *
     * @example 1200
     *
     * @var float
     */
    public $buffer;

    /**
     * @description The timestamp of the predicted time when the baseline instance finished running.
     *
     * @example 1553443200000
     *
     * @var int
     */
    public $endCast;

    /**
     * @description The timestamp of the alerting time of the baseline instance.
     *
     * @example 1553443200000
     *
     * @var int
     */
    public $expTime;

    /**
     * @description The status of the baseline instance. Valid values: UNFINISH and FINISH. The value UNFINISH indicates that the baseline instance is still running. The value FINISH indicates that the baseline instance finishes running.
     *
     * @example UNFINISH
     *
     * @var string
     */
    public $finishStatus;

    /**
     * @description The timestamp of the actual time when the baseline instance finished running. This parameter is returned if the value of the FinishStatus parameter is FINISH.
     *
     * @example 1553443200000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The ID of the scheduling cycle of the baseline instance. For a baseline instance that is scheduled by day, the value of this parameter is 1. For a baseline instance that is scheduled by hour, the value of this parameter ranges from 1 to 24.
     *
     * @example 1
     *
     * @var int
     */
    public $inGroupId;

    /**
     * @description The information about the last generated instance.
     *
     * @var lastInstance
     */
    public $lastInstance;

    /**
     * @description The ID of the Alibaba Cloud account used by the baseline owner. Multiple IDs are separated by commas (,).
     *
     * @example 9527952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The priority of the baseline. Valid values: 1, 2, 5, 7, and 8.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the workspace to which the baseline belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The timestamp of the committed completion time of the baseline instance.
     *
     * @example 1553443200000
     *
     * @var int
     */
    public $slaTime;

    /**
     * @description The status of the baseline. Valid values: ERROR, SAFE, DANGEROUS, and OVER. The value ERROR indicates that no nodes are associated with the baseline, or all nodes associated with the baseline are suspended. The value SAFE indicates that nodes finish running before the alerting time. The value DANGEROUS indicates that nodes are still running after the alerting time but before the committed completion time. The value OVER indicates that nodes are still running after the committed completion time.
     *
     * @example SAFE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'baselineId'    => 'BaselineId',
        'baselineName'  => 'BaselineName',
        'bizdate'       => 'Bizdate',
        'blockInstance' => 'BlockInstance',
        'buffer'        => 'Buffer',
        'endCast'       => 'EndCast',
        'expTime'       => 'ExpTime',
        'finishStatus'  => 'FinishStatus',
        'finishTime'    => 'FinishTime',
        'inGroupId'     => 'InGroupId',
        'lastInstance'  => 'LastInstance',
        'owner'         => 'Owner',
        'priority'      => 'Priority',
        'projectId'     => 'ProjectId',
        'slaTime'       => 'SlaTime',
        'status'        => 'Status',
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
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->blockInstance) {
            $res['BlockInstance'] = null !== $this->blockInstance ? $this->blockInstance->toMap() : null;
        }
        if (null !== $this->buffer) {
            $res['Buffer'] = $this->buffer;
        }
        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }
        if (null !== $this->expTime) {
            $res['ExpTime'] = $this->expTime;
        }
        if (null !== $this->finishStatus) {
            $res['FinishStatus'] = $this->finishStatus;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->lastInstance) {
            $res['LastInstance'] = null !== $this->lastInstance ? $this->lastInstance->toMap() : null;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->slaTime) {
            $res['SlaTime'] = $this->slaTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['BlockInstance'])) {
            $model->blockInstance = blockInstance::fromMap($map['BlockInstance']);
        }
        if (isset($map['Buffer'])) {
            $model->buffer = $map['Buffer'];
        }
        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }
        if (isset($map['ExpTime'])) {
            $model->expTime = $map['ExpTime'];
        }
        if (isset($map['FinishStatus'])) {
            $model->finishStatus = $map['FinishStatus'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['LastInstance'])) {
            $model->lastInstance = lastInstance::fromMap($map['LastInstance']);
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SlaTime'])) {
            $model->slaTime = $map['SlaTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
