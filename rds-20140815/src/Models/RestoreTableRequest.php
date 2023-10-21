<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RestoreTableRequest extends Model
{
    /**
     * @description The ID of the backup set. You can call the [DescribeBackups](~~26273~~) operation to obtain the ID of the backup set.
     *
     * > You must specify at least one of BackupId or **RestoreTime** parameters.
     * @example 9026262
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Specifies whether to enable the fast restoration feature for individual databases and tables. Valid values:
     *
     *   **true**: enables the feature.
     *   **false**: disables the feature.
     *
     * > For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
     * @example true
     *
     * @var bool
     */
    public $instantRecovery;

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
     * @description The point in time to which you want to restore data. The point in time must fall within the specified log backup retention period. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > *   You must specify at least one of **BackupId** and **RestoreTime**.
     * > *   You must enable the log backup feature. For more information, see [Back up an ApsaraDB RDS for MySQL instance](~~98818~~).
     * @example 2011-06-11T16:00:00Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The names of the databases and tables that you want to restore. The value is in the following format: `[{"type":"db","name":"<The name of Database 1 on the source instance>","newname":"<The name of Database 1 on the destination instance>","tables":[{"type":"table","name":"<The name of Table 1 in Database 1 on the source instance>","newname":"<The name of Table 1 in Database 1 on the destination instance>"},{"type":"table","name":"<The name of Table 2 in Database 1 on the source instance>","newname":"<The name of Table 2 in Database 1 on the destination instance>"}]},{"type":"db","name":"<The name of Database 2 on the source instance>","newname":"<The name of Database 2 on the destination instance>","tables":[{"type":"table","name":"<The name of Table 3 in Database 2 on the source instance>","newname":"<The name of Table 3 in Database 2 on the destination instance>"},{"type":"table","name":"<The name of Table 4 in Database 2 on the source instance>","newname":"<The name of Table 4 in Database 2 on the destination instance>"}]}]`
     *
     * @example [{"type":"db","name":"testdb1","newname":"testdb1_new","tables":[{"type":"table","name":"testdb1table1","newname":"testdb1table1_new"}]}]
     *
     * @var string
     */
    public $tableMeta;
    protected $_name = [
        'backupId'             => 'BackupId',
        'clientToken'          => 'ClientToken',
        'DBInstanceId'         => 'DBInstanceId',
        'instantRecovery'      => 'InstantRecovery',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'restoreTime'          => 'RestoreTime',
        'tableMeta'            => 'TableMeta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->instantRecovery) {
            $res['InstantRecovery'] = $this->instantRecovery;
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
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->tableMeta) {
            $res['TableMeta'] = $this->tableMeta;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['InstantRecovery'])) {
            $model->instantRecovery = $map['InstantRecovery'];
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
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['TableMeta'])) {
            $model->tableMeta = $map['TableMeta'];
        }

        return $model;
    }
}
