<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDatabaseConfigRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-t4nnu1my39qr8****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The database name.
     *
     * This parameter is required.
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The database property that you want to modify.
     *
     *   **If you want to modify a property of the database**, set this parameter to the name of the database property.
     *   **If you want to archive data from the database to an OSS bucket**, specify the database status. If you set this parameter to `covert_online_db_to_cold_storage`, the system converts an online database to a cold storage database. If you set this parameter to `convert_cold_storage_db_to_online`, the system converts a cold storage database to an online database.
     *
     * This parameter is required.
     * @example compatibility_level
     *
     * @var string
     */
    public $databasePropertyName;

    /**
     * @description The value of the database property that you want to modify.
     *
     *   **If you want to modify a property of the database**, set this parameter to the property value.
     *   **If you want to archive data from the database to an OSS bucket**, set this parameter to **1**. The system converts a database to a cold storage database or an online database.
     *
     * This parameter is required.
     * @example 150
     *
     * @var string
     */
    public $databasePropertyValue;

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
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'DBName'                => 'DBName',
        'databasePropertyName'  => 'DatabasePropertyName',
        'databasePropertyValue' => 'DatabasePropertyValue',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->databasePropertyName) {
            $res['DatabasePropertyName'] = $this->databasePropertyName;
        }
        if (null !== $this->databasePropertyValue) {
            $res['DatabasePropertyValue'] = $this->databasePropertyValue;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDatabaseConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['DatabasePropertyName'])) {
            $model->databasePropertyName = $map['DatabasePropertyName'];
        }
        if (isset($map['DatabasePropertyValue'])) {
            $model->databasePropertyValue = $map['DatabasePropertyValue'];
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

        return $model;
    }
}
