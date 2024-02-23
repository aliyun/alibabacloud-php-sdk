<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class ExecuteCallTaskRequest extends Model
{
    /**
     * @description The time when the call task is executed, in the yyyy-MM-dd HH:mm:ss format.
     *
     * > You can leave this parameter empty.
     * @example 2021-03-09 00:00:00
     *
     * @var string
     */
    public $fireTime;

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
     * @description The task state. Valid values:
     *
     *   **RUNNING**
     *   **STOP**
     *   **CANCEL**
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID. You can call the [CreateCallTask](~~CreateCallTask~~) operation to obtain the task ID.
     *
     * @example 2256****
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'fireTime'             => 'FireTime',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'status'               => 'Status',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fireTime) {
            $res['FireTime'] = $this->fireTime;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteCallTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FireTime'])) {
            $model->fireTime = $map['FireTime'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
