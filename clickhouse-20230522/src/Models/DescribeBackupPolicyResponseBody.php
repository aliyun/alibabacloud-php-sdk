<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var string
     */
    public $backupSize;

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
    public $requestId;

    /**
     * @var string
     */
    public $switch;
    protected $_name = [
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'backupSize' => 'BackupSize',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'preferredBackupTime' => 'PreferredBackupTime',
        'requestId' => 'RequestId',
        'switch' => 'Switch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
