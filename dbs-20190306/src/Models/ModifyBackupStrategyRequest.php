<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupStrategyRequest extends Model
{
    /**
     * @var int
     */
    public $backupLogIntervalSeconds;

    /**
     * @var string
     */
    public $backupPeriod;

    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupStrategyType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'backupLogIntervalSeconds' => 'BackupLogIntervalSeconds',
        'backupPeriod'             => 'BackupPeriod',
        'backupPlanId'             => 'BackupPlanId',
        'backupStartTime'          => 'BackupStartTime',
        'backupStrategyType'       => 'BackupStrategyType',
        'clientToken'              => 'ClientToken',
        'ownerId'                  => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupLogIntervalSeconds) {
            $res['BackupLogIntervalSeconds'] = $this->backupLogIntervalSeconds;
        }
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStrategyType) {
            $res['BackupStrategyType'] = $this->backupStrategyType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['BackupLogIntervalSeconds'])) {
            $model->backupLogIntervalSeconds = $map['BackupLogIntervalSeconds'];
        }
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStrategyType'])) {
            $model->backupStrategyType = $map['BackupStrategyType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
