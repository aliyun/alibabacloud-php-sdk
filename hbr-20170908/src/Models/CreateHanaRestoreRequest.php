<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class CreateHanaRestoreRequest extends Model
{
    /**
     * @var int
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupPrefix;

    /**
     * @var bool
     */
    public $checkAccess;

    /**
     * @var bool
     */
    public $clearLog;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $logPosition;

    /**
     * @var string
     */
    public $masterClientId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $recoveryPointInTime;

    /**
     * @var string
     */
    public $sidAdmin;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceClusterId;

    /**
     * @var bool
     */
    public $systemCopy;

    /**
     * @var bool
     */
    public $useCatalog;

    /**
     * @var bool
     */
    public $useDelta;

    /**
     * @var string
     */
    public $vaultId;

    /**
     * @var int
     */
    public $volumeId;
    protected $_name = [
        'backupId' => 'BackupId',
        'backupPrefix' => 'BackupPrefix',
        'checkAccess' => 'CheckAccess',
        'clearLog' => 'ClearLog',
        'clusterId' => 'ClusterId',
        'databaseName' => 'DatabaseName',
        'logPosition' => 'LogPosition',
        'masterClientId' => 'MasterClientId',
        'mode' => 'Mode',
        'recoveryPointInTime' => 'RecoveryPointInTime',
        'sidAdmin' => 'SidAdmin',
        'source' => 'Source',
        'sourceClusterId' => 'SourceClusterId',
        'systemCopy' => 'SystemCopy',
        'useCatalog' => 'UseCatalog',
        'useDelta' => 'UseDelta',
        'vaultId' => 'VaultId',
        'volumeId' => 'VolumeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }

        if (null !== $this->backupPrefix) {
            $res['BackupPrefix'] = $this->backupPrefix;
        }

        if (null !== $this->checkAccess) {
            $res['CheckAccess'] = $this->checkAccess;
        }

        if (null !== $this->clearLog) {
            $res['ClearLog'] = $this->clearLog;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->logPosition) {
            $res['LogPosition'] = $this->logPosition;
        }

        if (null !== $this->masterClientId) {
            $res['MasterClientId'] = $this->masterClientId;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->recoveryPointInTime) {
            $res['RecoveryPointInTime'] = $this->recoveryPointInTime;
        }

        if (null !== $this->sidAdmin) {
            $res['SidAdmin'] = $this->sidAdmin;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceClusterId) {
            $res['SourceClusterId'] = $this->sourceClusterId;
        }

        if (null !== $this->systemCopy) {
            $res['SystemCopy'] = $this->systemCopy;
        }

        if (null !== $this->useCatalog) {
            $res['UseCatalog'] = $this->useCatalog;
        }

        if (null !== $this->useDelta) {
            $res['UseDelta'] = $this->useDelta;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
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
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        if (isset($map['BackupPrefix'])) {
            $model->backupPrefix = $map['BackupPrefix'];
        }

        if (isset($map['CheckAccess'])) {
            $model->checkAccess = $map['CheckAccess'];
        }

        if (isset($map['ClearLog'])) {
            $model->clearLog = $map['ClearLog'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['LogPosition'])) {
            $model->logPosition = $map['LogPosition'];
        }

        if (isset($map['MasterClientId'])) {
            $model->masterClientId = $map['MasterClientId'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['RecoveryPointInTime'])) {
            $model->recoveryPointInTime = $map['RecoveryPointInTime'];
        }

        if (isset($map['SidAdmin'])) {
            $model->sidAdmin = $map['SidAdmin'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceClusterId'])) {
            $model->sourceClusterId = $map['SourceClusterId'];
        }

        if (isset($map['SystemCopy'])) {
            $model->systemCopy = $map['SystemCopy'];
        }

        if (isset($map['UseCatalog'])) {
            $model->useCatalog = $map['UseCatalog'];
        }

        if (isset($map['UseDelta'])) {
            $model->useDelta = $map['UseDelta'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }

        return $model;
    }
}
