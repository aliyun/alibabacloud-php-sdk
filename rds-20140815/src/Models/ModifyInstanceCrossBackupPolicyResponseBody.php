<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceCrossBackupPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $backupEnabled;

    /**
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @var string
     */
    public $crossBackupType;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $logBackupEnabled;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $retentType;

    /**
     * @var int
     */
    public $retention;
    protected $_name = [
        'backupEnabled' => 'BackupEnabled',
        'crossBackupRegion' => 'CrossBackupRegion',
        'crossBackupType' => 'CrossBackupType',
        'DBInstanceId' => 'DBInstanceId',
        'logBackupEnabled' => 'LogBackupEnabled',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'retentType' => 'RetentType',
        'retention' => 'Retention',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupEnabled) {
            $res['BackupEnabled'] = $this->backupEnabled;
        }

        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }

        if (null !== $this->crossBackupType) {
            $res['CrossBackupType'] = $this->crossBackupType;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->logBackupEnabled) {
            $res['LogBackupEnabled'] = $this->logBackupEnabled;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->retentType) {
            $res['RetentType'] = $this->retentType;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
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
        if (isset($map['BackupEnabled'])) {
            $model->backupEnabled = $map['BackupEnabled'];
        }

        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }

        if (isset($map['CrossBackupType'])) {
            $model->crossBackupType = $map['CrossBackupType'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['LogBackupEnabled'])) {
            $model->logBackupEnabled = $map['LogBackupEnabled'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RetentType'])) {
            $model->retentType = $map['RetentType'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        return $model;
    }
}
