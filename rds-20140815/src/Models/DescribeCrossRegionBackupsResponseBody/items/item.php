<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponseBody\items\item\restoreRegions;

class item extends Model
{
    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var int
     */
    public $backupSetScale;

    /**
     * @var int
     */
    public $backupSetStatus;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $consistentTime;

    /**
     * @var string
     */
    public $crossBackupDownloadLink;

    /**
     * @var int
     */
    public $crossBackupId;

    /**
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @var string
     */
    public $crossBackupSetFile;

    /**
     * @var string
     */
    public $crossBackupSetLocation;

    /**
     * @var int
     */
    public $crossBackupSetSize;

    /**
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var restoreRegions
     */
    public $restoreRegions;
    protected $_name = [
        'backupEndTime' => 'BackupEndTime',
        'backupMethod' => 'BackupMethod',
        'backupSetScale' => 'BackupSetScale',
        'backupSetStatus' => 'BackupSetStatus',
        'backupStartTime' => 'BackupStartTime',
        'backupType' => 'BackupType',
        'category' => 'Category',
        'consistentTime' => 'ConsistentTime',
        'crossBackupDownloadLink' => 'CrossBackupDownloadLink',
        'crossBackupId' => 'CrossBackupId',
        'crossBackupRegion' => 'CrossBackupRegion',
        'crossBackupSetFile' => 'CrossBackupSetFile',
        'crossBackupSetLocation' => 'CrossBackupSetLocation',
        'crossBackupSetSize' => 'CrossBackupSetSize',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'instanceId' => 'InstanceId',
        'restoreRegions' => 'RestoreRegions',
    ];

    public function validate()
    {
        if (null !== $this->restoreRegions) {
            $this->restoreRegions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RestoreRegions'] = null !== $this->restoreRegions ? $this->restoreRegions->toArray($noStream) : $this->restoreRegions;
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
