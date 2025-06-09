<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsBackupPlanResponseBody;

use AlibabaCloud\Dara\Model;

class backupPlan extends Model
{
    /**
     * @var string
     */
    public $backupPeriod;

    /**
     * @var string
     */
    public $backupPlanCreateTime;

    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $backupPlanName;

    /**
     * @var string
     */
    public $backupPlanStatus;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $databaseType;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'backupPeriod' => 'BackupPeriod',
        'backupPlanCreateTime' => 'BackupPlanCreateTime',
        'backupPlanId' => 'BackupPlanId',
        'backupPlanName' => 'BackupPlanName',
        'backupPlanStatus' => 'BackupPlanStatus',
        'backupStartTime' => 'BackupStartTime',
        'databaseType' => 'DatabaseType',
        'ecsInstanceId' => 'EcsInstanceId',
        'instanceClass' => 'InstanceClass',
        'resourceGroupId' => 'ResourceGroupId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }

        if (null !== $this->backupPlanCreateTime) {
            $res['BackupPlanCreateTime'] = $this->backupPlanCreateTime;
        }

        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }

        if (null !== $this->backupPlanName) {
            $res['BackupPlanName'] = $this->backupPlanName;
        }

        if (null !== $this->backupPlanStatus) {
            $res['BackupPlanStatus'] = $this->backupPlanStatus;
        }

        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }

        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }

        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }

        if (isset($map['BackupPlanCreateTime'])) {
            $model->backupPlanCreateTime = $map['BackupPlanCreateTime'];
        }

        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }

        if (isset($map['BackupPlanName'])) {
            $model->backupPlanName = $map['BackupPlanName'];
        }

        if (isset($map['BackupPlanStatus'])) {
            $model->backupPlanStatus = $map['BackupPlanStatus'];
        }

        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }

        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }

        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
