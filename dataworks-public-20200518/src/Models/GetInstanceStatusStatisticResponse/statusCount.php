<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceStatusStatisticResponse;

use AlibabaCloud\Tea\Model;

class statusCount extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $notRunCount;

    /**
     * @var int
     */
    public $waitTimeCount;

    /**
     * @var int
     */
    public $waitResCount;

    /**
     * @var int
     */
    public $runningCount;

    /**
     * @var int
     */
    public $failureCount;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'notRunCount'   => 'NotRunCount',
        'waitTimeCount' => 'WaitTimeCount',
        'waitResCount'  => 'WaitResCount',
        'runningCount'  => 'RunningCount',
        'failureCount'  => 'FailureCount',
        'successCount'  => 'SuccessCount',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('notRunCount', $this->notRunCount, true);
        Model::validateRequired('waitTimeCount', $this->waitTimeCount, true);
        Model::validateRequired('waitResCount', $this->waitResCount, true);
        Model::validateRequired('runningCount', $this->runningCount, true);
        Model::validateRequired('failureCount', $this->failureCount, true);
        Model::validateRequired('successCount', $this->successCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->notRunCount) {
            $res['NotRunCount'] = $this->notRunCount;
        }
        if (null !== $this->waitTimeCount) {
            $res['WaitTimeCount'] = $this->waitTimeCount;
        }
        if (null !== $this->waitResCount) {
            $res['WaitResCount'] = $this->waitResCount;
        }
        if (null !== $this->runningCount) {
            $res['RunningCount'] = $this->runningCount;
        }
        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NotRunCount'])) {
            $model->notRunCount = $map['NotRunCount'];
        }
        if (isset($map['WaitTimeCount'])) {
            $model->waitTimeCount = $map['WaitTimeCount'];
        }
        if (isset($map['WaitResCount'])) {
            $model->waitResCount = $map['WaitResCount'];
        }
        if (isset($map['RunningCount'])) {
            $model->runningCount = $map['RunningCount'];
        }
        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
