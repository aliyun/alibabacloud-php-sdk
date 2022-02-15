<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var bool
     */
    public $enableRecoveryPoint;

    /**
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var string
     */
    public $recoveryPointPeriod;

    /**
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
