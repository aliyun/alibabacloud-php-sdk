<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponse\data\blockInstance;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineStatusResponse\data\lastInstance;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $baselineName;

    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var int
     */
    public $bizdate;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $expTime;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var int
     */
    public $endCast;

    /**
     * @var int
     */
    public $slaTime;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var float
     */
    public $buffer;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $finishStatus;

    /**
     * @var int
     */
    public $inGroupId;

    /**
     * @var lastInstance
     */
    public $lastInstance;

    /**
     * @var blockInstance
     */
    public $blockInstance;
    protected $_name = [
        'baselineName'  => 'BaselineName',
        'baselineId'    => 'BaselineId',
        'bizdate'       => 'Bizdate',
        'owner'         => 'Owner',
        'expTime'       => 'ExpTime',
        'finishTime'    => 'FinishTime',
        'endCast'       => 'EndCast',
        'slaTime'       => 'SlaTime',
        'priority'      => 'Priority',
        'projectId'     => 'ProjectId',
        'buffer'        => 'Buffer',
        'status'        => 'Status',
        'finishStatus'  => 'FinishStatus',
        'inGroupId'     => 'InGroupId',
        'lastInstance'  => 'LastInstance',
        'blockInstance' => 'BlockInstance',
    ];

    public function validate()
    {
        Model::validateRequired('baselineName', $this->baselineName, true);
        Model::validateRequired('baselineId', $this->baselineId, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('expTime', $this->expTime, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
        Model::validateRequired('endCast', $this->endCast, true);
        Model::validateRequired('slaTime', $this->slaTime, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('buffer', $this->buffer, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('finishStatus', $this->finishStatus, true);
        Model::validateRequired('inGroupId', $this->inGroupId, true);
        Model::validateRequired('lastInstance', $this->lastInstance, true);
        Model::validateRequired('blockInstance', $this->blockInstance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->expTime) {
            $res['ExpTime'] = $this->expTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->endCast) {
            $res['EndCast'] = $this->endCast;
        }
        if (null !== $this->slaTime) {
            $res['SlaTime'] = $this->slaTime;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->buffer) {
            $res['Buffer'] = $this->buffer;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->finishStatus) {
            $res['FinishStatus'] = $this->finishStatus;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->lastInstance) {
            $res['LastInstance'] = null !== $this->lastInstance ? $this->lastInstance->toMap() : null;
        }
        if (null !== $this->blockInstance) {
            $res['BlockInstance'] = null !== $this->blockInstance ? $this->blockInstance->toMap() : null;
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
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ExpTime'])) {
            $model->expTime = $map['ExpTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['EndCast'])) {
            $model->endCast = $map['EndCast'];
        }
        if (isset($map['SlaTime'])) {
            $model->slaTime = $map['SlaTime'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Buffer'])) {
            $model->buffer = $map['Buffer'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FinishStatus'])) {
            $model->finishStatus = $map['FinishStatus'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['LastInstance'])) {
            $model->lastInstance = lastInstance::fromMap($map['LastInstance']);
        }
        if (isset($map['BlockInstance'])) {
            $model->blockInstance = blockInstance::fromMap($map['BlockInstance']);
        }

        return $model;
    }
}
