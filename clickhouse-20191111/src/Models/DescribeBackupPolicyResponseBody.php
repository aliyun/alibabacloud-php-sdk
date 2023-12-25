<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @description The retention period for the backup data. By default, the backup data is retained for seven days. Valid values: 7 to 730. Unit: day.
     *
     * @example 7
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @description The size of the backup data. Unit: MB.
     *
     * @example 123124
     *
     * @var string
     */
    public $backupSize;

    /**
     * @description The day of a week when the system regularly backs up data. Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * @example Monday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The backup window. The time is displayed in Coordinated Universal Time (UTC).
     *
     * @example 15:00Z-16:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description The request ID.
     *
     * @example F5178C10-1407-4987-9133-DE4DC9119F75
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the backup feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
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
