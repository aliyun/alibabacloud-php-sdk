<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetBackupConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $backupMode;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $enableBackup;

    /**
     * @var bool
     */
    public $enableBackupVoice;

    /**
     * @var int
     */
    public $expireSeconds;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $pathVoice;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'backupMode' => 'BackupMode',
        'bucket' => 'Bucket',
        'enable' => 'Enable',
        'enableBackup' => 'EnableBackup',
        'enableBackupVoice' => 'EnableBackupVoice',
        'expireSeconds' => 'ExpireSeconds',
        'gmtModified' => 'GmtModified',
        'path' => 'Path',
        'pathVoice' => 'PathVoice',
        'region' => 'Region',
        'requestId' => 'RequestId',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }

        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->enableBackup) {
            $res['EnableBackup'] = $this->enableBackup;
        }

        if (null !== $this->enableBackupVoice) {
            $res['EnableBackupVoice'] = $this->enableBackupVoice;
        }

        if (null !== $this->expireSeconds) {
            $res['ExpireSeconds'] = $this->expireSeconds;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->pathVoice) {
            $res['PathVoice'] = $this->pathVoice;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }

        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EnableBackup'])) {
            $model->enableBackup = $map['EnableBackup'];
        }

        if (isset($map['EnableBackupVoice'])) {
            $model->enableBackupVoice = $map['EnableBackupVoice'];
        }

        if (isset($map['ExpireSeconds'])) {
            $model->expireSeconds = $map['ExpireSeconds'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['PathVoice'])) {
            $model->pathVoice = $map['PathVoice'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
