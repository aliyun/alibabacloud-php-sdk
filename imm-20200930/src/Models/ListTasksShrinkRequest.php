<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListTasksShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $endTimeRangeShrink;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $startTimeRangeShrink;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tagSelector;

    /**
     * @var string
     */
    public $taskTypesShrink;
    protected $_name = [
        'endTimeRangeShrink'   => 'EndTimeRange',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'order'                => 'Order',
        'projectName'          => 'ProjectName',
        'sort'                 => 'Sort',
        'startTimeRangeShrink' => 'StartTimeRange',
        'status'               => 'Status',
        'tagSelector'          => 'TagSelector',
        'taskTypesShrink'      => 'TaskTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimeRangeShrink) {
            $res['EndTimeRange'] = $this->endTimeRangeShrink;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->startTimeRangeShrink) {
            $res['StartTimeRange'] = $this->startTimeRangeShrink;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagSelector) {
            $res['TagSelector'] = $this->tagSelector;
        }
        if (null !== $this->taskTypesShrink) {
            $res['TaskTypes'] = $this->taskTypesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTasksShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimeRange'])) {
            $model->endTimeRangeShrink = $map['EndTimeRange'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['StartTimeRange'])) {
            $model->startTimeRangeShrink = $map['StartTimeRange'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagSelector'])) {
            $model->tagSelector = $map['TagSelector'];
        }
        if (isset($map['TaskTypes'])) {
            $model->taskTypesShrink = $map['TaskTypes'];
        }

        return $model;
    }
}
