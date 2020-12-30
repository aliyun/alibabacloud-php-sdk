<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup;

use AlibabaCloud\Tea\Model;

class stackGroupDriftDetectionDetail extends Model
{
    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var int
     */
    public $totalStackInstancesCount;

    /**
     * @var int
     */
    public $failedStackInstancesCount;

    /**
     * @var string
     */
    public $driftDetectionStatus;

    /**
     * @var string
     */
    public $stackGroupDriftStatus;

    /**
     * @var int
     */
    public $inProgressStackInstancesCount;

    /**
     * @var int
     */
    public $inSyncStackInstancesCount;

    /**
     * @var int
     */
    public $cancelledStackInstancesCount;

    /**
     * @var int
     */
    public $driftedStackInstancesCount;
    protected $_name = [
        'driftDetectionTime'            => 'DriftDetectionTime',
        'totalStackInstancesCount'      => 'TotalStackInstancesCount',
        'failedStackInstancesCount'     => 'FailedStackInstancesCount',
        'driftDetectionStatus'          => 'DriftDetectionStatus',
        'stackGroupDriftStatus'         => 'StackGroupDriftStatus',
        'inProgressStackInstancesCount' => 'InProgressStackInstancesCount',
        'inSyncStackInstancesCount'     => 'InSyncStackInstancesCount',
        'cancelledStackInstancesCount'  => 'CancelledStackInstancesCount',
        'driftedStackInstancesCount'    => 'DriftedStackInstancesCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->totalStackInstancesCount) {
            $res['TotalStackInstancesCount'] = $this->totalStackInstancesCount;
        }
        if (null !== $this->failedStackInstancesCount) {
            $res['FailedStackInstancesCount'] = $this->failedStackInstancesCount;
        }
        if (null !== $this->driftDetectionStatus) {
            $res['DriftDetectionStatus'] = $this->driftDetectionStatus;
        }
        if (null !== $this->stackGroupDriftStatus) {
            $res['StackGroupDriftStatus'] = $this->stackGroupDriftStatus;
        }
        if (null !== $this->inProgressStackInstancesCount) {
            $res['InProgressStackInstancesCount'] = $this->inProgressStackInstancesCount;
        }
        if (null !== $this->inSyncStackInstancesCount) {
            $res['InSyncStackInstancesCount'] = $this->inSyncStackInstancesCount;
        }
        if (null !== $this->cancelledStackInstancesCount) {
            $res['CancelledStackInstancesCount'] = $this->cancelledStackInstancesCount;
        }
        if (null !== $this->driftedStackInstancesCount) {
            $res['DriftedStackInstancesCount'] = $this->driftedStackInstancesCount;
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
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['TotalStackInstancesCount'])) {
            $model->totalStackInstancesCount = $map['TotalStackInstancesCount'];
        }
        if (isset($map['FailedStackInstancesCount'])) {
            $model->failedStackInstancesCount = $map['FailedStackInstancesCount'];
        }
        if (isset($map['DriftDetectionStatus'])) {
            $model->driftDetectionStatus = $map['DriftDetectionStatus'];
        }
        if (isset($map['StackGroupDriftStatus'])) {
            $model->stackGroupDriftStatus = $map['StackGroupDriftStatus'];
        }
        if (isset($map['InProgressStackInstancesCount'])) {
            $model->inProgressStackInstancesCount = $map['InProgressStackInstancesCount'];
        }
        if (isset($map['InSyncStackInstancesCount'])) {
            $model->inSyncStackInstancesCount = $map['InSyncStackInstancesCount'];
        }
        if (isset($map['CancelledStackInstancesCount'])) {
            $model->cancelledStackInstancesCount = $map['CancelledStackInstancesCount'];
        }
        if (isset($map['DriftedStackInstancesCount'])) {
            $model->driftedStackInstancesCount = $map['DriftedStackInstancesCount'];
        }

        return $model;
    }
}
