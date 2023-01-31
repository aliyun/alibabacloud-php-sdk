<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class QueryJobsWithResultRequest extends Model
{
    /**
     * @var bool
     */
    public $hasAnsweredFilter;

    /**
     * @var bool
     */
    public $hasHangUpByRejectionFilter;

    /**
     * @var bool
     */
    public $hasReachedEndOfFlowFilter;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobStatusFilter;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryText;

    /**
     * @var string
     */
    public $taskStatusFilter;
    protected $_name = [
        'hasAnsweredFilter'          => 'HasAnsweredFilter',
        'hasHangUpByRejectionFilter' => 'HasHangUpByRejectionFilter',
        'hasReachedEndOfFlowFilter'  => 'HasReachedEndOfFlowFilter',
        'instanceId'                 => 'InstanceId',
        'jobGroupId'                 => 'JobGroupId',
        'jobStatusFilter'            => 'JobStatusFilter',
        'pageNumber'                 => 'PageNumber',
        'pageSize'                   => 'PageSize',
        'queryText'                  => 'QueryText',
        'taskStatusFilter'           => 'TaskStatusFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['TaskStatusFilter'])) {
            $model->taskStatusFilter = $map['TaskStatusFilter'];
        }

        return $model;
    }
}
