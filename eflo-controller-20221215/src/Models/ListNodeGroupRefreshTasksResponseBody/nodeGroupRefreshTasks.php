<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNodeGroupRefreshTasksResponseBody;

use AlibabaCloud\Dara\Model;

class nodeGroupRefreshTasks extends Model
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
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $nodeGroupRefreshTaskId;

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
        'nodeGroupId' => 'NodeGroupId',
        'nodeGroupRefreshTaskId' => 'NodeGroupRefreshTaskId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'totalNodeCount' => 'TotalNodeCount',
    ];

    public function validate()
    {
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

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeGroupRefreshTaskId) {
            $res['NodeGroupRefreshTaskId'] = $this->nodeGroupRefreshTaskId;
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

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeGroupRefreshTaskId'])) {
            $model->nodeGroupRefreshTaskId = $map['NodeGroupRefreshTaskId'];
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
