<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleForDeletingRequest extends Model
{
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
    public $roleArn;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $SPIRegionId;

    /**
     * @var string
     */
    public $deletionTaskId;

    /**
     * @var string
     */
    public $accountId;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'roleArn'              => 'RoleArn',
        'serviceName'          => 'ServiceName',
        'SPIRegionId'          => 'SPIRegionId',
        'deletionTaskId'       => 'DeletionTaskId',
        'accountId'            => 'AccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->SPIRegionId) {
            $res['SPIRegionId'] = $this->SPIRegionId;
        }
        if (null !== $this->deletionTaskId) {
            $res['DeletionTaskId'] = $this->deletionTaskId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleForDeletingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SPIRegionId'])) {
            $model->SPIRegionId = $map['SPIRegionId'];
        }
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}
