<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class statusCount extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $failureCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $notRunCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $runningCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $successCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $waitResCount;

    /**
     * @example 1
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return statusCount
     */
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
