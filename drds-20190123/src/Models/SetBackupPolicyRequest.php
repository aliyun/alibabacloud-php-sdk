<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SetBackupPolicyRequest extends Model
{
    /**
     * @description The databases to be backed up. Separate multiple databases with commas (,).
     *
     * >  This parameter takes effect only when the backup level is database level.
     * @example test1,test2
     *
     * @var string
     */
    public $backupDbNames;

    /**
     * @description The level of the backup. Valid values:
     *
     *   db: The database type.
     *   instance: instance
     *
     * @example db
     *
     * @var string
     */
    public $backupLevel;

    /**
     * @description Specifies whether to enable log Backup. Valid values:
     *
     *   1: enabled.
     *   0: disabled.
     *
     * @example 1
     *
     * @var string
     */
    public $backupLog;

    /**
     * @description The backup mode. Valid values:
     *
     *   **Logic **: logical backup
     *   **phy**: physical backup
     *
     * @example phy
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The retention period of the backup data. Value range: 7 to 730.
     *
     * @example 7
     *
     * @var string
     */
    public $dataBackupRetentionPeriod;

    /**
     * @description The ID of the instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The log retention period. Valid values: 7 to 730. This value must be less than or equal to the number of data backup days.
     *
     * @example 7
     *
     * @var string
     */
    public $logBackupRetentionPeriod;

    /**
     * @description The end time of the backup.
     *
     * @example 12:30:30
     *
     * @var string
     */
    public $preferredBackupEndTime;

    /**
     * @description The backup cycle. Valid values:
     *
     *   0: Monday
     *   1: Tuesday
     *   2: Wednesday
     *   3: Thursday
     *   4: Friday
     *   5: Saturday
     *   6: Sunday
     *
     * @example 0
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The start time of the backup.
     *
     * @example 11:30:30
     *
     * @var string
     */
    public $preferredBackupStartTime;
    protected $_name = [
        'backupDbNames'             => 'BackupDbNames',
        'backupLevel'               => 'BackupLevel',
        'backupLog'                 => 'BackupLog',
        'backupMode'                => 'BackupMode',
        'dataBackupRetentionPeriod' => 'DataBackupRetentionPeriod',
        'drdsInstanceId'            => 'DrdsInstanceId',
        'logBackupRetentionPeriod'  => 'LogBackupRetentionPeriod',
        'preferredBackupEndTime'    => 'PreferredBackupEndTime',
        'preferredBackupPeriod'     => 'PreferredBackupPeriod',
        'preferredBackupStartTime'  => 'PreferredBackupStartTime',
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
        if (null !== $this->backupLog) {
            $res['BackupLog'] = $this->backupLog;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->dataBackupRetentionPeriod) {
            $res['DataBackupRetentionPeriod'] = $this->dataBackupRetentionPeriod;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        }
        if (null !== $this->preferredBackupEndTime) {
            $res['PreferredBackupEndTime'] = $this->preferredBackupEndTime;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupStartTime) {
            $res['PreferredBackupStartTime'] = $this->preferredBackupStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetBackupPolicyRequest
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
        if (isset($map['BackupLog'])) {
            $model->backupLog = $map['BackupLog'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['DataBackupRetentionPeriod'])) {
            $model->dataBackupRetentionPeriod = $map['DataBackupRetentionPeriod'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        if (isset($map['PreferredBackupEndTime'])) {
            $model->preferredBackupEndTime = $map['PreferredBackupEndTime'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupStartTime'])) {
            $model->preferredBackupStartTime = $map['PreferredBackupStartTime'];
        }

        return $model;
    }
}
