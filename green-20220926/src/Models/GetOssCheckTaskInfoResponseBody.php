<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckTaskInfoResponseBody\config;

class GetOssCheckTaskInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $buckets;

    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $finishNum;

    /**
     * @var bool
     */
    public $isInc;

    /**
     * @var string
     */
    public $lastExecuteDate;

    /**
     * @var int
     */
    public $mediaType;

    /**
     * @var string
     */
    public $nextExecuteDate;

    /**
     * @var int
     */
    public $objectNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $searchNum;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'buckets' => 'Buckets',
        'config' => 'Config',
        'endTime' => 'EndTime',
        'finishNum' => 'FinishNum',
        'isInc' => 'IsInc',
        'lastExecuteDate' => 'LastExecuteDate',
        'mediaType' => 'MediaType',
        'nextExecuteDate' => 'NextExecuteDate',
        'objectNum' => 'ObjectNum',
        'requestId' => 'RequestId',
        'searchNum' => 'SearchNum',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buckets) {
            $res['Buckets'] = $this->buckets;
        }

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->finishNum) {
            $res['FinishNum'] = $this->finishNum;
        }

        if (null !== $this->isInc) {
            $res['IsInc'] = $this->isInc;
        }

        if (null !== $this->lastExecuteDate) {
            $res['LastExecuteDate'] = $this->lastExecuteDate;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->nextExecuteDate) {
            $res['NextExecuteDate'] = $this->nextExecuteDate;
        }

        if (null !== $this->objectNum) {
            $res['ObjectNum'] = $this->objectNum;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->searchNum) {
            $res['SearchNum'] = $this->searchNum;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['Buckets'])) {
            $model->buckets = $map['Buckets'];
        }

        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FinishNum'])) {
            $model->finishNum = $map['FinishNum'];
        }

        if (isset($map['IsInc'])) {
            $model->isInc = $map['IsInc'];
        }

        if (isset($map['LastExecuteDate'])) {
            $model->lastExecuteDate = $map['LastExecuteDate'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['NextExecuteDate'])) {
            $model->nextExecuteDate = $map['NextExecuteDate'];
        }

        if (isset($map['ObjectNum'])) {
            $model->objectNum = $map['ObjectNum'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SearchNum'])) {
            $model->searchNum = $map['SearchNum'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
