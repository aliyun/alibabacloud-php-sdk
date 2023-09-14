<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class AllocateInstancePublicConnectionRequest extends Model
{
    /**
     * @description The Tabular Data Stream (TDS) port of the instance for which Babelfish is enabled.
     *
     * > This parameter applies only to ApsaraDB RDS for PostgreSQL instances. For more information about Babelfish for ApsaraDB RDS for PostgreSQL, see [Introduction to Babelfish](~~428613~~).
     * @example 1433
     *
     * @var string
     */
    public $babelfishPort;

    /**
     * @description The prefix of the public endpoint. A valid public endpoint is in the following format: `Prefix.Database engine.rds.aliyuncs.com`. Example: `test1234.mysql.rds.aliyuncs.com`.
     *
     * > The value can be 5 to 40 characters in length and can contain letters, digits, and hyphens (-). The value cannot contain any of the following characters: ~ ! # % ^ & \* = + | {} ; : \" " , <> / ?
     * @example test1234
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~610396~~) operation to query the ID of the instance.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the dedicated cluster to which the instance belongs. This parameter is available only when the instance is created in an ApsaraDB MyBase cluster that runs MySQL on Standard Edition.
     *
     * @example rgc-bp1tkv8*****
     *
     * @var string
     */
    public $generalGroupName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The PgBouncer port.
     *
     * > This parameter is available only for instances that run PostgreSQL.
     * @example 6432
     *
     * @var string
     */
    public $PGBouncerPort;

    /**
     * @description The public port of the instance. Valid values: **1000 to 5999**.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'babelfishPort'          => 'BabelfishPort',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'DBInstanceId'           => 'DBInstanceId',
        'generalGroupName'       => 'GeneralGroupName',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'PGBouncerPort'          => 'PGBouncerPort',
        'port'                   => 'Port',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->babelfishPort) {
            $res['BabelfishPort'] = $this->babelfishPort;
        }
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->generalGroupName) {
            $res['GeneralGroupName'] = $this->generalGroupName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->PGBouncerPort) {
            $res['PGBouncerPort'] = $this->PGBouncerPort;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
     * @return AllocateInstancePublicConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BabelfishPort'])) {
            $model->babelfishPort = $map['BabelfishPort'];
        }
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['GeneralGroupName'])) {
            $model->generalGroupName = $map['GeneralGroupName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PGBouncerPort'])) {
            $model->PGBouncerPort = $map['PGBouncerPort'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
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
