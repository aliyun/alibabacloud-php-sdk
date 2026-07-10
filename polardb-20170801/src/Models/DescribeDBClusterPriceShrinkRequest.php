<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBClusterPriceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $creationCategory;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string[]
     */
    public $DBNodeIds;

    /**
     * @var int
     */
    public $DBNodeNum;

    /**
     * @var string
     */
    public $DBNodesShrink;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $hotStandbyCluster;

    /**
     * @var string
     */
    public $modifyType;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $provisionedIops;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serverlessType;

    /**
     * @var string
     */
    public $storageChargeType;

    /**
     * @var string
     */
    public $storageSpace;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $usedTime;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'creationCategory' => 'CreationCategory',
        'DBClusterId' => 'DBClusterId',
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeIds' => 'DBNodeIds',
        'DBNodeNum' => 'DBNodeNum',
        'DBNodesShrink' => 'DBNodes',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'hotStandbyCluster' => 'HotStandbyCluster',
        'modifyType' => 'ModifyType',
        'orderType' => 'OrderType',
        'payType' => 'PayType',
        'period' => 'Period',
        'provisionedIops' => 'ProvisionedIops',
        'regionId' => 'RegionId',
        'serverlessType' => 'ServerlessType',
        'storageChargeType' => 'StorageChargeType',
        'storageSpace' => 'StorageSpace',
        'storageType' => 'StorageType',
        'usedTime' => 'UsedTime',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodeIds)) {
            Model::validateArray($this->DBNodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationCategory) {
            $res['CreationCategory'] = $this->creationCategory;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }

        if (null !== $this->DBNodeIds) {
            if (\is_array($this->DBNodeIds)) {
                $res['DBNodeIds'] = [];
                $n1 = 0;
                foreach ($this->DBNodeIds as $item1) {
                    $res['DBNodeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBNodeNum) {
            $res['DBNodeNum'] = $this->DBNodeNum;
        }

        if (null !== $this->DBNodesShrink) {
            $res['DBNodes'] = $this->DBNodesShrink;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }

        if (null !== $this->hotStandbyCluster) {
            $res['HotStandbyCluster'] = $this->hotStandbyCluster;
        }

        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serverlessType) {
            $res['ServerlessType'] = $this->serverlessType;
        }

        if (null !== $this->storageChargeType) {
            $res['StorageChargeType'] = $this->storageChargeType;
        }

        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['CreationCategory'])) {
            $model->creationCategory = $map['CreationCategory'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }

        if (isset($map['DBNodeIds'])) {
            if (!empty($map['DBNodeIds'])) {
                $model->DBNodeIds = [];
                $n1 = 0;
                foreach ($map['DBNodeIds'] as $item1) {
                    $model->DBNodeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DBNodeNum'])) {
            $model->DBNodeNum = $map['DBNodeNum'];
        }

        if (isset($map['DBNodes'])) {
            $model->DBNodesShrink = $map['DBNodes'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }

        if (isset($map['HotStandbyCluster'])) {
            $model->hotStandbyCluster = $map['HotStandbyCluster'];
        }

        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServerlessType'])) {
            $model->serverlessType = $map['ServerlessType'];
        }

        if (isset($map['StorageChargeType'])) {
            $model->storageChargeType = $map['StorageChargeType'];
        }

        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
