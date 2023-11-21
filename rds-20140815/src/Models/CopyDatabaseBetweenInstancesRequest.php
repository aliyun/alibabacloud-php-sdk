<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CopyDatabaseBetweenInstancesRequest extends Model
{
    /**
     * @description The ID of the backup set by which you want to restore databases of the source instance. When you replicate databases by backup set, you can call the DescribeBackups operation to obtain the ID of the backup set.
     *
     * > : You must specify one of the **BackupId** and **RestoreTime** parameters.
     * @example 106523874****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The source instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The names of the databases that you want to copy. Format: `Source database name 1,Source database name 2`.
     *
     * @example {"test1":"newtest1","test2":"newtest2"}
     *
     * @var string
     */
    public $dbNames;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The point in time when the system replicates databases. You can select a point in time within the backup retention period. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > You must specify one of the **BackupId** and **RestoreTime** parameters.
     * @example 2011-06-11T16:00:00Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description Specifies whether to copy users and permissions.
     *
     *   **YES**: copies users and permissions. If the destination instance has a user whose name is the same as a user in the source instance, the permissions of the user in the source instance will also be granted to the user in the destination instance after you copy user permissions.
     *   **NO**: does not copy users and permissions.
     *
     * Default value: **NO**.
     * @example NO
     *
     * @var string
     */
    public $syncUserPrivilege;

    /**
     * @description The destination instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example rm-ut5ajk3xxxxxxx
     *
     * @var string
     */
    public $targetDBInstanceId;
    protected $_name = [
        'backupId'           => 'BackupId',
        'DBInstanceId'       => 'DBInstanceId',
        'dbNames'            => 'DbNames',
        'resourceOwnerId'    => 'ResourceOwnerId',
        'restoreTime'        => 'RestoreTime',
        'syncUserPrivilege'  => 'SyncUserPrivilege',
        'targetDBInstanceId' => 'TargetDBInstanceId',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->syncUserPrivilege) {
            $res['SyncUserPrivilege'] = $this->syncUserPrivilege;
        }
        if (null !== $this->targetDBInstanceId) {
            $res['TargetDBInstanceId'] = $this->targetDBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyDatabaseBetweenInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['SyncUserPrivilege'])) {
            $model->syncUserPrivilege = $map['SyncUserPrivilege'];
        }
        if (isset($map['TargetDBInstanceId'])) {
            $model->targetDBInstanceId = $map['TargetDBInstanceId'];
        }

        return $model;
    }
}
