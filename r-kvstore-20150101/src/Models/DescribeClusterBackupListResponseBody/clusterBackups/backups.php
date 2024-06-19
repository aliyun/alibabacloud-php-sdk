<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups\backups\extraInfo;
use AlibabaCloud\Tea\Model;

class backups extends Model
{
    /**
     * @description The public download URL of the backup file.
     *
     * @example http://rdsbakbucket-huhehaote-v2.oss-cn-huhehaote.aliyuncs.com/custins424747958/hins100322105_data_20240110012135.rdb
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @description The end time of the backup. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2024-01-09T17:21:57
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description The ID of the backup file.
     *
     * @example 514645788
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The internal download URL of the backup file.
     *
     * >  You can use this URL to download the backup file from an Elastic Compute Service (ECS) instance that is connected to the ApsaraDB for Redis instance. The ECS instance must belong to the same classic network or reside in the same virtual private cloud (VPC) as the ApsaraDB for Redis instance.
     * @example http://rdsbakbucket-huhehaote-v2.oss-cn-huhehaote-internal.aliyuncs.com/custins424747958/hins100322105_data_20240110012135.rdb
     *
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @description The backup name.
     *
     * @example hins100322105_data_20240110012135.rdb
     *
     * @var string
     */
    public $backupName;

    /**
     * @description The size of the backup file. Unit: bytes.
     *
     * @example 1024
     *
     * @var string
     */
    public $backupSize;

    /**
     * @description The start time of the backup. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2024-01-09T17:21:30Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description The status of the backup. Valid values:
     *
     *   **OK**
     *   **ERROR**
     *
     * @example OK
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @description The database engine. The return value is **redis**.
     *
     * @example redis
     *
     * @var string
     */
    public $engine;

    /**
     * @description The additional information.
     *
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @description The name of the instance.
     *
     * @example hins100322105_data_20240108012127.rdb
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates whether the backup set is available. Valid values:
     *
     *   **0**: unavailable
     *   **1**: available
     *
     * @example 1
     *
     * @var string
     */
    public $isAvail;

    /**
     * @var string
     */
    public $recoverConfigMode;
    protected $_name = [
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupEndTime'             => 'BackupEndTime',
        'backupId'                  => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupName'                => 'BackupName',
        'backupSize'                => 'BackupSize',
        'backupStartTime'           => 'BackupStartTime',
        'backupStatus'              => 'BackupStatus',
        'engine'                    => 'Engine',
        'extraInfo'                 => 'ExtraInfo',
        'instanceName'              => 'InstanceName',
        'isAvail'                   => 'IsAvail',
        'recoverConfigMode'         => 'RecoverConfigMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupIntranetDownloadURL) {
            $res['BackupIntranetDownloadURL'] = $this->backupIntranetDownloadURL;
        }
        if (null !== $this->backupName) {
            $res['BackupName'] = $this->backupName;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toMap() : null;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->recoverConfigMode) {
            $res['RecoverConfigMode'] = $this->recoverConfigMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupIntranetDownloadURL'])) {
            $model->backupIntranetDownloadURL = $map['BackupIntranetDownloadURL'];
        }
        if (isset($map['BackupName'])) {
            $model->backupName = $map['BackupName'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }
        if (isset($map['RecoverConfigMode'])) {
            $model->recoverConfigMode = $map['RecoverConfigMode'];
        }

        return $model;
    }
}
