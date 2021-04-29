<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceCrossBackupPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $logBackupEnabled;

    /**
     * @var string
     */
    public $backupEnabled;

    /**
     * @var string
     */
    public $crossBackupType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @var int
     */
    public $retentType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $retention;
    protected $_name = [
        'logBackupEnabled'  => 'LogBackupEnabled',
        'backupEnabled'     => 'BackupEnabled',
        'crossBackupType'   => 'CrossBackupType',
        'requestId'         => 'RequestId',
        'DBInstanceId'      => 'DBInstanceId',
        'crossBackupRegion' => 'CrossBackupRegion',
        'retentType'        => 'RetentType',
        'regionId'          => 'RegionId',
        'retention'         => 'Retention',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logBackupEnabled) {
            $res['LogBackupEnabled'] = $this->logBackupEnabled;
        }
        if (null !== $this->backupEnabled) {
            $res['BackupEnabled'] = $this->backupEnabled;
        }
        if (null !== $this->crossBackupType) {
            $res['CrossBackupType'] = $this->crossBackupType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->retentType) {
            $res['RetentType'] = $this->retentType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceCrossBackupPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogBackupEnabled'])) {
            $model->logBackupEnabled = $map['LogBackupEnabled'];
        }
        if (isset($map['BackupEnabled'])) {
            $model->backupEnabled = $map['BackupEnabled'];
        }
        if (isset($map['CrossBackupType'])) {
            $model->crossBackupType = $map['CrossBackupType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['RetentType'])) {
            $model->retentType = $map['RetentType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        return $model;
    }
}
