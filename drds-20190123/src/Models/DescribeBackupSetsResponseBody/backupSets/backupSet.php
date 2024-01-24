<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets\backupSet\backupDbs;
use AlibabaCloud\Tea\Model;

class backupSet extends Model
{
    /**
     * @description Backup Recovery duration.
     *
     * @example 2020-06-05 11:31:38
     *
     * @var string
     */
    public $backupConsitentTime;

    /**
     * @description The list of backup databases.
     *
     * @var backupDbs
     */
    public $backupDbs;

    /**
     * @description The end of the backup time which is in timestamp format (measured in millisecond).
     *
     * >  0 indicates not finished.
     * @example 1591327899000
     *
     * @var int
     */
    public $backupEndTime;

    /**
     * @description The level of the backup. Valid values:
     *
     *   db: The database level.
     *   instance: the instance level.
     *
     * @example instance
     *
     * @var string
     */
    public $backupLevel;

    /**
     * @description The backup method. Valid values:
     *
     *   logic: the logical backup.
     *   phy: fast backup
     *
     * @example logic
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The beginning of the backup time which is in timestamp format (measured in millisecond).
     *
     * @example 1591327754000
     *
     * @var int
     */
    public $backupStartTime;

    /**
     * @description The size of the backup set. Unit: MB.
     *
     * @example 93.24
     *
     * @var string
     */
    public $backupTotalSize;

    /**
     * @description The type of the backup. Valid values:
     *
     *   manual: indicates a manual backup.
     *   auto: indicates an automatic backup.
     *
     * @example manual
     *
     * @var string
     */
    public $backupType;

    /**
     * @description Indicates whether the backup set can be restored. Valid values:
     *
     * @example false
     *
     * @var bool
     */
    public $enableRecovery;

    /**
     * @description The ID of the data backup file you want to use.
     *
     * @example ba30d5c4-a6dc-11ea-bd40-************
     *
     * @var string
     */
    public $id;

    /**
     * @description The status of the backup instance. Valid values:
     *
     *   \-1: Failed
     *   0: Not started
     *   1: The storage instance is running.
     *   2: Success
     *
     * @example 2
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'backupConsitentTime' => 'BackupConsitentTime',
        'backupDbs'           => 'BackupDbs',
        'backupEndTime'       => 'BackupEndTime',
        'backupLevel'         => 'BackupLevel',
        'backupMode'          => 'BackupMode',
        'backupStartTime'     => 'BackupStartTime',
        'backupTotalSize'     => 'BackupTotalSize',
        'backupType'          => 'BackupType',
        'enableRecovery'      => 'EnableRecovery',
        'id'                  => 'Id',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupConsitentTime) {
            $res['BackupConsitentTime'] = $this->backupConsitentTime;
        }
        if (null !== $this->backupDbs) {
            $res['BackupDbs'] = null !== $this->backupDbs ? $this->backupDbs->toMap() : null;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupLevel) {
            $res['BackupLevel'] = $this->backupLevel;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupTotalSize) {
            $res['BackupTotalSize'] = $this->backupTotalSize;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->enableRecovery) {
            $res['EnableRecovery'] = $this->enableRecovery;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupConsitentTime'])) {
            $model->backupConsitentTime = $map['BackupConsitentTime'];
        }
        if (isset($map['BackupDbs'])) {
            $model->backupDbs = backupDbs::fromMap($map['BackupDbs']);
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupLevel'])) {
            $model->backupLevel = $map['BackupLevel'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupTotalSize'])) {
            $model->backupTotalSize = $map['BackupTotalSize'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['EnableRecovery'])) {
            $model->enableRecovery = $map['EnableRecovery'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
