<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items\backup\backupDownloadLinkByDB;
use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @description An array consisting of URLs from which you can download backup sets of individual databases.
     *
     * @var backupDownloadLinkByDB
     */
    public $backupDownloadLinkByDB;

    /**
     * @description The URL that is used to download the backup set over the Internet. If the backup set cannot be downloaded, null is returned.
     *
     * >  For example, if BackupMethod of an ApsaraDB RDS for SQL Server instance is set to **Snapshot**, a null string is returned.
     * @example http://rdsbak-hz-v3.oss-cn-hangzhou.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @description The end time of the backup task. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2019-02-13T12:20:00Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description The ID of the backup set.
     *
     * @example 321020562
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The initiator of the backup task. Valid values:
     *
     *   **System**
     *   **User**
     *
     * @example System
     *
     * @var string
     */
    public $backupInitiator;

    /**
     * @description The URL that is used to download the backup set over an internal network. If the backup set cannot be downloaded, null is returned.
     *
     * >  For example, if BackupMethod of an ApsaraDB RDS for SQL Server instance is set to **Snapshot**, a null string is returned.
     * @example http://rdsbak-hz-v3.oss-cn-hangzhou-internal.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @description The method that is used to generate the backup set. Valid values:
     *
     *   **Logical**: logical backup
     *   **Physical**: physical backup
     *   **Snapshot**: snapshot backup
     *
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description The backup mode of the backup set. Valid values:
     *
     *   **Automated**
     *   **Manual**
     *
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The size of the data backup file. Unit: bytes.
     *
     * @example 2167808
     *
     * @var int
     */
    public $backupSize;

    /**
     * @description The start time of the backup. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2019-02-03T12:20:00Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description The state of the backup set.
     *
     * @example Success
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @description The backup type of the backup set. Valid values:
     *
     *   **FullBackup**
     *   **IncrementalBackup**
     *
     * @example FullBackup
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The checksum. The value of this parameter is calculated by using the CRC64 algorithm.
     *
     * @example 1835830439**********
     *
     * @var string
     */
    public $checksum;

    /**
     * @description The point in time at which the data in the backup set is consistent. The return value of this parameter is a timestamp.
     *
     * >  If the instance runs MySQL 5.6, a timestamp is returned. Otherwise, the value 0 is returned.
     * @example 1576506856
     *
     * @var int
     */
    public $consistentTime;

    /**
     * @description The backup mode of the backup set. Valid values:
     *
     *   0: the standard mode. This mode supports full backups and incremental backups.
     *   1: the copy-only mode. This mode supports only full backups.
     *
     * >  This parameter is returned only when the instance runs SQL Server.
     * @example 0
     *
     * @var string
     */
    public $copyOnlyBackup;

    /**
     * @description The instance ID.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The encryption information about the backup set.
     *
     * @example {}
     *
     * @var string
     */
    public $encryption;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the instance that generates the backup set. This parameter is used to indicate whether the instance that generates the backup set is a primary instance or a secondary instance.
     *
     * @example 5882781
     *
     * @var string
     */
    public $hostInstanceID;

    /**
     * @description Indicates whether the backup set is available. Valid values:
     *
     *   **0**: The backup set is unavailable.
     *   **1**: The backup set is available.
     *
     * @example 1
     *
     * @var int
     */
    public $isAvail;

    /**
     * @description The status of the backup set that is used to restore individual databases or tables. Valid values:
     *
     *   **OK**: The data backup file is normal.
     *   **LARGE**: The data backup file contains an abnormally large number of tables. It cannot be used to restore individual databases or tables.
     *   **EMPTY**: The data backup file is generated from a failed backup task.
     *
     * >  If an empty string is returned, the data backup file cannot be used to restore individual databases or tables.
     * @example OK
     *
     * @var string
     */
    public $metaStatus;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The storage class of the backup set. Valid values:
     *
     *   **0**: regular storage
     *   **1**: archive storage
     *
     * @example 0
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description Indicates whether the backup set can be deleted. Valid values:
     *
     *   **Enabled**: The backup set can be deleted.
     *   **Disabled**: The backup set cannot be deleted.
     *
     * @example Disabled
     *
     * @var string
     */
    public $storeStatus;
    protected $_name = [
        'backupDownloadLinkByDB'    => 'BackupDownloadLinkByDB',
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupEndTime'             => 'BackupEndTime',
        'backupId'                  => 'BackupId',
        'backupInitiator'           => 'BackupInitiator',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupMethod'              => 'BackupMethod',
        'backupMode'                => 'BackupMode',
        'backupSize'                => 'BackupSize',
        'backupStartTime'           => 'BackupStartTime',
        'backupStatus'              => 'BackupStatus',
        'backupType'                => 'BackupType',
        'checksum'                  => 'Checksum',
        'consistentTime'            => 'ConsistentTime',
        'copyOnlyBackup'            => 'CopyOnlyBackup',
        'DBInstanceId'              => 'DBInstanceId',
        'encryption'                => 'Encryption',
        'engine'                    => 'Engine',
        'engineVersion'             => 'EngineVersion',
        'hostInstanceID'            => 'HostInstanceID',
        'isAvail'                   => 'IsAvail',
        'metaStatus'                => 'MetaStatus',
        'resourceGroupId'           => 'ResourceGroupId',
        'storageClass'              => 'StorageClass',
        'storeStatus'               => 'StoreStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDownloadLinkByDB) {
            $res['BackupDownloadLinkByDB'] = null !== $this->backupDownloadLinkByDB ? $this->backupDownloadLinkByDB->toMap() : null;
        }
        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupInitiator) {
            $res['BackupInitiator'] = $this->backupInitiator;
        }
        if (null !== $this->backupIntranetDownloadURL) {
            $res['BackupIntranetDownloadURL'] = $this->backupIntranetDownloadURL;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
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
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->copyOnlyBackup) {
            $res['CopyOnlyBackup'] = $this->copyOnlyBackup;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->metaStatus) {
            $res['MetaStatus'] = $this->metaStatus;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->storeStatus) {
            $res['StoreStatus'] = $this->storeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDownloadLinkByDB'])) {
            $model->backupDownloadLinkByDB = backupDownloadLinkByDB::fromMap($map['BackupDownloadLinkByDB']);
        }
        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupInitiator'])) {
            $model->backupInitiator = $map['BackupInitiator'];
        }
        if (isset($map['BackupIntranetDownloadURL'])) {
            $model->backupIntranetDownloadURL = $map['BackupIntranetDownloadURL'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
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
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['CopyOnlyBackup'])) {
            $model->copyOnlyBackup = $map['CopyOnlyBackup'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }
        if (isset($map['MetaStatus'])) {
            $model->metaStatus = $map['MetaStatus'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['StoreStatus'])) {
            $model->storeStatus = $map['StoreStatus'];
        }

        return $model;
    }
}
