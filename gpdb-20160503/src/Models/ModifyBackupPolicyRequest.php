<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @example 7
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @example gp-xxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableRecoveryPoint;

    /**
     * @example Tuesday，Thursday，Saturday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @example 15:00Z-16:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @example 8
     *
     * @var string
     */
    public $recoveryPointPeriod;
    protected $_name = [
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'DBInstanceId'          => 'DBInstanceId',
        'enableRecoveryPoint'   => 'EnableRecoveryPoint',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'preferredBackupTime'   => 'PreferredBackupTime',
        'recoveryPointPeriod'   => 'RecoveryPointPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->enableRecoveryPoint) {
            $res['EnableRecoveryPoint'] = $this->enableRecoveryPoint;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->recoveryPointPeriod) {
            $res['RecoveryPointPeriod'] = $this->recoveryPointPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EnableRecoveryPoint'])) {
            $model->enableRecoveryPoint = $map['EnableRecoveryPoint'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['RecoveryPointPeriod'])) {
            $model->recoveryPointPeriod = $map['RecoveryPointPeriod'];
        }

        return $model;
    }
}
