<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGlobalTimerBatchesResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var int
     */
    public $runningCount;

    /**
     * @var int
     */
    public $skippedCount;

    /**
     * @var int
     */
    public $succeedCount;

    /**
     * @var string
     */
    public $timerType;
    protected $_name = [
        'batchId' => 'BatchId',
        'createTime' => 'CreateTime',
        'failedCount' => 'FailedCount',
        'runningCount' => 'RunningCount',
        'skippedCount' => 'SkippedCount',
        'succeedCount' => 'SucceedCount',
        'timerType' => 'TimerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->runningCount) {
            $res['RunningCount'] = $this->runningCount;
        }

        if (null !== $this->skippedCount) {
            $res['SkippedCount'] = $this->skippedCount;
        }

        if (null !== $this->succeedCount) {
            $res['SucceedCount'] = $this->succeedCount;
        }

        if (null !== $this->timerType) {
            $res['TimerType'] = $this->timerType;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['RunningCount'])) {
            $model->runningCount = $map['RunningCount'];
        }

        if (isset($map['SkippedCount'])) {
            $model->skippedCount = $map['SkippedCount'];
        }

        if (isset($map['SucceedCount'])) {
            $model->succeedCount = $map['SucceedCount'];
        }

        if (isset($map['TimerType'])) {
            $model->timerType = $map['TimerType'];
        }

        return $model;
    }
}
