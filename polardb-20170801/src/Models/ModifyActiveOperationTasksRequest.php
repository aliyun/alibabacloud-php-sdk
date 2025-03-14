<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyActiveOperationTasksRequest extends Model
{
    /**
     * @description Specifies whether to immediately start scheduling. Valid values:
     *
     *   0: No. This is the default value.
     *   1: Yes.
     *
     * >
     *
     *   If you set this parameter to 0, you must specify the SwitchTime parameter.
     *
     *   If you set this parameter to 1, the SwitchTime parameter does not take effect. In this case, the start time of the event is set to the current time, and the system determines the switching time based on the start time. Scheduling is started immediately, which is a prerequisite for the switchover. Then, the switchover is performed. You can call the DescribeActiveOperationTasks operation and check the return value of the PrepareInterval parameter for the preparation time.
     *
     * @example 0
     *
     * @var int
     */
    public $immediateStart;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/98041.html) operation to query the region information about all clusters within a specified account.
     *
     * This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The scheduled switching time that you want to specify. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >
     *
     *   The time that is specified by this parameter cannot be later than the latest execution time.
     *
     *   You can call the DescribeActiveOperationTasks operation and check the return value of the Deadline parameter for the latest execution time.
     *
     * @example 2023-04-25T06:00:00Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The task IDs.
     *
     * This parameter is required.
     *
     * @example 11111,22222
     *
     * @var string
     */
    public $taskIds;
    protected $_name = [
        'immediateStart' => 'ImmediateStart',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
        'switchTime' => 'SwitchTime',
        'taskIds' => 'TaskIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->immediateStart) {
            $res['ImmediateStart'] = $this->immediateStart;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyActiveOperationTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImmediateStart'])) {
            $model->immediateStart = $map['ImmediateStart'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }

        return $model;
    }
}
