<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupDBInstanceResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $logBackupEnabledTime;

    /**
     * @var string
     */
    public $backupEnabled;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $logBackupEnabled;

    /**
     * @var int
     */
    public $retentType;

    /**
     * @var int
     */
    public $retention;

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
    public $engine;

    /**
     * @var string
     */
    public $backupEnabledTime;

    /**
     * @var string
     */
    public $DBInstanceDescription;
    protected $_name = [
        'logBackupEnabledTime'  => 'LogBackupEnabledTime',
        'backupEnabled'         => 'BackupEnabled',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'lockMode'              => 'LockMode',
        'engineVersion'         => 'EngineVersion',
        'logBackupEnabled'      => 'LogBackupEnabled',
        'retentType'            => 'RetentType',
        'retention'             => 'Retention',
        'crossBackupRegion'     => 'CrossBackupRegion',
        'crossBackupType'       => 'CrossBackupType',
        'DBInstanceId'          => 'DBInstanceId',
        'engine'                => 'Engine',
        'backupEnabledTime'     => 'BackupEnabledTime',
        'DBInstanceDescription' => 'DBInstanceDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logBackupEnabledTime) {
            $res['LogBackupEnabledTime'] = $this->logBackupEnabledTime;
        }
        if (null !== $this->backupEnabled) {
            $res['BackupEnabled'] = $this->backupEnabled;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->logBackupEnabled) {
            $res['LogBackupEnabled'] = $this->logBackupEnabled;
        }
        if (null !== $this->retentType) {
            $res['RetentType'] = $this->retentType;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
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
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->backupEnabledTime) {
            $res['BackupEnabledTime'] = $this->backupEnabledTime;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogBackupEnabledTime'])) {
            $model->logBackupEnabledTime = $map['LogBackupEnabledTime'];
        }
        if (isset($map['BackupEnabled'])) {
            $model->backupEnabled = $map['BackupEnabled'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['LogBackupEnabled'])) {
            $model->logBackupEnabled = $map['LogBackupEnabled'];
        }
        if (isset($map['RetentType'])) {
            $model->retentType = $map['RetentType'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
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
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['BackupEnabledTime'])) {
            $model->backupEnabledTime = $map['BackupEnabledTime'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        return $model;
    }
}
