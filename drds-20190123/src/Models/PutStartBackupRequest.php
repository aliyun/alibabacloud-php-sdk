<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class PutStartBackupRequest extends Model
{
    /**
     * @description If you need to back up data at the database level, you must specify the list of databases to be backed up, and separate multiple databases with commas (,).
     *
     * @example db_1, db_2
     *
     * @var string
     */
    public $backupDbNames;

    /**
     * @description The backup level. Valid values:
     *
     *   instance: instance
     *   db: The database type.
     *
     * @example db
     *
     * @var string
     */
    public $backupLevel;

    /**
     * @description The backup mode. For more information, see [backup mode](~~108631~~) and the valid values are as follows:
     *
     *   phy: fast backup
     *   logic: Consistent backup
     *
     * @example phy
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The ID of the DRDS instance.
     *
     * @example drds****c6vxxyzd
     *
     * @var string
     */
    public $drdsInstanceId;
    protected $_name = [
        'backupDbNames'  => 'BackupDbNames',
        'backupLevel'    => 'BackupLevel',
        'backupMode'     => 'BackupMode',
        'drdsInstanceId' => 'DrdsInstanceId',
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
        if (null !== $this->backupLevel) {
            $res['BackupLevel'] = $this->backupLevel;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutStartBackupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDbNames'])) {
            $model->backupDbNames = $map['BackupDbNames'];
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

        return $model;
    }
}
