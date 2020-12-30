<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SetBackupPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var string
     */
    public $preferredBackupStartTime;

    /**
     * @var string
     */
    public $preferredBackupEndTime;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $backupLevel;

    /**
     * @var string
     */
    public $backupDbNames;

    /**
     * @var string
     */
    public $backupLog;

    /**
     * @var string
     */
    public $dataBackupRetentionPeriod;

    /**
     * @var string
     */
    public $logBackupRetentionPeriod;
    protected $_name = [
        'drdsInstanceId'            => 'DrdsInstanceId',
        'preferredBackupPeriod'     => 'PreferredBackupPeriod',
        'preferredBackupStartTime'  => 'PreferredBackupStartTime',
        'preferredBackupEndTime'    => 'PreferredBackupEndTime',
        'backupMode'                => 'BackupMode',
        'backupLevel'               => 'BackupLevel',
        'backupDbNames'             => 'BackupDbNames',
        'backupLog'                 => 'BackupLog',
        'dataBackupRetentionPeriod' => 'DataBackupRetentionPeriod',
        'logBackupRetentionPeriod'  => 'LogBackupRetentionPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupStartTime) {
            $res['PreferredBackupStartTime'] = $this->preferredBackupStartTime;
        }
        if (null !== $this->preferredBackupEndTime) {
            $res['PreferredBackupEndTime'] = $this->preferredBackupEndTime;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupLevel) {
            $res['BackupLevel'] = $this->backupLevel;
        }
        if (null !== $this->backupDbNames) {
            $res['BackupDbNames'] = $this->backupDbNames;
        }
        if (null !== $this->backupLog) {
            $res['BackupLog'] = $this->backupLog;
        }
        if (null !== $this->dataBackupRetentionPeriod) {
            $res['DataBackupRetentionPeriod'] = $this->dataBackupRetentionPeriod;
        }
        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
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
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupStartTime'])) {
            $model->preferredBackupStartTime = $map['PreferredBackupStartTime'];
        }
        if (isset($map['PreferredBackupEndTime'])) {
            $model->preferredBackupEndTime = $map['PreferredBackupEndTime'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupLevel'])) {
            $model->backupLevel = $map['BackupLevel'];
        }
        if (isset($map['BackupDbNames'])) {
            $model->backupDbNames = $map['BackupDbNames'];
        }
        if (isset($map['BackupLog'])) {
            $model->backupLog = $map['BackupLog'];
        }
        if (isset($map['DataBackupRetentionPeriod'])) {
            $model->dataBackupRetentionPeriod = $map['DataBackupRetentionPeriod'];
        }
        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }

        return $model;
    }
}
