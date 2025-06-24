<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceResponseBody\engineList;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceResponseBody\storageUsage;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceResponseBody\whiteIpList;

class GetLindormV2InstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $arbiterVSwitchId;

    /**
     * @var string
     */
    public $arbiterZoneId;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $coldStorage;

    /**
     * @var int
     */
    public $createMilliseconds;

    /**
     * @var string
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $diskThreshold;

    /**
     * @var string
     */
    public $diskUsage;

    /**
     * @var bool
     */
    public $enableCompute;

    /**
     * @var engineList[]
     */
    public $engineList;

    /**
     * @var int
     */
    public $expiredMilliseconds;

    /**
     * @var string
     */
    public $initialRootPassword;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $primaryVSwitchId;

    /**
     * @var string
     */
    public $primaryZoneId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $standbyVSwitchId;

    /**
     * @var string
     */
    public $standbyZoneId;

    /**
     * @var storageUsage
     */
    public $storageUsage;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var whiteIpList[]
     */
    public $whiteIpList;

    /**
     * @var mixed[]
     */
    public $zoneEngineInfoMap;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'arbiterVSwitchId' => 'ArbiterVSwitchId',
        'arbiterZoneId' => 'ArbiterZoneId',
        'autoRenew' => 'AutoRenew',
        'coldStorage' => 'ColdStorage',
        'createMilliseconds' => 'CreateMilliseconds',
        'deletionProtection' => 'DeletionProtection',
        'diskCategory' => 'DiskCategory',
        'diskThreshold' => 'DiskThreshold',
        'diskUsage' => 'DiskUsage',
        'enableCompute' => 'EnableCompute',
        'engineList' => 'EngineList',
        'expiredMilliseconds' => 'ExpiredMilliseconds',
        'initialRootPassword' => 'InitialRootPassword',
        'instanceAlias' => 'InstanceAlias',
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'instanceType' => 'InstanceType',
        'maintainEndTime' => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'networkType' => 'NetworkType',
        'payType' => 'PayType',
        'primaryVSwitchId' => 'PrimaryVSwitchId',
        'primaryZoneId' => 'PrimaryZoneId',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceType' => 'ServiceType',
        'standbyVSwitchId' => 'StandbyVSwitchId',
        'standbyZoneId' => 'StandbyZoneId',
        'storageUsage' => 'StorageUsage',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
        'whiteIpList' => 'WhiteIpList',
        'zoneEngineInfoMap' => 'ZoneEngineInfoMap',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->engineList)) {
            Model::validateArray($this->engineList);
        }
        if (null !== $this->storageUsage) {
            $this->storageUsage->validate();
        }
        if (\is_array($this->whiteIpList)) {
            Model::validateArray($this->whiteIpList);
        }
        if (\is_array($this->zoneEngineInfoMap)) {
            Model::validateArray($this->zoneEngineInfoMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->arbiterVSwitchId) {
            $res['ArbiterVSwitchId'] = $this->arbiterVSwitchId;
        }

        if (null !== $this->arbiterZoneId) {
            $res['ArbiterZoneId'] = $this->arbiterZoneId;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->coldStorage) {
            $res['ColdStorage'] = $this->coldStorage;
        }

        if (null !== $this->createMilliseconds) {
            $res['CreateMilliseconds'] = $this->createMilliseconds;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }

        if (null !== $this->diskThreshold) {
            $res['DiskThreshold'] = $this->diskThreshold;
        }

        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }

        if (null !== $this->enableCompute) {
            $res['EnableCompute'] = $this->enableCompute;
        }

        if (null !== $this->engineList) {
            if (\is_array($this->engineList)) {
                $res['EngineList'] = [];
                $n1 = 0;
                foreach ($this->engineList as $item1) {
                    $res['EngineList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expiredMilliseconds) {
            $res['ExpiredMilliseconds'] = $this->expiredMilliseconds;
        }

        if (null !== $this->initialRootPassword) {
            $res['InitialRootPassword'] = $this->initialRootPassword;
        }

        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }

        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->primaryVSwitchId) {
            $res['PrimaryVSwitchId'] = $this->primaryVSwitchId;
        }

        if (null !== $this->primaryZoneId) {
            $res['PrimaryZoneId'] = $this->primaryZoneId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->standbyVSwitchId) {
            $res['StandbyVSwitchId'] = $this->standbyVSwitchId;
        }

        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
        }

        if (null !== $this->storageUsage) {
            $res['StorageUsage'] = null !== $this->storageUsage ? $this->storageUsage->toArray($noStream) : $this->storageUsage;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        if (null !== $this->whiteIpList) {
            if (\is_array($this->whiteIpList)) {
                $res['WhiteIpList'] = [];
                $n1 = 0;
                foreach ($this->whiteIpList as $item1) {
                    $res['WhiteIpList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneEngineInfoMap) {
            if (\is_array($this->zoneEngineInfoMap)) {
                $res['ZoneEngineInfoMap'] = [];
                foreach ($this->zoneEngineInfoMap as $key1 => $value1) {
                    $res['ZoneEngineInfoMap'][$key1] = $value1;
                }
            }
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['ArbiterVSwitchId'])) {
            $model->arbiterVSwitchId = $map['ArbiterVSwitchId'];
        }

        if (isset($map['ArbiterZoneId'])) {
            $model->arbiterZoneId = $map['ArbiterZoneId'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['ColdStorage'])) {
            $model->coldStorage = $map['ColdStorage'];
        }

        if (isset($map['CreateMilliseconds'])) {
            $model->createMilliseconds = $map['CreateMilliseconds'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }

        if (isset($map['DiskThreshold'])) {
            $model->diskThreshold = $map['DiskThreshold'];
        }

        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }

        if (isset($map['EnableCompute'])) {
            $model->enableCompute = $map['EnableCompute'];
        }

        if (isset($map['EngineList'])) {
            if (!empty($map['EngineList'])) {
                $model->engineList = [];
                $n1 = 0;
                foreach ($map['EngineList'] as $item1) {
                    $model->engineList[$n1] = engineList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpiredMilliseconds'])) {
            $model->expiredMilliseconds = $map['ExpiredMilliseconds'];
        }

        if (isset($map['InitialRootPassword'])) {
            $model->initialRootPassword = $map['InitialRootPassword'];
        }

        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }

        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PrimaryVSwitchId'])) {
            $model->primaryVSwitchId = $map['PrimaryVSwitchId'];
        }

        if (isset($map['PrimaryZoneId'])) {
            $model->primaryZoneId = $map['PrimaryZoneId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['StandbyVSwitchId'])) {
            $model->standbyVSwitchId = $map['StandbyVSwitchId'];
        }

        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
        }

        if (isset($map['StorageUsage'])) {
            $model->storageUsage = storageUsage::fromMap($map['StorageUsage']);
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        if (isset($map['WhiteIpList'])) {
            if (!empty($map['WhiteIpList'])) {
                $model->whiteIpList = [];
                $n1 = 0;
                foreach ($map['WhiteIpList'] as $item1) {
                    $model->whiteIpList[$n1] = whiteIpList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneEngineInfoMap'])) {
            if (!empty($map['ZoneEngineInfoMap'])) {
                $model->zoneEngineInfoMap = [];
                foreach ($map['ZoneEngineInfoMap'] as $key1 => $value1) {
                    $model->zoneEngineInfoMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
