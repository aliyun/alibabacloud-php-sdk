<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class TransferVersionRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
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
    public $sourceAccount;

    /**
     * @var string
     */
    public $sourcePassword;

    /**
     * @var string
     */
    public $targetAccount;

    /**
     * @var string
     */
    public $targetDbClusterId;

    /**
     * @var string
     */
    public $targetPassword;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sourceAccount'        => 'SourceAccount',
        'sourcePassword'       => 'SourcePassword',
        'targetAccount'        => 'TargetAccount',
        'targetDbClusterId'    => 'TargetDbClusterId',
        'targetPassword'       => 'TargetPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->sourceAccount) {
            $res['SourceAccount'] = $this->sourceAccount;
        }
        if (null !== $this->sourcePassword) {
            $res['SourcePassword'] = $this->sourcePassword;
        }
        if (null !== $this->targetAccount) {
            $res['TargetAccount'] = $this->targetAccount;
        }
        if (null !== $this->targetDbClusterId) {
            $res['TargetDbClusterId'] = $this->targetDbClusterId;
        }
        if (null !== $this->targetPassword) {
            $res['TargetPassword'] = $this->targetPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['SourceAccount'])) {
            $model->sourceAccount = $map['SourceAccount'];
        }
        if (isset($map['SourcePassword'])) {
            $model->sourcePassword = $map['SourcePassword'];
        }
        if (isset($map['TargetAccount'])) {
            $model->targetAccount = $map['TargetAccount'];
        }
        if (isset($map['TargetDbClusterId'])) {
            $model->targetDbClusterId = $map['TargetDbClusterId'];
        }
        if (isset($map['TargetPassword'])) {
            $model->targetPassword = $map['TargetPassword'];
        }

        return $model;
    }
}
