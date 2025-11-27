<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class CreateBackupRequest extends Model
{
    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var string
     */
    public $backupStrategy;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'backupMethod' => 'BackupMethod',
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'backupStrategy' => 'BackupStrategy',
        'backupType' => 'BackupType',
        'DBInstanceId' => 'DBInstanceId',
        'DBName' => 'DBName',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }

        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }

        if (null !== $this->backupStrategy) {
            $res['BackupStrategy'] = $this->backupStrategy;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }

        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }

        if (isset($map['BackupStrategy'])) {
            $model->backupStrategy = $map['BackupStrategy'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
