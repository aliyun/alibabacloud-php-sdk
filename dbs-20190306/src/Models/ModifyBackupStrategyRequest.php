<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $backupPeriod;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupStrategyType;

    /**
     * @var int
     */
    public $backupLogIntervalSeconds;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'backupPlanId'             => 'BackupPlanId',
        'backupPeriod'             => 'BackupPeriod',
        'backupStartTime'          => 'BackupStartTime',
        'backupStrategyType'       => 'BackupStrategyType',
        'backupLogIntervalSeconds' => 'BackupLogIntervalSeconds',
        'ownerId'                  => 'OwnerId',
        'clientToken'              => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStrategyType) {
            $res['BackupStrategyType'] = $this->backupStrategyType;
        }
        if (null !== $this->backupLogIntervalSeconds) {
            $res['BackupLogIntervalSeconds'] = $this->backupLogIntervalSeconds;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStrategyType'])) {
            $model->backupStrategyType = $map['BackupStrategyType'];
        }
        if (isset($map['BackupLogIntervalSeconds'])) {
            $model->backupLogIntervalSeconds = $map['BackupLogIntervalSeconds'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
