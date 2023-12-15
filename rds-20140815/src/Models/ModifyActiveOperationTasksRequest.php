<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyActiveOperationTasksRequest extends Model
{
    /**
     * @description The O\&M task ID. Separate multiple IDs with commas (,).
     *
     * >  You can call the DescribeActiveOperationTask operation to query the O\&M task ID.
     * @example 11111,22222
     *
     * @var string
     */
    public $ids;

    /**
     * @description Specifies whether to immediately start scheduling. The value 0 indicates that scheduling is not immediately started. This is the default value. The value 1 indicates that scheduling is immediately started. If you set this parameter to 0, SwitchTime takes effect. If you set this parameter to 1, SwitchTimer does not take effect. In this case, the start time of the task is set to the current time, and the system determines the switching time based on the start time.
     *
     * >  Immediate scheduling indicates that the task enters the preparing state instead of the immediate switchover. After the preparation is complete, the switchover is performed. You can call the DescribeActiveOperationTasks operation and obtain the preparation time from the value of the PrepareInterval response parameter.
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
     * @description The scheduled switching time for the task. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  The time that you specify cannot be later than the deadline of the O\&M task. You can call the DescribeActiveOperationTasks operation and obtain the deadline of the O\&M task from the value of the Deadline response parameter.
     * @example 2019-10-17T18:50:00Z
     *
     * @var string
     */
    public $switchTime;
    protected $_name = [
        'ids'                  => 'Ids',
        'immediateStart'       => 'ImmediateStart',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'switchTime'           => 'SwitchTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->immediateStart) {
            $res['ImmediateStart'] = $this->immediateStart;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['ImmediateStart'])) {
            $model->immediateStart = $map['ImmediateStart'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        return $model;
    }
}
