<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class statusCount extends Model
{
    /**
     * @description The number of instances that failed to run.
     *
     * @example 1
     *
     * @var int
     */
    public $failureCount;

    /**
     * @description The number of instances that are not run.
     *
     * @example 1
     *
     * @var int
     */
    public $notRunCount;

    /**
     * @description The number of instances that are running.
     *
     * @example 1
     *
     * @var int
     */
    public $runningCount;

    /**
     * @description The number of instances that are successfully run.
     *
     * @example 1
     *
     * @var int
     */
    public $successCount;

    /**
     * @description The total number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The number of instances that are waiting for resources.
     *
     * @example 1
     *
     * @var int
     */
    public $waitResCount;

    /**
     * @description The number of instances that are waiting to run.
     *
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
