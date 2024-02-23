<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryRobotTaskCallDetailRequest extends Model
{
    /**
     * @description The called number.
     *
     * @example 130****0000
     *
     * @var string
     */
    public $callee;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The timestamp of the time at which the call details you want to query.
     *
     * @example 2020-10-21 08:23:21
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
     * @description The unique ID of the robocall task. You can call the [CreateRobotTask](~~393531~~) operation to obtain the task ID.
     *
     * @example 1045001
     *
     * @var int
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
     * @return QueryRobotTaskCallDetailRequest
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
