<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup;

use AlibabaCloud\Tea\Model;

class stackGroupDriftDetectionDetail extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $cancelledStackInstancesCount;

    /**
     * @example COMPLETED
     *
     * @var string
     */
    public $driftDetectionStatus;

    /**
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $driftedStackInstancesCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $failedStackInstancesCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $inProgressStackInstancesCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $inSyncStackInstancesCount;

    /**
     * @example DRIFTED
     *
     * @var string
     */
    public $stackGroupDriftStatus;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalStackInstancesCount;
    protected $_name = [
        'cancelledStackInstancesCount'  => 'CancelledStackInstancesCount',
        'driftDetectionStatus'          => 'DriftDetectionStatus',
        'driftDetectionTime'            => 'DriftDetectionTime',
        'driftedStackInstancesCount'    => 'DriftedStackInstancesCount',
        'failedStackInstancesCount'     => 'FailedStackInstancesCount',
        'inProgressStackInstancesCount' => 'InProgressStackInstancesCount',
        'inSyncStackInstancesCount'     => 'InSyncStackInstancesCount',
        'stackGroupDriftStatus'         => 'StackGroupDriftStatus',
        'totalStackInstancesCount'      => 'TotalStackInstancesCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelledStackInstancesCount) {
            $res['CancelledStackInstancesCount'] = $this->cancelledStackInstancesCount;
        }
        if (null !== $this->driftDetectionStatus) {
            $res['DriftDetectionStatus'] = $this->driftDetectionStatus;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->driftedStackInstancesCount) {
            $res['DriftedStackInstancesCount'] = $this->driftedStackInstancesCount;
        }
        if (null !== $this->failedStackInstancesCount) {
            $res['FailedStackInstancesCount'] = $this->failedStackInstancesCount;
        }
        if (null !== $this->inProgressStackInstancesCount) {
            $res['InProgressStackInstancesCount'] = $this->inProgressStackInstancesCount;
        }
        if (null !== $this->inSyncStackInstancesCount) {
            $res['InSyncStackInstancesCount'] = $this->inSyncStackInstancesCount;
        }
        if (null !== $this->stackGroupDriftStatus) {
            $res['StackGroupDriftStatus'] = $this->stackGroupDriftStatus;
        }
        if (null !== $this->totalStackInstancesCount) {
            $res['TotalStackInstancesCount'] = $this->totalStackInstancesCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroupDriftDetectionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CancelledStackInstancesCount'])) {
            $model->cancelledStackInstancesCount = $map['CancelledStackInstancesCount'];
        }
        if (isset($map['DriftDetectionStatus'])) {
            $model->driftDetectionStatus = $map['DriftDetectionStatus'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['DriftedStackInstancesCount'])) {
            $model->driftedStackInstancesCount = $map['DriftedStackInstancesCount'];
        }
        if (isset($map['FailedStackInstancesCount'])) {
            $model->failedStackInstancesCount = $map['FailedStackInstancesCount'];
        }
        if (isset($map['InProgressStackInstancesCount'])) {
            $model->inProgressStackInstancesCount = $map['InProgressStackInstancesCount'];
        }
        if (isset($map['InSyncStackInstancesCount'])) {
            $model->inSyncStackInstancesCount = $map['InSyncStackInstancesCount'];
        }
        if (isset($map['StackGroupDriftStatus'])) {
            $model->stackGroupDriftStatus = $map['StackGroupDriftStatus'];
        }
        if (isset($map['TotalStackInstancesCount'])) {
            $model->totalStackInstancesCount = $map['TotalStackInstancesCount'];
        }

        return $model;
    }
}
