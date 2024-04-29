<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupDataListResponseBody\data;

use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupDataListResponseBody\data\content\polarSnapshot;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example http://oss.com/****
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @example 2024-04-17T17:00:32Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @example 213088****
     *
     * @var string
     */
    public $backupId;

    /**
     * @example http://oss.com/****
     *
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @example logic
     *
     * @var string
     */
    public $backupLocation;

    /**
     * @example Snapshot
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @example logic_backup
     *
     * @var string
     */
    public $backupName;

    /**
     * @example DBInstance
     *
     * @var string
     */
    public $backupScale;

    /**
     * @example 25669140480
     *
     * @var int
     */
    public $backupSize;

    /**
     * @example 2024-04-17T17:00:16Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @example OK
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @example FullBackup
     *
     * @var string
     */
    public $backupType;

    /**
     * @example 84a4c16431f969712e6895992719****
     *
     * @var string
     */
    public $checksum;

    /**
     * @example 1713373221
     *
     * @var int
     */
    public $consistentTime;

    /**
     * @example psk2
     *
     * @var string
     */
    public $encryption;

    /**
     * @example polardb_mysql
     *
     * @var string
     */
    public $engine;

    /**
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example 2024-04-19T05:00:49Z
     *
     * @var string
     */
    public $expectExpireTime;

    /**
     * @example DELAY
     *
     * @var string
     */
    public $expectExpireType;

    /**
     * @example pc-2ze3nrr64c5******
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 1
     *
     * @var int
     */
    public $isAvail;

    /**
     * @var polarSnapshot
     */
    public $polarSnapshot;

    /**
     * @example 0
     *
     * @var int
     */
    public $supportDeletion;
    protected $_name = [
        'backupDownloadURL'         => 'BackupDownloadURL',
        'backupEndTime'             => 'BackupEndTime',
        'backupId'                  => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupLocation'            => 'BackupLocation',
        'backupMethod'              => 'BackupMethod',
        'backupMode'                => 'BackupMode',
        'backupName'                => 'BackupName',
        'backupScale'               => 'BackupScale',
        'backupSize'                => 'BackupSize',
        'backupStartTime'           => 'BackupStartTime',
        'backupStatus'              => 'BackupStatus',
        'backupType'                => 'BackupType',
        'checksum'                  => 'Checksum',
        'consistentTime'            => 'ConsistentTime',
        'encryption'                => 'Encryption',
        'engine'                    => 'Engine',
        'engineVersion'             => 'EngineVersion',
        'expectExpireTime'          => 'ExpectExpireTime',
        'expectExpireType'          => 'ExpectExpireType',
        'instanceName'              => 'InstanceName',
        'isAvail'                   => 'IsAvail',
        'polarSnapshot'             => 'PolarSnapshot',
        'supportDeletion'           => 'SupportDeletion',
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
        if (null !== $this->backupLocation) {
            $res['BackupLocation'] = $this->backupLocation;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupName) {
            $res['BackupName'] = $this->backupName;
        }
        if (null !== $this->backupScale) {
            $res['BackupScale'] = $this->backupScale;
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
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expectExpireTime) {
            $res['ExpectExpireTime'] = $this->expectExpireTime;
        }
        if (null !== $this->expectExpireType) {
            $res['ExpectExpireType'] = $this->expectExpireType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->polarSnapshot) {
            $res['PolarSnapshot'] = null !== $this->polarSnapshot ? $this->polarSnapshot->toMap() : null;
        }
        if (null !== $this->supportDeletion) {
            $res['SupportDeletion'] = $this->supportDeletion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
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
        if (isset($map['BackupLocation'])) {
            $model->backupLocation = $map['BackupLocation'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupName'])) {
            $model->backupName = $map['BackupName'];
        }
        if (isset($map['BackupScale'])) {
            $model->backupScale = $map['BackupScale'];
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
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpectExpireTime'])) {
            $model->expectExpireTime = $map['ExpectExpireTime'];
        }
        if (isset($map['ExpectExpireType'])) {
            $model->expectExpireType = $map['ExpectExpireType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }
        if (isset($map['PolarSnapshot'])) {
            $model->polarSnapshot = polarSnapshot::fromMap($map['PolarSnapshot']);
        }
        if (isset($map['SupportDeletion'])) {
            $model->supportDeletion = $map['SupportDeletion'];
        }

        return $model;
    }
}
