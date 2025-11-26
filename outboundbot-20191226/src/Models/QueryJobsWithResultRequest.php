<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class QueryJobsWithResultRequest extends Model
{
    /**
     * @var int
     */
    public $endActualTimeFilter;

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
    public $jobFailureReasonsFilter;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobStatusFilter;

    /**
     * @var string[]
     */
    public $labelsJson;

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
     * @var int
     */
    public $startActualTimeFilter;

    /**
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
        'labelsJson' => 'LabelsJson',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryText' => 'QueryText',
        'startActualTimeFilter' => 'StartActualTimeFilter',
        'taskStatusFilter' => 'TaskStatusFilter',
    ];

    public function validate()
    {
        if (\is_array($this->labelsJson)) {
            Model::validateArray($this->labelsJson);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->labelsJson) {
            if (\is_array($this->labelsJson)) {
                $res['LabelsJson'] = [];
                $n1 = 0;
                foreach ($this->labelsJson as $item1) {
                    $res['LabelsJson'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['LabelsJson'])) {
            if (!empty($map['LabelsJson'])) {
                $model->labelsJson = [];
                $n1 = 0;
                foreach ($map['LabelsJson'] as $item1) {
                    $model->labelsJson[$n1] = $item1;
                    ++$n1;
                }
            }
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
