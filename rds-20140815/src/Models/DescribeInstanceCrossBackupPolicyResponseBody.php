<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceCrossBackupPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $logBackupEnabled;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $backupEnabledTime;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $logBackupEnabledTime;

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
    public $lockMode;

    /**
     * @var int
     */
    public $retention;

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
    public $DBInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $DBInstanceDescription;
    protected $_name = [
        'logBackupEnabled'      => 'LogBackupEnabled',
        'engineVersion'         => 'EngineVersion',
        'backupEnabledTime'     => 'BackupEnabledTime',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'requestId'             => 'RequestId',
        'logBackupEnabledTime'  => 'LogBackupEnabledTime',
        'crossBackupRegion'     => 'CrossBackupRegion',
        'retentType'            => 'RetentType',
        'lockMode'              => 'LockMode',
        'retention'             => 'Retention',
        'backupEnabled'         => 'BackupEnabled',
        'crossBackupType'       => 'CrossBackupType',
        'DBInstanceId'          => 'DBInstanceId',
        'regionId'              => 'RegionId',
        'engine'                => 'Engine',
        'DBInstanceDescription' => 'DBInstanceDescription',
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
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->backupEnabledTime) {
            $res['BackupEnabledTime'] = $this->backupEnabledTime;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->logBackupEnabledTime) {
            $res['LogBackupEnabledTime'] = $this->logBackupEnabledTime;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->retentType) {
            $res['RetentType'] = $this->retentType;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->backupEnabled) {
            $res['BackupEnabled'] = $this->backupEnabled;
        }
        if (null !== $this->crossBackupType) {
            $res['CrossBackupType'] = $this->crossBackupType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceCrossBackupPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogBackupEnabled'])) {
            $model->logBackupEnabled = $map['LogBackupEnabled'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['BackupEnabledTime'])) {
            $model->backupEnabledTime = $map['BackupEnabledTime'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LogBackupEnabledTime'])) {
            $model->logBackupEnabledTime = $map['LogBackupEnabledTime'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['RetentType'])) {
            $model->retentType = $map['RetentType'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['BackupEnabled'])) {
            $model->backupEnabled = $map['BackupEnabled'];
        }
        if (isset($map['CrossBackupType'])) {
            $model->crossBackupType = $map['CrossBackupType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        return $model;
    }
}
