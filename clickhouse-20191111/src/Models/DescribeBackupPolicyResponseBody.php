<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @example 7
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @example 123124
     *
     * @var string
     */
    public $backupSize;

    /**
     * @example Monday
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
     * @example F5178C10-1407-4987-9133-DE4DC9119F75
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $switch;
    protected $_name = [
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'backupSize'            => 'BackupSize',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'preferredBackupTime'   => 'PreferredBackupTime',
        'requestId'             => 'RequestId',
        'switch'                => 'Switch',
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
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->switch) {
            $res['Switch'] = $this->switch;
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
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Switch'])) {
            $model->switch = $map['Switch'];
        }

        return $model;
    }
}
