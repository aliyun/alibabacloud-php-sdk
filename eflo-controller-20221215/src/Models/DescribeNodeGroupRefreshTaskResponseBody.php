<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeGroupRefreshTaskResponseBody\nodes;

class DescribeNodeGroupRefreshTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var int
     */
    public $finishedCount;

    /**
     * @var string
     */
    public $maxDisruptiveAction;

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
    public $nodeGroupId;

    /**
     * @var string
     */
    public $nodeGroupRefreshTaskId;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalNodeCount;
    protected $_name = [
        'endTime' => 'EndTime',
        'failedCount' => 'FailedCount',
        'finishedCount' => 'FinishedCount',
        'maxDisruptiveAction' => 'MaxDisruptiveAction',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeGroupId' => 'NodeGroupId',
        'nodeGroupRefreshTaskId' => 'NodeGroupRefreshTaskId',
        'nodes' => 'Nodes',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'totalNodeCount' => 'TotalNodeCount',
    ];

    public function validate()
    {
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->finishedCount) {
            $res['FinishedCount'] = $this->finishedCount;
        }

        if (null !== $this->maxDisruptiveAction) {
            $res['MaxDisruptiveAction'] = $this->maxDisruptiveAction;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeGroupRefreshTaskId) {
            $res['NodeGroupRefreshTaskId'] = $this->nodeGroupRefreshTaskId;
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalNodeCount) {
            $res['TotalNodeCount'] = $this->totalNodeCount;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['FinishedCount'])) {
            $model->finishedCount = $map['FinishedCount'];
        }

        if (isset($map['MaxDisruptiveAction'])) {
            $model->maxDisruptiveAction = $map['MaxDisruptiveAction'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeGroupRefreshTaskId'])) {
            $model->nodeGroupRefreshTaskId = $map['NodeGroupRefreshTaskId'];
        }

        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1] = nodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalNodeCount'])) {
            $model->totalNodeCount = $map['TotalNodeCount'];
        }

        return $model;
    }
}
