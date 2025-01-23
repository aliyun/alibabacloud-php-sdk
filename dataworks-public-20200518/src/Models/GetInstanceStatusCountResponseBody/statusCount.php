<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusCountResponseBody;

use AlibabaCloud\Dara\Model;

class statusCount extends Model
{
    /**
     * @var int
     */
    public $failureCount;
    /**
     * @var int
     */
    public $notRunCount;
    /**
     * @var int
     */
    public $runningCount;
    /**
     * @var int
     */
    public $successCount;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var int
     */
    public $waitResCount;
    /**
     * @var int
     */
    public $waitTimeCount;
    protected $_name = [
        'failureCount'  => 'FailureCount',
        'notRunCount'   => 'NotRunCount',
        'runningCount'  => 'RunningCount',
        'successCount'  => 'SuccessCount',
        'totalCount'    => 'TotalCount',
        'waitResCount'  => 'WaitResCount',
        'waitTimeCount' => 'WaitTimeCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }

        if (null !== $this->notRunCount) {
            $res['NotRunCount'] = $this->notRunCount;
        }

        if (null !== $this->runningCount) {
            $res['RunningCount'] = $this->runningCount;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->waitResCount) {
            $res['WaitResCount'] = $this->waitResCount;
        }

        if (null !== $this->waitTimeCount) {
            $res['WaitTimeCount'] = $this->waitTimeCount;
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
        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }

        if (isset($map['NotRunCount'])) {
            $model->notRunCount = $map['NotRunCount'];
        }

        if (isset($map['RunningCount'])) {
            $model->runningCount = $map['RunningCount'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WaitResCount'])) {
            $model->waitResCount = $map['WaitResCount'];
        }

        if (isset($map['WaitTimeCount'])) {
            $model->waitTimeCount = $map['WaitTimeCount'];
        }

        return $model;
    }
}
