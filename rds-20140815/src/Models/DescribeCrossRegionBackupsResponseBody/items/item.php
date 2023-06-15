<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponseBody\items\item\restoreRegions;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The time when the cross-region data backup file was generated.
     *
     * @example 2019-06-15T12:10:00Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description The method that is used to generate the cross-region data backup file. Valid values:
     *
     *   **L**: logical backup
     *   **P**: physical backup
     *
     * @example P
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description The level at which the cross-region data backup file is generated.
     *
     *   **0**: instance-level backup
     *   **1**: database-level backup
     *
     * @example 0
     *
     * @var int
     */
    public $backupSetScale;

    /**
     * @description The status of the cross-region data backup. Valid values:
     *
     *   **0**: The cross-region data backup is successful.
     *   **1**: The cross-region data backup failed.
     *
     * @example 0
     *
     * @var int
     */
    public $backupSetStatus;

    /**
     * @description The time when the cross-region data backup started.
     *
     * @example 2019-05-30T12:10:00Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description The type of the cross-region data backup. Valid values:
     *
     *   **F**: full data backup
     *   **I**: incremental data backup
     *
     * @example F
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   **Basic**: Basic Edition.
     *   **HighAvailability**: High-availability Edition.
     *   **Finance**: Enterprise Edition. This edition is supported only by the China site (aliyun.com).
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @description The point in time that is indicated by the data in the cross-region data backup file.
     *
     * @example 2019-06-12T05:44:46Z
     *
     * @var string
     */
    public $consistentTime;

    /**
     * @description The external URL from which you can download the cross-region data backup file.
     *
     * @example http://rdsddrbak-shanghai.oss-cn-shanghai.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $crossBackupDownloadLink;

    /**
     * @description The ID of the cross-region data backup file.
     *
     * @example 14377
     *
     * @var int
     */
    public $crossBackupId;

    /**
     * @description The ID of the destination region where the cross-region data backup file of the instance is stored.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description The name of the compressed package that contains the cross-region data backup file.
     *
     * @example cn-hangzhou_rm-xxxxx_hins81xxx_data_20190612134426_qp.xb
     *
     * @var string
     */
    public $crossBackupSetFile;

    /**
     * @description The location where the cross-region data backup file is stored.
     *
     * @example oss
     *
     * @var string
     */
    public $crossBackupSetLocation;

    /**
     * @description The size of the cross-region data backup file. Unit: bytes.
     *
     * @example 5312836
     *
     * @var int
     */
    public $crossBackupSetSize;

    /**
     * @description The storage type. Valid values:
     *
     *   **local_ssd**: local SSD. This is the recommended storage type.
     *   **cloud_ssd**: standard SSD.
     *   **cloud_essd**: enhanced SSD (ESSD).
     *
     * @example ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The engine of the database.
     *
     * @example mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine.
     *
     * @example 5.6
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the instance. This parameter is used to determine whether the instance that generates the cross-region data backup file is a primary or secondary instance.
     *
     * @example 8161055
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description An array that consists of the regions to which the cross-region data backup file can be restored.
     *
     * @var restoreRegions
     */
    public $restoreRegions;
    protected $_name = [
        'backupEndTime'           => 'BackupEndTime',
        'backupMethod'            => 'BackupMethod',
        'backupSetScale'          => 'BackupSetScale',
        'backupSetStatus'         => 'BackupSetStatus',
        'backupStartTime'         => 'BackupStartTime',
        'backupType'              => 'BackupType',
        'category'                => 'Category',
        'consistentTime'          => 'ConsistentTime',
        'crossBackupDownloadLink' => 'CrossBackupDownloadLink',
        'crossBackupId'           => 'CrossBackupId',
        'crossBackupRegion'       => 'CrossBackupRegion',
        'crossBackupSetFile'      => 'CrossBackupSetFile',
        'crossBackupSetLocation'  => 'CrossBackupSetLocation',
        'crossBackupSetSize'      => 'CrossBackupSetSize',
        'DBInstanceStorageType'   => 'DBInstanceStorageType',
        'engine'                  => 'Engine',
        'engineVersion'           => 'EngineVersion',
        'instanceId'              => 'InstanceId',
        'restoreRegions'          => 'RestoreRegions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupSetScale) {
            $res['BackupSetScale'] = $this->backupSetScale;
        }
        if (null !== $this->backupSetStatus) {
            $res['BackupSetStatus'] = $this->backupSetStatus;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->crossBackupDownloadLink) {
            $res['CrossBackupDownloadLink'] = $this->crossBackupDownloadLink;
        }
        if (null !== $this->crossBackupId) {
            $res['CrossBackupId'] = $this->crossBackupId;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->crossBackupSetFile) {
            $res['CrossBackupSetFile'] = $this->crossBackupSetFile;
        }
        if (null !== $this->crossBackupSetLocation) {
            $res['CrossBackupSetLocation'] = $this->crossBackupSetLocation;
        }
        if (null !== $this->crossBackupSetSize) {
            $res['CrossBackupSetSize'] = $this->crossBackupSetSize;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->restoreRegions) {
            $res['RestoreRegions'] = null !== $this->restoreRegions ? $this->restoreRegions->toMap() : null;
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
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupSetScale'])) {
            $model->backupSetScale = $map['BackupSetScale'];
        }
        if (isset($map['BackupSetStatus'])) {
            $model->backupSetStatus = $map['BackupSetStatus'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['CrossBackupDownloadLink'])) {
            $model->crossBackupDownloadLink = $map['CrossBackupDownloadLink'];
        }
        if (isset($map['CrossBackupId'])) {
            $model->crossBackupId = $map['CrossBackupId'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['CrossBackupSetFile'])) {
            $model->crossBackupSetFile = $map['CrossBackupSetFile'];
        }
        if (isset($map['CrossBackupSetLocation'])) {
            $model->crossBackupSetLocation = $map['CrossBackupSetLocation'];
        }
        if (isset($map['CrossBackupSetSize'])) {
            $model->crossBackupSetSize = $map['CrossBackupSetSize'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RestoreRegions'])) {
            $model->restoreRegions = restoreRegions::fromMap($map['RestoreRegions']);
        }

        return $model;
    }
}
