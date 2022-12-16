<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponseBody\data\blockInstance;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponseBody\data\lastInstance;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @example 1553443200000
     *
     * @var int
     */
    public $bizdate;

    /**
     * @var blockInstance
     */
    public $blockInstance;

    /**
     * @example 1200
     *
     * @var float
     */
    public $buffer;

    /**
     * @example 1553443200000
     *
     * @var int
     */
    public $endCast;

    /**
     * @example 1553443200000
     *
     * @var int
     */
    public $expTime;

    /**
     * @example UNFINISH
     *
     * @var string
     */
    public $finishStatus;

    /**
     * @example 1553443200000
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
     * @var lastInstance
     */
    public $lastInstance;

    /**
     * @example 9527952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 1553443200000
     *
     * @var int
     */
    public $slaTime;

    /**
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
