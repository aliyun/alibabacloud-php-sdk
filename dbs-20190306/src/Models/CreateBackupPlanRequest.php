<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupPlanRequest extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $databaseType;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $period;

    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $databaseRegion;

    /**
     * @var string
     */
    public $storageRegion;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $fromApp;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'region'         => 'Region',
        'instanceClass'  => 'InstanceClass',
        'databaseType'   => 'DatabaseType',
        'backupMethod'   => 'BackupMethod',
        'period'         => 'Period',
        'usedTime'       => 'UsedTime',
        'payType'        => 'PayType',
        'databaseRegion' => 'DatabaseRegion',
        'storageRegion'  => 'StorageRegion',
        'instanceType'   => 'InstanceType',
        'storageType'    => 'StorageType',
        'fromApp'        => 'FromApp',
        'ownerId'        => 'OwnerId',
        'clientToken'    => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->databaseRegion) {
            $res['DatabaseRegion'] = $this->databaseRegion;
        }
        if (null !== $this->storageRegion) {
            $res['StorageRegion'] = $this->storageRegion;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->fromApp) {
            $res['FromApp'] = $this->fromApp;
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
     * @return CreateBackupPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DatabaseRegion'])) {
            $model->databaseRegion = $map['DatabaseRegion'];
        }
        if (isset($map['StorageRegion'])) {
            $model->storageRegion = $map['StorageRegion'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['FromApp'])) {
            $model->fromApp = $map['FromApp'];
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
