<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Dara\Model;

class ModifyStorageStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var string
     */
    public $backupStorageEncryptMethod;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $duplicationArchivePeriod;

    /**
     * @var int
     */
    public $duplicationInfrequentAccessPeriod;

    /**
     * @var string
     */
    public $incrementBackupRetentionPeriod;

    /**
     * @var string
     */
    public $incrementDuplicationArchivePeriod;

    /**
     * @var string
     */
    public $incrementDuplicationInfrequentAccessPeriod;

    /**
     * @var string
     */
    public $logBackupRetentionPeriod;

    /**
     * @var string
     */
    public $logDuplicationArchivePeriod;

    /**
     * @var string
     */
    public $logDuplicationInfrequentAccessPeriod;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'backupPlanId' => 'BackupPlanId',
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'backupStorageEncryptMethod' => 'BackupStorageEncryptMethod',
        'clientToken' => 'ClientToken',
        'duplicationArchivePeriod' => 'DuplicationArchivePeriod',
        'duplicationInfrequentAccessPeriod' => 'DuplicationInfrequentAccessPeriod',
        'incrementBackupRetentionPeriod' => 'IncrementBackupRetentionPeriod',
        'incrementDuplicationArchivePeriod' => 'IncrementDuplicationArchivePeriod',
        'incrementDuplicationInfrequentAccessPeriod' => 'IncrementDuplicationInfrequentAccessPeriod',
        'logBackupRetentionPeriod' => 'LogBackupRetentionPeriod',
        'logDuplicationArchivePeriod' => 'LogDuplicationArchivePeriod',
        'logDuplicationInfrequentAccessPeriod' => 'LogDuplicationInfrequentAccessPeriod',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }

        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }

        if (null !== $this->backupStorageEncryptMethod) {
            $res['BackupStorageEncryptMethod'] = $this->backupStorageEncryptMethod;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->duplicationArchivePeriod) {
            $res['DuplicationArchivePeriod'] = $this->duplicationArchivePeriod;
        }

        if (null !== $this->duplicationInfrequentAccessPeriod) {
            $res['DuplicationInfrequentAccessPeriod'] = $this->duplicationInfrequentAccessPeriod;
        }

        if (null !== $this->incrementBackupRetentionPeriod) {
            $res['IncrementBackupRetentionPeriod'] = $this->incrementBackupRetentionPeriod;
        }

        if (null !== $this->incrementDuplicationArchivePeriod) {
            $res['IncrementDuplicationArchivePeriod'] = $this->incrementDuplicationArchivePeriod;
        }

        if (null !== $this->incrementDuplicationInfrequentAccessPeriod) {
            $res['IncrementDuplicationInfrequentAccessPeriod'] = $this->incrementDuplicationInfrequentAccessPeriod;
        }

        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        }

        if (null !== $this->logDuplicationArchivePeriod) {
            $res['LogDuplicationArchivePeriod'] = $this->logDuplicationArchivePeriod;
        }

        if (null !== $this->logDuplicationInfrequentAccessPeriod) {
            $res['LogDuplicationInfrequentAccessPeriod'] = $this->logDuplicationInfrequentAccessPeriod;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }

        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }

        if (isset($map['BackupStorageEncryptMethod'])) {
            $model->backupStorageEncryptMethod = $map['BackupStorageEncryptMethod'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DuplicationArchivePeriod'])) {
            $model->duplicationArchivePeriod = $map['DuplicationArchivePeriod'];
        }

        if (isset($map['DuplicationInfrequentAccessPeriod'])) {
            $model->duplicationInfrequentAccessPeriod = $map['DuplicationInfrequentAccessPeriod'];
        }

        if (isset($map['IncrementBackupRetentionPeriod'])) {
            $model->incrementBackupRetentionPeriod = $map['IncrementBackupRetentionPeriod'];
        }

        if (isset($map['IncrementDuplicationArchivePeriod'])) {
            $model->incrementDuplicationArchivePeriod = $map['IncrementDuplicationArchivePeriod'];
        }

        if (isset($map['IncrementDuplicationInfrequentAccessPeriod'])) {
            $model->incrementDuplicationInfrequentAccessPeriod = $map['IncrementDuplicationInfrequentAccessPeriod'];
        }

        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }

        if (isset($map['LogDuplicationArchivePeriod'])) {
            $model->logDuplicationArchivePeriod = $map['LogDuplicationArchivePeriod'];
        }

        if (isset($map['LogDuplicationInfrequentAccessPeriod'])) {
            $model->logDuplicationInfrequentAccessPeriod = $map['LogDuplicationInfrequentAccessPeriod'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
