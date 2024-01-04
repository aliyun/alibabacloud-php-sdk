<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ImportDatabaseBetweenInstancesRequest extends Model
{
    /**
     * @description The names of the source and destination databases. The value of this parameter is a JSON string.
     *
     * >  If the source instance runs SQL Server, the value of this parameter consists of one or more key-value pairs. In each key-value pair, the key specifies the name of the source database, and the value specifies the name of the destination database. A source database can have a different name from the destination database. For example, `{"DBNames":{"srcdb":"destdb","srcdb2":"destmydb2"}}` indicates that srcdb is migrated to destdb and srcdb2 is migrated to destmydb2. The names of source databases cannot be the same, and the names of destination databases cannot be the same.
     * @example {"DBNames":["mydb","mydb2"]}
     *
     * @var string
     */
    public $DBInfo;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

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
     * @description The ID of the source instance, which cannot be the same as the ID of the destination instance.
     *
     * @example rm-g4a1jk8xxxxxxx
     *
     * @var string
     */
    public $sourceDBInstanceId;
    protected $_name = [
        'DBInfo'               => 'DBInfo',
        'DBInstanceId'         => 'DBInstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sourceDBInstanceId'   => 'SourceDBInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInfo) {
            $res['DBInfo'] = $this->DBInfo;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->sourceDBInstanceId) {
            $res['SourceDBInstanceId'] = $this->sourceDBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportDatabaseBetweenInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInfo'])) {
            $model->DBInfo = $map['DBInfo'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['SourceDBInstanceId'])) {
            $model->sourceDBInstanceId = $map['SourceDBInstanceId'];
        }

        return $model;
    }
}
