<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceCrossBackupPolicyResponseBody extends Model
{
    /**
     * @description The status of the cross-region backup feature on the instance. Valid values:
     *
     *   **Disable**
     *   **Enable**
     *
     * @example Enable
     *
     * @var string
     */
    public $backupEnabled;

    /**
     * @description The point in time at which the cross-region backup feature is enabled. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-06-12T05:44:21Z
     *
     * @var string
     */
    public $backupEnabledTime;

    /**
     * @description The ID of the destination region where the cross-region backup files of the instance are stored.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description The policy that is used to save the cross-region backup files of the instance. Default value: **1**. The value 1 indicates that all cross-region backup files are saved.
     *
     * @example 1
     *
     * @var string
     */
    public $crossBackupType;

    /**
     * @description The name of the instance. It must be 2 to 256 characters in length. The value can contain letters, digits, underscores (\_), and hyphens (-), and must start with a letter.
     *
     * >  The value cannot start with http:// or https://.
     * @example Test database
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The instance ID.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The status of the instance. For more information, see [Instance state table](~~26315~~).
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The database engine of the instance.
     *
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version.
     *
     * @example 5.6
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The lock status of the instance. Valid values:
     *
     *   **Unlock**: The instance is not locked.
     *   **ManualLock**: The instance is manually locked.
     *   **LockByExpiration**: The instance is automatically locked due to instance expiration.
     *   **LockByRestoration**: The instance is automatically locked before a rollback.
     *   **LockByDiskQuota**: The instance is automatically locked because its storage capacity is exhausted and the instance is inaccessible.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The status of the cross-region log backup feature on the instance. Valid values:
     *
     *   **Disable**
     *   **Enable**
     *
     * @example Enable
     *
     * @var string
     */
    public $logBackupEnabled;

    /**
     * @description The time when cross-region log backup was enabled on the instance. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-06-12T05:44:21Z
     *
     * @var string
     */
    public $logBackupEnabledTime;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example CB7667B2-72C8-497B-9BD8-3B343CEF51AB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The policy that is used to retain the cross-region backup files of the instance. Default value: **1**. The value 1 indicates that the cross-region backup files of the instance are retained based on the specified retention period.
     *
     * @example 1
     *
     * @var int
     */
    public $retentType;

    /**
     * @description The number of days for which the cross-region backup files of the instance are retained. Valid values: **7 to 1825**.
     *
     * @example 15
     *
     * @var int
     */
    public $retention;
    protected $_name = [
        'backupEnabled'         => 'BackupEnabled',
        'backupEnabledTime'     => 'BackupEnabledTime',
        'crossBackupRegion'     => 'CrossBackupRegion',
        'crossBackupType'       => 'CrossBackupType',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'lockMode'              => 'LockMode',
        'logBackupEnabled'      => 'LogBackupEnabled',
        'logBackupEnabledTime'  => 'LogBackupEnabledTime',
        'regionId'              => 'RegionId',
        'requestId'             => 'RequestId',
        'retentType'            => 'RetentType',
        'retention'             => 'Retention',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupEnabled) {
            $res['BackupEnabled'] = $this->backupEnabled;
        }
        if (null !== $this->backupEnabledTime) {
            $res['BackupEnabledTime'] = $this->backupEnabledTime;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->crossBackupType) {
            $res['CrossBackupType'] = $this->crossBackupType;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->logBackupEnabled) {
            $res['LogBackupEnabled'] = $this->logBackupEnabled;
        }
        if (null !== $this->logBackupEnabledTime) {
            $res['LogBackupEnabledTime'] = $this->logBackupEnabledTime;
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

    /**
     * @param array $map
     *
     * @return DescribeInstanceCrossBackupPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupEnabled'])) {
            $model->backupEnabled = $map['BackupEnabled'];
        }
        if (isset($map['BackupEnabledTime'])) {
            $model->backupEnabledTime = $map['BackupEnabledTime'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['CrossBackupType'])) {
            $model->crossBackupType = $map['CrossBackupType'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LogBackupEnabled'])) {
            $model->logBackupEnabled = $map['LogBackupEnabled'];
        }
        if (isset($map['LogBackupEnabledTime'])) {
            $model->logBackupEnabledTime = $map['LogBackupEnabledTime'];
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
