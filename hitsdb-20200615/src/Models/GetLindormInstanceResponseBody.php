<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponseBody\engineList;
use AlibabaCloud\Tea\Model;

class GetLindormInstanceResponseBody extends Model
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
     * @var string
     */
    public $coreDiskCategory;

    /**
     * @var int
     */
    public $coreNum;

    /**
     * @var int
     */
    public $coreSingleStorage;

    /**
     * @var string
     */
    public $coreSpec;

    /**
     * @var int
     */
    public $createMilliseconds;

    /**
     * @var string
     */
    public $createTime;

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
    public $enableCdc;

    /**
     * @var bool
     */
    public $enableCompute;

    /**
     * @var bool
     */
    public $enableKms;

    /**
     * @var bool
     */
    public $enableSSL;

    /**
     * @var bool
     */
    public $enableShs;

    /**
     * @var bool
     */
    public $enableStream;

    /**
     * @var engineList[]
     */
    public $engineList;

    /**
     * @var int
     */
    public $engineType;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $expiredMilliseconds;

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
    public $instanceStorage;

    /**
     * @var string
     */
    public $logDiskCategory;

    /**
     * @var int
     */
    public $logNum;

    /**
     * @var int
     */
    public $logSingleStorage;

    /**
     * @var string
     */
    public $logSpec;

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
    public $multiZoneCombination;

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
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid'               => 'AliUid',
        'arbiterVSwitchId'     => 'ArbiterVSwitchId',
        'arbiterZoneId'        => 'ArbiterZoneId',
        'autoRenew'            => 'AutoRenew',
        'coldStorage'          => 'ColdStorage',
        'coreDiskCategory'     => 'CoreDiskCategory',
        'coreNum'              => 'CoreNum',
        'coreSingleStorage'    => 'CoreSingleStorage',
        'coreSpec'             => 'CoreSpec',
        'createMilliseconds'   => 'CreateMilliseconds',
        'createTime'           => 'CreateTime',
        'deletionProtection'   => 'DeletionProtection',
        'diskCategory'         => 'DiskCategory',
        'diskThreshold'        => 'DiskThreshold',
        'diskUsage'            => 'DiskUsage',
        'enableCdc'            => 'EnableCdc',
        'enableCompute'        => 'EnableCompute',
        'enableKms'            => 'EnableKms',
        'enableSSL'            => 'EnableSSL',
        'enableShs'            => 'EnableShs',
        'enableStream'         => 'EnableStream',
        'engineList'           => 'EngineList',
        'engineType'           => 'EngineType',
        'expireTime'           => 'ExpireTime',
        'expiredMilliseconds'  => 'ExpiredMilliseconds',
        'instanceAlias'        => 'InstanceAlias',
        'instanceId'           => 'InstanceId',
        'instanceStatus'       => 'InstanceStatus',
        'instanceStorage'      => 'InstanceStorage',
        'logDiskCategory'      => 'LogDiskCategory',
        'logNum'               => 'LogNum',
        'logSingleStorage'     => 'LogSingleStorage',
        'logSpec'              => 'LogSpec',
        'maintainEndTime'      => 'MaintainEndTime',
        'maintainStartTime'    => 'MaintainStartTime',
        'multiZoneCombination' => 'MultiZoneCombination',
        'networkType'          => 'NetworkType',
        'payType'              => 'PayType',
        'primaryVSwitchId'     => 'PrimaryVSwitchId',
        'primaryZoneId'        => 'PrimaryZoneId',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
        'resourceGroupId'      => 'ResourceGroupId',
        'serviceType'          => 'ServiceType',
        'standbyVSwitchId'     => 'StandbyVSwitchId',
        'standbyZoneId'        => 'StandbyZoneId',
        'vpcId'                => 'VpcId',
        'vswitchId'            => 'VswitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->coreDiskCategory) {
            $res['CoreDiskCategory'] = $this->coreDiskCategory;
        }
        if (null !== $this->coreNum) {
            $res['CoreNum'] = $this->coreNum;
        }
        if (null !== $this->coreSingleStorage) {
            $res['CoreSingleStorage'] = $this->coreSingleStorage;
        }
        if (null !== $this->coreSpec) {
            $res['CoreSpec'] = $this->coreSpec;
        }
        if (null !== $this->createMilliseconds) {
            $res['CreateMilliseconds'] = $this->createMilliseconds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->enableCdc) {
            $res['EnableCdc'] = $this->enableCdc;
        }
        if (null !== $this->enableCompute) {
            $res['EnableCompute'] = $this->enableCompute;
        }
        if (null !== $this->enableKms) {
            $res['EnableKms'] = $this->enableKms;
        }
        if (null !== $this->enableSSL) {
            $res['EnableSSL'] = $this->enableSSL;
        }
        if (null !== $this->enableShs) {
            $res['EnableShs'] = $this->enableShs;
        }
        if (null !== $this->enableStream) {
            $res['EnableStream'] = $this->enableStream;
        }
        if (null !== $this->engineList) {
            $res['EngineList'] = [];
            if (null !== $this->engineList && \is_array($this->engineList)) {
                $n = 0;
                foreach ($this->engineList as $item) {
                    $res['EngineList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expiredMilliseconds) {
            $res['ExpiredMilliseconds'] = $this->expiredMilliseconds;
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
        if (null !== $this->instanceStorage) {
            $res['InstanceStorage'] = $this->instanceStorage;
        }
        if (null !== $this->logDiskCategory) {
            $res['LogDiskCategory'] = $this->logDiskCategory;
        }
        if (null !== $this->logNum) {
            $res['LogNum'] = $this->logNum;
        }
        if (null !== $this->logSingleStorage) {
            $res['LogSingleStorage'] = $this->logSingleStorage;
        }
        if (null !== $this->logSpec) {
            $res['LogSpec'] = $this->logSpec;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->multiZoneCombination) {
            $res['MultiZoneCombination'] = $this->multiZoneCombination;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLindormInstanceResponseBody
     */
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
        if (isset($map['CoreDiskCategory'])) {
            $model->coreDiskCategory = $map['CoreDiskCategory'];
        }
        if (isset($map['CoreNum'])) {
            $model->coreNum = $map['CoreNum'];
        }
        if (isset($map['CoreSingleStorage'])) {
            $model->coreSingleStorage = $map['CoreSingleStorage'];
        }
        if (isset($map['CoreSpec'])) {
            $model->coreSpec = $map['CoreSpec'];
        }
        if (isset($map['CreateMilliseconds'])) {
            $model->createMilliseconds = $map['CreateMilliseconds'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['EnableCdc'])) {
            $model->enableCdc = $map['EnableCdc'];
        }
        if (isset($map['EnableCompute'])) {
            $model->enableCompute = $map['EnableCompute'];
        }
        if (isset($map['EnableKms'])) {
            $model->enableKms = $map['EnableKms'];
        }
        if (isset($map['EnableSSL'])) {
            $model->enableSSL = $map['EnableSSL'];
        }
        if (isset($map['EnableShs'])) {
            $model->enableShs = $map['EnableShs'];
        }
        if (isset($map['EnableStream'])) {
            $model->enableStream = $map['EnableStream'];
        }
        if (isset($map['EngineList'])) {
            if (!empty($map['EngineList'])) {
                $model->engineList = [];
                $n                 = 0;
                foreach ($map['EngineList'] as $item) {
                    $model->engineList[$n++] = null !== $item ? engineList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpiredMilliseconds'])) {
            $model->expiredMilliseconds = $map['ExpiredMilliseconds'];
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
        if (isset($map['InstanceStorage'])) {
            $model->instanceStorage = $map['InstanceStorage'];
        }
        if (isset($map['LogDiskCategory'])) {
            $model->logDiskCategory = $map['LogDiskCategory'];
        }
        if (isset($map['LogNum'])) {
            $model->logNum = $map['LogNum'];
        }
        if (isset($map['LogSingleStorage'])) {
            $model->logSingleStorage = $map['LogSingleStorage'];
        }
        if (isset($map['LogSpec'])) {
            $model->logSpec = $map['LogSpec'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['MultiZoneCombination'])) {
            $model->multiZoneCombination = $map['MultiZoneCombination'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
