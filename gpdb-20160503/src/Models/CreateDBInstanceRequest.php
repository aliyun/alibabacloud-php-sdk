<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $createSampleData;

    /**
     * @var string
     */
    public $DBInstanceCategory;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceGroupCount;

    /**
     * @var string
     */
    public $DBInstanceMode;

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
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $masterNodeNum;

    /**
     * @var int
     */
    public $ownerId;

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
    public $privateIpAddress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $segNodeNum;

    /**
     * @var string
     */
    public $segStorageType;

    /**
     * @var int
     */
    public $storageSize;

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
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'createSampleData'      => 'CreateSampleData',
        'DBInstanceCategory'    => 'DBInstanceCategory',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceGroupCount'  => 'DBInstanceGroupCount',
        'DBInstanceMode'        => 'DBInstanceMode',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'instanceSpec'          => 'InstanceSpec',
        'masterNodeNum'         => 'MasterNodeNum',
        'ownerId'               => 'OwnerId',
        'payType'               => 'PayType',
        'period'                => 'Period',
        'privateIpAddress'      => 'PrivateIpAddress',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'securityIPList'        => 'SecurityIPList',
        'segNodeNum'            => 'SegNodeNum',
        'segStorageType'        => 'SegStorageType',
        'storageSize'           => 'StorageSize',
        'storageType'           => 'StorageType',
        'usedTime'              => 'UsedTime',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->createSampleData) {
            $res['CreateSampleData'] = $this->createSampleData;
        }
        if (null !== $this->DBInstanceCategory) {
            $res['DBInstanceCategory'] = $this->DBInstanceCategory;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceGroupCount) {
            $res['DBInstanceGroupCount'] = $this->DBInstanceGroupCount;
        }
        if (null !== $this->DBInstanceMode) {
            $res['DBInstanceMode'] = $this->DBInstanceMode;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->masterNodeNum) {
            $res['MasterNodeNum'] = $this->masterNodeNum;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->segNodeNum) {
            $res['SegNodeNum'] = $this->segNodeNum;
        }
        if (null !== $this->segStorageType) {
            $res['SegStorageType'] = $this->segStorageType;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CreateSampleData'])) {
            $model->createSampleData = $map['CreateSampleData'];
        }
        if (isset($map['DBInstanceCategory'])) {
            $model->DBInstanceCategory = $map['DBInstanceCategory'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceGroupCount'])) {
            $model->DBInstanceGroupCount = $map['DBInstanceGroupCount'];
        }
        if (isset($map['DBInstanceMode'])) {
            $model->DBInstanceMode = $map['DBInstanceMode'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['MasterNodeNum'])) {
            $model->masterNodeNum = $map['MasterNodeNum'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SegNodeNum'])) {
            $model->segNodeNum = $map['SegNodeNum'];
        }
        if (isset($map['SegStorageType'])) {
            $model->segStorageType = $map['SegStorageType'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
