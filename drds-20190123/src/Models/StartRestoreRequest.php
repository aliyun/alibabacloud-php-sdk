<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class StartRestoreRequest extends Model
{
    /**
     * @description The name of the database to be restored. Separate multiple databases with commas (,).
     *
     * >  If you do not specify any database name, all databases in the instance are restored by default.
     * @example test1,test2
     *
     * @var string
     */
    public $backupDbNames;

    /**
     * @description The ID of the DRDS backup set.
     *
     * >  If you do not specify this parameter, the system restores data by time (PreferredBackupTime).
     * @example 23***
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The level of the backup. Valid values:
     *
     *   db: The database level.
     *   instance: the instance level.
     *
     * @example db
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
     * @example phy
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The ID of the DRDS instance.
     *
     * @example rds********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The restoration time of the instance, in the format of`  yyyy-MM-dd HH:mm:ss `.
     *
     * @example 2019-09-10 20:18:18
     *
     * @var string
     */
    public $preferredBackupTime;
    protected $_name = [
        'backupDbNames'       => 'BackupDbNames',
        'backupId'            => 'BackupId',
        'backupLevel'         => 'BackupLevel',
        'backupMode'          => 'BackupMode',
        'drdsInstanceId'      => 'DrdsInstanceId',
        'preferredBackupTime' => 'PreferredBackupTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDbNames) {
            $res['BackupDbNames'] = $this->backupDbNames;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupLevel) {
            $res['BackupLevel'] = $this->backupLevel;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartRestoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDbNames'])) {
            $model->backupDbNames = $map['BackupDbNames'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupLevel'])) {
            $model->backupLevel = $map['BackupLevel'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }

        return $model;
    }
}
