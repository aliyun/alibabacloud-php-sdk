<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceResponseBody\stackInstance\parameterOverrides;
use AlibabaCloud\Tea\Model;

class stackInstance extends Model
{
    /**
     * @example 151266687691****
     *
     * @var string
     */
    public $accountId;

    /**
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var parameterOverrides[]
     */
    public $parameterOverrides;

    /**
     * @example fd-4PvlVLOL8v
     *
     * @var string
     */
    public $rdFolderId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example IN_SYNC
     *
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @example fd0ddef9-9540-4b42-a464-94f77835****
     *
     * @var string
     */
    public $stackGroupId;

    /**
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @example 35ad60e3-6a92-42d8-8812-f0700d45****
     *
     * @var string
     */
    public $stackId;

    /**
     * @example CURRENT
     *
     * @var string
     */
    public $status;

    /**
     * @example User initiated stop
     *
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'accountId'          => 'AccountId',
        'driftDetectionTime' => 'DriftDetectionTime',
        'parameterOverrides' => 'ParameterOverrides',
        'rdFolderId'         => 'RdFolderId',
        'regionId'           => 'RegionId',
        'stackDriftStatus'   => 'StackDriftStatus',
        'stackGroupId'       => 'StackGroupId',
        'stackGroupName'     => 'StackGroupName',
        'stackId'            => 'StackId',
        'status'             => 'Status',
        'statusReason'       => 'StatusReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->parameterOverrides) {
            $res['ParameterOverrides'] = [];
            if (null !== $this->parameterOverrides && \is_array($this->parameterOverrides)) {
                $n = 0;
                foreach ($this->parameterOverrides as $item) {
                    $res['ParameterOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rdFolderId) {
            $res['RdFolderId'] = $this->rdFolderId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['ParameterOverrides'])) {
            if (!empty($map['ParameterOverrides'])) {
                $model->parameterOverrides = [];
                $n                         = 0;
                foreach ($map['ParameterOverrides'] as $item) {
                    $model->parameterOverrides[$n++] = null !== $item ? parameterOverrides::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RdFolderId'])) {
            $model->rdFolderId = $map['RdFolderId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
