<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessResponseBody;

use AlibabaCloud\Tea\Model;

class processes extends Model
{
    /**
     * @example 1674388824000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1705467559000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 197
     *
     * @var int
     */
    public $finishCount;

    /**
     * @example 1705457102000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $statusCode;

    /**
     * @example 3d7a1b68-599f-4e16-9b45-e920a183b***
     *
     * @var string
     */
    public $taskId;

    /**
     * @example CHECK_POLICY
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 337
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'endTime'     => 'EndTime',
        'finishCount' => 'FinishCount',
        'startTime'   => 'StartTime',
        'statusCode'  => 'StatusCode',
        'taskId'      => 'TaskId',
        'taskType'    => 'TaskType',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
