<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackDriftDetectionStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $driftDetectionStatusReason;

    /**
     * @var int
     */
    public $driftedStackResourceCount;

    /**
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @var string
     */
    public $driftDetectionStatus;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $driftDetectionId;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'driftDetectionTime'         => 'DriftDetectionTime',
        'driftDetectionStatusReason' => 'DriftDetectionStatusReason',
        'driftedStackResourceCount'  => 'DriftedStackResourceCount',
        'stackDriftStatus'           => 'StackDriftStatus',
        'driftDetectionStatus'       => 'DriftDetectionStatus',
        'stackId'                    => 'StackId',
        'driftDetectionId'           => 'DriftDetectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->driftDetectionStatusReason) {
            $res['DriftDetectionStatusReason'] = $this->driftDetectionStatusReason;
        }
        if (null !== $this->driftedStackResourceCount) {
            $res['DriftedStackResourceCount'] = $this->driftedStackResourceCount;
        }
        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }
        if (null !== $this->driftDetectionStatus) {
            $res['DriftDetectionStatus'] = $this->driftDetectionStatus;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->driftDetectionId) {
            $res['DriftDetectionId'] = $this->driftDetectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackDriftDetectionStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['DriftDetectionStatusReason'])) {
            $model->driftDetectionStatusReason = $map['DriftDetectionStatusReason'];
        }
        if (isset($map['DriftedStackResourceCount'])) {
            $model->driftedStackResourceCount = $map['DriftedStackResourceCount'];
        }
        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }
        if (isset($map['DriftDetectionStatus'])) {
            $model->driftDetectionStatus = $map['DriftDetectionStatus'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['DriftDetectionId'])) {
            $model->driftDetectionId = $map['DriftDetectionId'];
        }

        return $model;
    }
}
