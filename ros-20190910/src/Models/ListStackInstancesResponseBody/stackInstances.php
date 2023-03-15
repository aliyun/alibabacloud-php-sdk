<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class stackInstances extends Model
{
    /**
     * @description The ID of the account to which the stack belongs.
     *
     * @example 156552876021****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The time when the last successful drift detection was performed on the stack.
     *
     * >  This parameter is returned only if drift detection is performed on the stack group.
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The ID of the folder in the resource directory.
     *
     * >  This parameter is returned only if the stack group is granted service-managed permissions.
     * @example fd-4PvlVLOL8v
     *
     * @var string
     */
    public $rdFolderId;

    /**
     * @description The ID of the region to which the stack belongs.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The state of the stack when the last successful drift detection was performed on the stack group.
     *
     * Valid values:
     *
     *   DRIFTED: The stack has drifted.
     *   NOT_CHECKED: No successful drift detection is performed on the stack.
     *   IN_SYNC: The stack is being synchronized.
     *
     * >  This parameter is returned only if drift detection is performed on the stack group.
     * @example IN_SYNC
     *
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @description The ID of the stack group.
     *
     * @example fd0ddef9-9540-4b42-a464-94f77835****
     *
     * @var string
     */
    public $stackGroupId;

    /**
     * @description The name of the stack group.
     *
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The ID of the stack.
     *
     * >  This parameter is returned only if the stack is in the CURRENT state.
     * @example 35ad60e3-6a92-42d8-8812-f0700d45****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The state of the stack.
     *
     * Valid values:
     *
     *   CURRENT: The stack is up to date with the stack group.
     *
     *   OUTDATED: The stack is not up to date with the stack group. Stacks are in the OUTDATED state due to the following possible reasons:
     *
     *   When the CreateStackInstances operation is called to create stacks, the stacks fail to be created.
     *   When the UpdateStackInstances or UpdateStackGroup operation is called to update stacks, the stacks fail to be updated, or only specific stacks are updated.
     *   The creation or update operation is not completed.
     *
     * @example CURRENT
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason why the stack is in the OUTDATED state.
     *
     * >  This parameter is returned only if the stack is in the OUTDATED state.
     * @example User initiated stop
     *
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'accountId'          => 'AccountId',
        'driftDetectionTime' => 'DriftDetectionTime',
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
     * @return stackInstances
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
