<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation;

use AlibabaCloud\Tea\Model;

class stackGroupDriftDetectionDetail extends Model
{
    /**
     * @description The number of stack instances for which drift detection was canceled.
     *
     * @example 0
     *
     * @var int
     */
    public $cancelledStackInstancesCount;

    /**
     * @description The drift detection state.
     *
     * Valid values:
     *
     *   COMPLETED: Drift detection is performed on the stack group and all stack instances passed the drift detection.
     *   FAILED: Drift detection is performed on the stack group. The number of stack instances that failed the drift detection exceeds the specified threshold.
     *   PARTIAL_SUCCESS: Drift detection is performed on the stack group. The number of stack instances that failed the drift detection does not exceed the specified threshold.
     *   IN_PROGRESS: Drift detection is being performed on the stack group.
     *   STOPPED: Drift detection is canceled for the stack group.
     *
     * @example COMPLETED
     *
     * @var string
     */
    public $driftDetectionStatus;

    /**
     * @description The time when drift detection was performed.
     *
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The number of stack instances that have drifted.
     *
     * @example 1
     *
     * @var int
     */
    public $driftedStackInstancesCount;

    /**
     * @description The number of stack instances that failed drift detection.
     *
     * @example 0
     *
     * @var int
     */
    public $failedStackInstancesCount;

    /**
     * @description The number of stack instances on which drift detection was being performed.
     *
     * @example 0
     *
     * @var int
     */
    public $inProgressStackInstancesCount;

    /**
     * @description The number of stack instances that were being synchronized.
     *
     * @example 1
     *
     * @var int
     */
    public $inSyncStackInstancesCount;

    /**
     * @description The drift state of the stack group.
     *
     * Valid values:
     *
     *   DRIFTED: At least one stack instance in the stack group has drifted.
     *   NOT_CHECKED: No successful drift detection is performed in the stack group.
     *   IN_SYNC: All the stack instances in the stack group are being synchronized.
     *
     * @example DRIFTED
     *
     * @var string
     */
    public $stackGroupDriftStatus;

    /**
     * @description The number of stack instances.
     *
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
