<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ListTasksRequest extends Model
{
    /**
     * @var TimeRange
     */
    public $endTimeRange;

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
     * @var bool
     */
    public $requestDefinition;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var TimeRange
     */
    public $startTimeRange;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tagSelector;

    /**
     * @var string[]
     */
    public $taskTypes;
    protected $_name = [
        'endTimeRange' => 'EndTimeRange',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'projectName' => 'ProjectName',
        'requestDefinition' => 'RequestDefinition',
        'sort' => 'Sort',
        'startTimeRange' => 'StartTimeRange',
        'status' => 'Status',
        'tagSelector' => 'TagSelector',
        'taskTypes' => 'TaskTypes',
    ];

    public function validate()
    {
        if (null !== $this->endTimeRange) {
            $this->endTimeRange->validate();
        }
        if (null !== $this->startTimeRange) {
            $this->startTimeRange->validate();
        }
        if (\is_array($this->taskTypes)) {
            Model::validateArray($this->taskTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTimeRange) {
            $res['EndTimeRange'] = null !== $this->endTimeRange ? $this->endTimeRange->toArray($noStream) : $this->endTimeRange;
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
            $res['StartTimeRange'] = null !== $this->startTimeRange ? $this->startTimeRange->toArray($noStream) : $this->startTimeRange;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tagSelector) {
            $res['TagSelector'] = $this->tagSelector;
        }

        if (null !== $this->taskTypes) {
            if (\is_array($this->taskTypes)) {
                $res['TaskTypes'] = [];
                $n1 = 0;
                foreach ($this->taskTypes as $item1) {
                    $res['TaskTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->taskTypes = [];
                $n1 = 0;
                foreach ($map['TaskTypes'] as $item1) {
                    $model->taskTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
