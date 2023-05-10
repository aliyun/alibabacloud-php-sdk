<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup;

use AlibabaCloud\Tea\Model;

class stackGroupDriftDetectionDetail extends Model
{
    /**
     * @description The ID of the resource group. This parameter is specified when you create the stack group.
     *
     * @example 0
     *
     * @var int
     */
    public $cancelledStackInstancesCount;

    /**
     * @description The number of stack instances on which drift detection was being performed.
     *
     * @example COMPLETED
     *
     * @var string
     */
    public $driftDetectionStatus;

    /**
     * @description The number of stack instances that failed drift detection.
     *
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The permission model.
     *
     * Valid values:
     *
     *   SELF_MANAGED: the self-managed permission model
     *   SERVICE_MANAGED: the service-managed permission model
     *
     * >  For more information about the permission models of stack groups, see [Overview](~~154578~~).
     * @example 1
     *
     * @var int
     */
    public $driftedStackInstancesCount;

    /**
     * @description The drift status of the stack group.
     *
     * Valid values:
     *
     *   DRIFTED: At least one stack instance in the stack group has drifted.
     *   NOT_CHECKED: No drift detection is completed on the stack group.
     *   IN_SYNC: All the stack instances in the stack group are being synchronized.
     *
     * @example 0
     *
     * @var int
     */
    public $failedStackInstancesCount;

    /**
     * @description The number of stack instances for which drift detection was canceled.
     *
     * @example 0
     *
     * @var int
     */
    public $inProgressStackInstancesCount;

    /**
     * @description The number of stack instances that have drifted.
     *
     * @example 1
     *
     * @var int
     */
    public $inSyncStackInstancesCount;

    /**
     * @description The number of stack instances that were being synchronized.
     *
     * @example DRIFTED
     *
     * @var string
     */
    public $stackGroupDriftStatus;

    /**
     * @description The status of drift detection on the stack group.
     *
     * Valid values:
     *
     *   COMPLETED: Drift detection is performed and completed on all stack instances.
     *   FAILED: Drift detection is performed. The number of stack instances that failed the drift detection exceeds the specified threshold.
     *   PARTIAL_SUCCESS: Drift detection is performed. The number of stack instances that failed the drift detection does not exceed the specified threshold.
     *   IN_PROGRESS: Drift detection is being performed on the stack group.
     *   STOPPED: Drift detection is canceled for the stack group.
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
