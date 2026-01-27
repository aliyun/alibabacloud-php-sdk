<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupDataListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupDataListResponseBody\data\content\polarSnapshot;

class content extends Model
{
    /**
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @var string
     */
    public $backupLocation;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $backupName;

    /**
     * @var string
     */
    public $backupScale;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $checksum;

    /**
     * @var int
     */
    public $consistentTime;

    /**
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
     * @var string
     */
    public $expectExpireTime;

    /**
     * @var string
     */
    public $expectExpireType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $isAvail;

    /**
     * @var polarSnapshot
     */
    public $polarSnapshot;

    /**
     * @var int
     */
    public $supportDeletion;
    protected $_name = [
        'backupDownloadURL' => 'BackupDownloadURL',
        'backupEndTime' => 'BackupEndTime',
        'backupId' => 'BackupId',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupLocation' => 'BackupLocation',
        'backupMethod' => 'BackupMethod',
        'backupMode' => 'BackupMode',
        'backupName' => 'BackupName',
        'backupScale' => 'BackupScale',
        'backupSize' => 'BackupSize',
        'backupStartTime' => 'BackupStartTime',
        'backupStatus' => 'BackupStatus',
        'backupType' => 'BackupType',
        'checksum' => 'Checksum',
        'consistentTime' => 'ConsistentTime',
        'encryption' => 'Encryption',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expectExpireTime' => 'ExpectExpireTime',
        'expectExpireType' => 'ExpectExpireType',
        'instanceName' => 'InstanceName',
        'isAvail' => 'IsAvail',
        'polarSnapshot' => 'PolarSnapshot',
        'supportDeletion' => 'SupportDeletion',
    ];

    public function validate()
    {
        if (null !== $this->polarSnapshot) {
            $this->polarSnapshot->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['PolarSnapshot'] = null !== $this->polarSnapshot ? $this->polarSnapshot->toArray($noStream) : $this->polarSnapshot;
        }

        if (null !== $this->supportDeletion) {
            $res['SupportDeletion'] = $this->supportDeletion;
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
