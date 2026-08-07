<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListCrawlerRunsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;

class crawlerRuns extends Model
{
    /**
     * @var float
     */
    public $duration;

    /**
     * @var int
     */
    public $finishedTime;

    /**
     * @var int
     */
    public $startedTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskInstanceId;

    /**
     * @var int
     */
    public $totalTableCount;
    protected $_name = [
        'duration' => 'Duration',
        'finishedTime' => 'FinishedTime',
        'startedTime' => 'StartedTime',
        'status' => 'Status',
        'taskInstanceId' => 'TaskInstanceId',
        'totalTableCount' => 'TotalTableCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }

        if (null !== $this->startedTime) {
            $res['StartedTime'] = $this->startedTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
        }

        if (null !== $this->totalTableCount) {
            $res['TotalTableCount'] = $this->totalTableCount;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }

        if (isset($map['StartedTime'])) {
            $model->startedTime = $map['StartedTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }

        if (isset($map['TotalTableCount'])) {
            $model->totalTableCount = $map['TotalTableCount'];
        }

        return $model;
    }
}
