<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListTasksRequest extends Model
{
    /**
     * @description The range of task end time. You can specify this parameter to filter tasks that end within the specified range.
     *
     * @var TimeRange
     */
    public $endTimeRange;

    /**
     * @description The maximum number of results to return. Valid value range: (0, 100]. Default value: 100.
     *
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token.
     *
     * >  Leave this parameter empty in your first call to the operation.
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The sort order. Valid values:
     *
     *   ASC: sorts the results in ascending order. This is the default sort order.
     *   DES: sorts the results in descending order.
     *
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description Specifies whether to return request parameters in the initial request to create the task. Default value: False.
     *
     * @example True
     *
     * @var bool
     */
    public $requestDefinition;

    /**
     * @description The field used to sort the results by. Valid values:
     *
     *   TaskId: sorts the results by task ID. This is the default sort field.
     *   StartTime: sorts the results by task start time.
     *   StartTime: sorts the results by task end time.
     *
     * @example TaskId
     *
     * @var string
     */
    public $sort;

    /**
     * @description The range of task start time. You can specify this parameter to filter tasks that start within the specified range.
     *
     * @var TimeRange
     */
    public $startTimeRange;

    /**
     * @description The task status. Valid values:
     *
     *   Running: The task is running.
     *   Succeeded: The task is successful.
     *   Failed: The task failed.
     *
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @description The custom tags of tasks.
     *
     * @example test=val1
     *
     * @var string
     */
    public $tagSelector;

    /**
     * @description The task types.
     *
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
