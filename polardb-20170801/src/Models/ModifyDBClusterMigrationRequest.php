<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterMigrationRequest extends Model
{
    /**
     * @description The endpoints to be switched. The endpoints are in the JSON format.
     *
     * > This parameter is valid when the SwapConnectionString parameter is set to true.
     * @example {"rm-2ze73el581cs*****.mysql.pre.rds.aliyuncs.com":"pc-2ze8200s298e*****.mysql.polardb.pre.rds.aliyuncs.com","rm-2ze73el581cs86*****.mysql.pre.rds.aliyuncs.com":"test-p*****.mysql.polardb.pre.rds.aliyuncs.com"}
     *
     * @var string
     */
    public $connectionStrings;

    /**
     * @description The ID of cluster.
     *
     * @example pc-**************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the new instance or new cluster. Valid values:
     *
     *   To perform a data migration, enter the ID of the PolarDB cluster.
     *   To perform a migration rollback, enter the ID of the ApsaraDB for RDS instance.
     *
     * @example pc-**************
     *
     * @var string
     */
    public $newMasterInstanceId;

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
     * @description The ID of the source ApsaraDB RDS instance.
     *
     * @example rm-************
     *
     * @var string
     */
    public $sourceRDSDBInstanceId;

    /**
     * @description Specifies whether to switch the endpoints. Valid values:
     *
     *   **true**: switches the endpoints. If you select this option, you do not need the change the endpoint in your applications.
     *   **false**: does not switch the endpoints. If you select this option, you must specify the endpoint of the PolarDB cluster in your applications.
     *
     * Default value: **false**.
     * @example false
     *
     * @var string
     */
    public $swapConnectionString;
    protected $_name = [
        'connectionStrings'     => 'ConnectionStrings',
        'DBClusterId'           => 'DBClusterId',
        'newMasterInstanceId'   => 'NewMasterInstanceId',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'securityToken'         => 'SecurityToken',
        'sourceRDSDBInstanceId' => 'SourceRDSDBInstanceId',
        'swapConnectionString'  => 'SwapConnectionString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStrings) {
            $res['ConnectionStrings'] = $this->connectionStrings;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->newMasterInstanceId) {
            $res['NewMasterInstanceId'] = $this->newMasterInstanceId;
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
        if (null !== $this->sourceRDSDBInstanceId) {
            $res['SourceRDSDBInstanceId'] = $this->sourceRDSDBInstanceId;
        }
        if (null !== $this->swapConnectionString) {
            $res['SwapConnectionString'] = $this->swapConnectionString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterMigrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStrings'])) {
            $model->connectionStrings = $map['ConnectionStrings'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['NewMasterInstanceId'])) {
            $model->newMasterInstanceId = $map['NewMasterInstanceId'];
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
        if (isset($map['SourceRDSDBInstanceId'])) {
            $model->sourceRDSDBInstanceId = $map['SourceRDSDBInstanceId'];
        }
        if (isset($map['SwapConnectionString'])) {
            $model->swapConnectionString = $map['SwapConnectionString'];
        }

        return $model;
    }
}
