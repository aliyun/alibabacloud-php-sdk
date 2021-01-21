<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class stackInstances extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stackGroupId;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'status'             => 'Status',
        'stackGroupId'       => 'StackGroupId',
        'stackId'            => 'StackId',
        'driftDetectionTime' => 'DriftDetectionTime',
        'stackDriftStatus'   => 'StackDriftStatus',
        'statusReason'       => 'StatusReason',
        'stackGroupName'     => 'StackGroupName',
        'accountId'          => 'AccountId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
