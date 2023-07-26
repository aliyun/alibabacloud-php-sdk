<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @description The number of days for which data backup files are retained.
     *
     * @example 7
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @description Indicates whether automatic point-in-time backup is enabled. Valid values:
     *
     *   **true**: Automatic point-in-time backup is enabled.
     *   **false**: Automatic point-in-time backup is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableRecoveryPoint;

    /**
     * @description The cycle based on which backups are performed. If more than one day of the week is specified, the days of the week are separated by commas (,). Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * @example Wednesday,Friday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The backup time. The time is in the HH:mmZ-HH:mmZ format. The time is displayed in UTC.
     *
     * @example 12:00Z-13:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description The frequency of the point-in-time backup. Valid values:
     *
     *   **1**: per hour
     *   **2**: per 2 hours
     *   **4**: per 4 hours
     *   **8**: per 8 hours
     *
     * @example 1
     *
     * @var string
     */
    public $recoveryPointPeriod;

    /**
     * @description The ID of the request.
     *
     * @example 9E6B3287-A3E2-5A87-B8D8-E9**********
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'enableRecoveryPoint'   => 'EnableRecoveryPoint',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'preferredBackupTime'   => 'PreferredBackupTime',
        'recoveryPointPeriod'   => 'RecoveryPointPeriod',
        'requestId'             => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
