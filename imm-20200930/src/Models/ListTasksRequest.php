<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListTasksRequest extends Model
{
    /**
     * @var TimeRange
     */
    public $endTimeRange;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @example True
     *
     * @var bool
     */
    public $requestDefinition;

    /**
     * @example TaskId
     *
     * @var string
     */
    public $sort;

    /**
     * @var TimeRange
     */
    public $startTimeRange;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @example test=val1
     *
     * @var string
     */
    public $tagSelector;

    /**
     * @var string[]
     */
    public $taskTypes;
    protected $_name = [
        'endTimeRange'      => 'EndTimeRange',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'order'             => 'Order',
        'projectName'       => 'ProjectName',
        'requestDefinition' => 'RequestDefinition',
        'sort'              => 'Sort',
        'startTimeRange'    => 'StartTimeRange',
        'status'            => 'Status',
        'tagSelector'       => 'TagSelector',
        'taskTypes'         => 'TaskTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimeRange) {
            $res['EndTimeRange'] = null !== $this->endTimeRange ? $this->endTimeRange->toMap() : null;
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
        if (null !== $this->requestDefinition) {
            $res['RequestDefinition'] = $this->requestDefinition;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->startTimeRange) {
            $res['StartTimeRange'] = null !== $this->startTimeRange ? $this->startTimeRange->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagSelector) {
            $res['TagSelector'] = $this->tagSelector;
        }
        if (null !== $this->taskTypes) {
            $res['TaskTypes'] = $this->taskTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimeRange'])) {
            $model->endTimeRange = TimeRange::fromMap($map['EndTimeRange']);
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
        if (isset($map['RequestDefinition'])) {
            $model->requestDefinition = $map['RequestDefinition'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['StartTimeRange'])) {
            $model->startTimeRange = TimeRange::fromMap($map['StartTimeRange']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagSelector'])) {
            $model->tagSelector = $map['TagSelector'];
        }
        if (isset($map['TaskTypes'])) {
            if (!empty($map['TaskTypes'])) {
                $model->taskTypes = $map['TaskTypes'];
            }
        }

        return $model;
    }
}
