<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $backupFrequency;

    /**
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @var string
     */
    public $dataLevel1BackupFrequency;

    /**
     * @var string
     */
    public $dataLevel1BackupPeriod;

    /**
     * @var string
     */
    public $dataLevel1BackupRetentionPeriod;

    /**
     * @var string
     */
    public $dataLevel1BackupTime;

    /**
     * @var string
     */
    public $dataLevel2BackupPeriod;

    /**
     * @var string
     */
    public $dataLevel2BackupRetentionPeriod;

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
    public $preferredNextBackupTime;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupFrequency'                        => 'BackupFrequency',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'dataLevel1BackupFrequency'              => 'DataLevel1BackupFrequency',
        'dataLevel1BackupPeriod'                 => 'DataLevel1BackupPeriod',
        'dataLevel1BackupRetentionPeriod'        => 'DataLevel1BackupRetentionPeriod',
        'dataLevel1BackupTime'                   => 'DataLevel1BackupTime',
        'dataLevel2BackupPeriod'                 => 'DataLevel2BackupPeriod',
        'dataLevel2BackupRetentionPeriod'        => 'DataLevel2BackupRetentionPeriod',
        'preferredBackupPeriod'                  => 'PreferredBackupPeriod',
        'preferredBackupTime'                    => 'PreferredBackupTime',
        'preferredNextBackupTime'                => 'PreferredNextBackupTime',
        'requestId'                              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupFrequency) {
            $res['BackupFrequency'] = $this->backupFrequency;
        }
        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }
        if (null !== $this->dataLevel1BackupFrequency) {
            $res['DataLevel1BackupFrequency'] = $this->dataLevel1BackupFrequency;
        }
        if (null !== $this->dataLevel1BackupPeriod) {
            $res['DataLevel1BackupPeriod'] = $this->dataLevel1BackupPeriod;
        }
        if (null !== $this->dataLevel1BackupRetentionPeriod) {
            $res['DataLevel1BackupRetentionPeriod'] = $this->dataLevel1BackupRetentionPeriod;
        }
        if (null !== $this->dataLevel1BackupTime) {
            $res['DataLevel1BackupTime'] = $this->dataLevel1BackupTime;
        }
        if (null !== $this->dataLevel2BackupPeriod) {
            $res['DataLevel2BackupPeriod'] = $this->dataLevel2BackupPeriod;
        }
        if (null !== $this->dataLevel2BackupRetentionPeriod) {
            $res['DataLevel2BackupRetentionPeriod'] = $this->dataLevel2BackupRetentionPeriod;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->preferredNextBackupTime) {
            $res['PreferredNextBackupTime'] = $this->preferredNextBackupTime;
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
        if (isset($map['BackupFrequency'])) {
            $model->backupFrequency = $map['BackupFrequency'];
        }
        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }
        if (isset($map['DataLevel1BackupFrequency'])) {
            $model->dataLevel1BackupFrequency = $map['DataLevel1BackupFrequency'];
        }
        if (isset($map['DataLevel1BackupPeriod'])) {
            $model->dataLevel1BackupPeriod = $map['DataLevel1BackupPeriod'];
        }
        if (isset($map['DataLevel1BackupRetentionPeriod'])) {
            $model->dataLevel1BackupRetentionPeriod = $map['DataLevel1BackupRetentionPeriod'];
        }
        if (isset($map['DataLevel1BackupTime'])) {
            $model->dataLevel1BackupTime = $map['DataLevel1BackupTime'];
        }
        if (isset($map['DataLevel2BackupPeriod'])) {
            $model->dataLevel2BackupPeriod = $map['DataLevel2BackupPeriod'];
        }
        if (isset($map['DataLevel2BackupRetentionPeriod'])) {
            $model->dataLevel2BackupRetentionPeriod = $map['DataLevel2BackupRetentionPeriod'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['PreferredNextBackupTime'])) {
            $model->preferredNextBackupTime = $map['PreferredNextBackupTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
