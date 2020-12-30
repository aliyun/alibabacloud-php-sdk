<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var string
     */
    public $preferredBackupEndTimeUTC;

    /**
     * @var string
     */
    public $preferredBackupStartTimeUTC;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var string
     */
    public $backupRetentionPeriod;
    protected $_name = [
        'preferredBackupPeriod'       => 'PreferredBackupPeriod',
        'preferredBackupEndTimeUTC'   => 'PreferredBackupEndTimeUTC',
        'preferredBackupStartTimeUTC' => 'PreferredBackupStartTimeUTC',
        'requestId'                   => 'RequestId',
        'preferredBackupTime'         => 'PreferredBackupTime',
        'backupRetentionPeriod'       => 'BackupRetentionPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupEndTimeUTC) {
            $res['PreferredBackupEndTimeUTC'] = $this->preferredBackupEndTimeUTC;
        }
        if (null !== $this->preferredBackupStartTimeUTC) {
            $res['PreferredBackupStartTimeUTC'] = $this->preferredBackupStartTimeUTC;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
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
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupEndTimeUTC'])) {
            $model->preferredBackupEndTimeUTC = $map['PreferredBackupEndTimeUTC'];
        }
        if (isset($map['PreferredBackupStartTimeUTC'])) {
            $model->preferredBackupStartTimeUTC = $map['PreferredBackupStartTimeUTC'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }

        return $model;
    }
}
