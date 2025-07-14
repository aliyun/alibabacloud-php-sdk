<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class QueryJobsWithResultRequest extends Model
{
    /**
     * @var int
     */
    public $endActualTimeFilter;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasAnsweredFilter;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasHangUpByRejectionFilter;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasReachedEndOfFlowFilter;

    /**
     * @description This parameter is required.
     *
     * @example 9d53cd72-4050-4419-8c17-acc0bf158147
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ["NoAnswer"]
     *
     * @var string
     */
    public $jobFailureReasonsFilter;

    /**
     * @description This parameter is required.
     *
     * @example ad16fc35-d824-4102-a606-2be51c1aa6dd
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $jobStatusFilter;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1882020****
     *
     * @var string
     */
    public $queryText;

    /**
     * @var int
     */
    public $startActualTimeFilter;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $taskStatusFilter;
    protected $_name = [
        'endActualTimeFilter' => 'EndActualTimeFilter',
        'hasAnsweredFilter' => 'HasAnsweredFilter',
        'hasHangUpByRejectionFilter' => 'HasHangUpByRejectionFilter',
        'hasReachedEndOfFlowFilter' => 'HasReachedEndOfFlowFilter',
        'instanceId' => 'InstanceId',
        'jobFailureReasonsFilter' => 'JobFailureReasonsFilter',
        'jobGroupId' => 'JobGroupId',
        'jobStatusFilter' => 'JobStatusFilter',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryText' => 'QueryText',
        'startActualTimeFilter' => 'StartActualTimeFilter',
        'taskStatusFilter' => 'TaskStatusFilter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endActualTimeFilter) {
            $res['EndActualTimeFilter'] = $this->endActualTimeFilter;
        }
        if (null !== $this->hasAnsweredFilter) {
            $res['HasAnsweredFilter'] = $this->hasAnsweredFilter;
        }
        if (null !== $this->hasHangUpByRejectionFilter) {
            $res['HasHangUpByRejectionFilter'] = $this->hasHangUpByRejectionFilter;
        }
        if (null !== $this->hasReachedEndOfFlowFilter) {
            $res['HasReachedEndOfFlowFilter'] = $this->hasReachedEndOfFlowFilter;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobFailureReasonsFilter) {
            $res['JobFailureReasonsFilter'] = $this->jobFailureReasonsFilter;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobStatusFilter) {
            $res['JobStatusFilter'] = $this->jobStatusFilter;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryText) {
            $res['QueryText'] = $this->queryText;
        }
        if (null !== $this->startActualTimeFilter) {
            $res['StartActualTimeFilter'] = $this->startActualTimeFilter;
        }
        if (null !== $this->taskStatusFilter) {
            $res['TaskStatusFilter'] = $this->taskStatusFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryJobsWithResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndActualTimeFilter'])) {
            $model->endActualTimeFilter = $map['EndActualTimeFilter'];
        }
        if (isset($map['HasAnsweredFilter'])) {
            $model->hasAnsweredFilter = $map['HasAnsweredFilter'];
        }
        if (isset($map['HasHangUpByRejectionFilter'])) {
            $model->hasHangUpByRejectionFilter = $map['HasHangUpByRejectionFilter'];
        }
        if (isset($map['HasReachedEndOfFlowFilter'])) {
            $model->hasReachedEndOfFlowFilter = $map['HasReachedEndOfFlowFilter'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobFailureReasonsFilter'])) {
            $model->jobFailureReasonsFilter = $map['JobFailureReasonsFilter'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobStatusFilter'])) {
            $model->jobStatusFilter = $map['JobStatusFilter'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryText'])) {
            $model->queryText = $map['QueryText'];
        }
        if (isset($map['StartActualTimeFilter'])) {
            $model->startActualTimeFilter = $map['StartActualTimeFilter'];
        }
        if (isset($map['TaskStatusFilter'])) {
            $model->taskStatusFilter = $map['TaskStatusFilter'];
        }

        return $model;
    }
}
