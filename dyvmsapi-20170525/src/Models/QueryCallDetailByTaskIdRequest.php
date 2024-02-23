<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryCallDetailByTaskIdRequest extends Model
{
    /**
     * @description The called number. You can view the outbound call records of only one called number.
     *
     * @example 1390000****
     *
     * @var string
     */
    public $callee;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The start time of the outbound robocall task. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 2020-10-09 09:02:03
     *
     * @var int
     */
    public $queryDate;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The unique ID of the outbound robocall task. The task ID is returned after the outbound robocall task is successfully delivered. You can view the task ID on the [Task Management](https://dyvms.console.aliyun.com/job/list) page of the Voice Messaging Service console, or call the **BatchRobotSmartCall** operation to obtain the **task ID**.
     *
     * @example 4001112222
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'callee'               => 'Callee',
        'ownerId'              => 'OwnerId',
        'queryDate'            => 'QueryDate',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->queryDate) {
            $res['QueryDate'] = $this->queryDate;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCallDetailByTaskIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QueryDate'])) {
            $model->queryDate = $map['QueryDate'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
