<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

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
     * @description Indicates whether log backup is enabled. Valid values:
     *
     *   **Enable**
     *   **Disable**
     *
     * @example true
     *
     * @var string
     */
    public $enableBackupLog;

    /**
     * @description The number of days for which the log backup files are retained.
     *
     * @example 7
     *
     * @var int
     */
    public $logBackupRetentionPeriod;

    /**
     * @description The cycle based on which backups are performed. If more than one day of the week is specified, the days of the week are separated by commas (,). Valid value:
     *
     *   Monday
     *   Tuesday
     *   Wednesday
     *   Thursday
     *   Friday
     *   Saturday
     *   Sunday
     *
     * @example Wednesday,Saturday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The data backup time. The time is in the HH:mmZ-HH:mmZ format. The time is displayed in UTC.
     *
     * @example 15:00Z-16:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description The request ID.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupRetentionPeriod'    => 'BackupRetentionPeriod',
        'enableBackupLog'          => 'EnableBackupLog',
        'logBackupRetentionPeriod' => 'LogBackupRetentionPeriod',
        'preferredBackupPeriod'    => 'PreferredBackupPeriod',
        'preferredBackupTime'      => 'PreferredBackupTime',
        'requestId'                => 'RequestId',
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
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
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
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
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

        return $model;
    }
}
