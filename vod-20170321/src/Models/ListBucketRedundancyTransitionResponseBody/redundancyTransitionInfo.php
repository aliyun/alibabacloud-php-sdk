<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListBucketRedundancyTransitionResponseBody;

use AlibabaCloud\Dara\Model;

class redundancyTransitionInfo extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $estimatedRemainingTime;

    /**
     * @var string
     */
    public $processPercentage;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'estimatedRemainingTime' => 'EstimatedRemainingTime',
        'processPercentage' => 'ProcessPercentage',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskId' => 'TaskId',
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

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->estimatedRemainingTime) {
            $res['EstimatedRemainingTime'] = $this->estimatedRemainingTime;
        }

        if (null !== $this->processPercentage) {
            $res['ProcessPercentage'] = $this->processPercentage;
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EstimatedRemainingTime'])) {
            $model->estimatedRemainingTime = $map['EstimatedRemainingTime'];
        }

        if (isset($map['ProcessPercentage'])) {
            $model->processPercentage = $map['ProcessPercentage'];
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

        return $model;
    }
}
