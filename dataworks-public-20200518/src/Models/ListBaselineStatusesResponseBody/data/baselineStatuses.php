<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesResponseBody\data;

use AlibabaCloud\Tea\Model;

class baselineStatuses extends Model
{
    /**
     * @var string
     */
    public $status;

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
    public $priority;

    /**
     * @var int
     */
    public $endCast;

    /**
     * @var int
     */
    public $inGroupId;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var string
     */
    public $finishStatus;

    /**
     * @var int
     */
    public $bizdate;

    /**
     * @var int
     */
    public $buffer;

    /**
     * @var int
     */
    public $slaTime;

    /**
     * @var int
     */
    public $expTime;
    protected $_name = [
        'status'       => 'Status',
        'owner'        => 'Owner',
        'finishTime'   => 'FinishTime',
        'projectId'    => 'ProjectId',
        'priority'     => 'Priority',
        'endCast'      => 'EndCast',
        'inGroupId'    => 'InGroupId',
        'baselineName' => 'BaselineName',
        'baselineId'   => 'BaselineId',
        'finishStatus' => 'FinishStatus',
        'bizdate'      => 'Bizdate',
        'buffer'       => 'Buffer',
        'slaTime'      => 'SlaTime',
        'expTime'      => 'ExpTime',
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
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->finishStatus) {
            $res['FinishStatus'] = $this->finishStatus;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->buffer) {
            $res['Buffer'] = $this->buffer;
        }
        if (null !== $this->slaTime) {
            $res['SlaTime'] = $this->slaTime;
        }
        if (null !== $this->expTime) {
            $res['ExpTime'] = $this->expTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['FinishStatus'])) {
            $model->finishStatus = $map['FinishStatus'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['Buffer'])) {
            $model->buffer = $map['Buffer'];
        }
        if (isset($map['SlaTime'])) {
            $model->slaTime = $map['SlaTime'];
        }
        if (isset($map['ExpTime'])) {
            $model->expTime = $map['ExpTime'];
        }

        return $model;
    }
}
