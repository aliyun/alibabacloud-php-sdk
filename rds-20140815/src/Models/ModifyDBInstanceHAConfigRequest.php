<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceHAConfigRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk543xxxxx
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The HA mode of the instance.
     *
     *   RPO: Data consistency is preferred. The instance ensures data reliability to minimize data losses. If you have high requirements on data consistency, select this mode.
     *   RTO: Service availability is preferred. The instance restores the database service at the earliest opportunity to ensure service availability. If you have high requirements for service availability, select this mode.
     *
     * @example RPO
     *
     * @var string
     */
    public $HAMode;

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
     * @description The data replication mode of the instance. For more information, see [Data replication mode](~~96055~~).
     *
     *   Semi-sync: the semi-synchronous mode.
     *   Sync: the synchronous mode.
     *   gAsyncg: the asynchronous mode.
     *   Mgr: the MySQL group replication (MGR) mode. This mode is available only for the China site (aliyun.com).
     *
     * > This parameter is not supported for instances that run SQL Server 2017 on RDS Cluster Edition.
     * @example Sync
     *
     * @var string
     */
    public $syncMode;
    protected $_name = [
        'dbInstanceId'         => 'DbInstanceId',
        'HAMode'               => 'HAMode',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'syncMode'             => 'SyncMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->HAMode) {
            $res['HAMode'] = $this->HAMode;
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
        if (null !== $this->syncMode) {
            $res['SyncMode'] = $this->syncMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceHAConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['HAMode'])) {
            $model->HAMode = $map['HAMode'];
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
        if (isset($map['SyncMode'])) {
            $model->syncMode = $map['SyncMode'];
        }

        return $model;
    }
}
