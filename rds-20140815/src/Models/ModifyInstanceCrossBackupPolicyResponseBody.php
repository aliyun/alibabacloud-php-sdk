<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceCrossBackupPolicyResponseBody extends Model
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
     * @description The ID of the region in which the cross-region backup files of the instance are stored.
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
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

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
     * @description The region ID of the source instance. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 50A6059D-6DBB-46C6-A851-1EE93C9013CF
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
        'backupEnabled'     => 'BackupEnabled',
        'crossBackupRegion' => 'CrossBackupRegion',
        'crossBackupType'   => 'CrossBackupType',
        'DBInstanceId'      => 'DBInstanceId',
        'logBackupEnabled'  => 'LogBackupEnabled',
        'regionId'          => 'RegionId',
        'requestId'         => 'RequestId',
        'retentType'        => 'RetentType',
        'retention'         => 'Retention',
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

    /**
     * @param array $map
     *
     * @return ModifyInstanceCrossBackupPolicyResponseBody
     */
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
