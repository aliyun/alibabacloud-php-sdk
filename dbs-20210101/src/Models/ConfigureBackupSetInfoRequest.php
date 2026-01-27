<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Dara\Model;

class ConfigureBackupSetInfoRequest extends Model
{
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
    public $backupSetId;

    /**
     * @var string
     */
    public $backupSetName;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $checkSum;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $extraMeta;

    /**
     * @var string
     */
    public $regionCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $uploadStatus;
    protected $_name = [
        'backupMethod' => 'BackupMethod',
        'backupMode' => 'BackupMode',
        'backupSetId' => 'BackupSetId',
        'backupSetName' => 'BackupSetName',
        'backupType' => 'BackupType',
        'checkSum' => 'CheckSum',
        'clientToken' => 'ClientToken',
        'dataSourceId' => 'DataSourceId',
        'extraMeta' => 'ExtraMeta',
        'regionCode' => 'RegionCode',
        'regionId' => 'RegionId',
        'uploadStatus' => 'UploadStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }

        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }

        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }

        if (null !== $this->backupSetName) {
            $res['BackupSetName'] = $this->backupSetName;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->checkSum) {
            $res['CheckSum'] = $this->checkSum;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->extraMeta) {
            $res['ExtraMeta'] = $this->extraMeta;
        }

        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->uploadStatus) {
            $res['UploadStatus'] = $this->uploadStatus;
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
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }

        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }

        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }

        if (isset($map['BackupSetName'])) {
            $model->backupSetName = $map['BackupSetName'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['CheckSum'])) {
            $model->checkSum = $map['CheckSum'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['ExtraMeta'])) {
            $model->extraMeta = $map['ExtraMeta'];
        }

        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['UploadStatus'])) {
            $model->uploadStatus = $map['UploadStatus'];
        }

        return $model;
    }
}
