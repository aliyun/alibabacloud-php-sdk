<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessResponseBody;

use AlibabaCloud\Dara\Model;

class processes extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $detailTaskReadyCount;

    /**
     * @var int
     */
    public $detailTaskTotalCount;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $finishCount;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskSource;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'createTime' => 'CreateTime',
        'detailTaskReadyCount' => 'DetailTaskReadyCount',
        'detailTaskTotalCount' => 'DetailTaskTotalCount',
        'endTime' => 'EndTime',
        'finishCount' => 'FinishCount',
        'startTime' => 'StartTime',
        'statusCode' => 'StatusCode',
        'taskId' => 'TaskId',
        'taskSource' => 'TaskSource',
        'taskType' => 'TaskType',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->detailTaskReadyCount) {
            $res['DetailTaskReadyCount'] = $this->detailTaskReadyCount;
        }

        if (null !== $this->detailTaskTotalCount) {
            $res['DetailTaskTotalCount'] = $this->detailTaskTotalCount;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskSource) {
            $res['TaskSource'] = $this->taskSource;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DetailTaskReadyCount'])) {
            $model->detailTaskReadyCount = $map['DetailTaskReadyCount'];
        }

        if (isset($map['DetailTaskTotalCount'])) {
            $model->detailTaskTotalCount = $map['DetailTaskTotalCount'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskSource'])) {
            $model->taskSource = $map['TaskSource'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
