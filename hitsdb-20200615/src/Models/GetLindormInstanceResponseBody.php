<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponseBody\engineList;
use AlibabaCloud\Tea\Model;

class GetLindormInstanceResponseBody extends Model
{
    /**
     * @example 164901546557****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example vsw-uf6664pqjawb87k36****
     *
     * @var string
     */
    public $arbiterVSwitchId;

    /**
     * @example cn-shanghai-g
     *
     * @var string
     */
    public $arbiterZoneId;

    /**
     * @description The architecture of the instance. Valid values:
     *
     *   **1.0**: The instance is deployed in a single zone.
     *   **2.0**: The instance is deployed across multiple zones.
     *
     * @example 1.0
     *
     * @var string
     */
    public $archVersion;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The Capacity storage size of the instance.
     *
     * @example 0GB
     *
     * @var int
     */
    public $coldStorage;

    /**
     * @description The disk type of the core nodes. This parameter is returned only for multi-zone instances. Valid values:
     *
     *   **cloud_efficiency**: This instance uses the Standard type of storage.
     *   **cloud_ssd**: This instance uses the Performance type of storage.
     *   **cloud_essd**: This instance uses ESSDs for storage.
     *   **cloud_essd_pl0**: This instance uses PL0 ESSDs for storage.
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $coreDiskCategory;

    /**
     * @example 4
     *
     * @var int
     */
    public $coreNum;

    /**
     * @example 400
     *
     * @var int
     */
    public $coreSingleStorage;

    /**
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $coreSpec;

    /**
     * @example 1627290664000
     *
     * @var int
     */
    public $createMilliseconds;

    /**
     * @description The storage capacity of the disk of a single log node. This parameter is returned only for multi-zone instances.
     *
     * @example 2021-07-26 17:10:26
     *
     * @var string
     */
    public $createTime;

    /**
     * @example false
     *
     * @var string
     */
    public $deletionProtection;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **cloud_efficiency**: This instance uses the Standard type of storage.
     *   **cloud_ssd**: This instance uses the Performance type of storage.
     *   **cloud_essd**: This instance uses ESSDs for storage.
     *   **cloud_essd_pl0**: This instance uses PL0 ESSDs for storage.
     *   **capacity_cloud_storage**: This instance uses the Capacity type of storage.
     *   **local_ssd_pro**: This instance uses local SSDs for storage.
     *   **local_hdd_pro**: This instance uses local HDDs for storage.
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @example 80%
     *
     * @var string
     */
    public $diskThreshold;

    /**
     * @example 0.0%
     *
     * @var string
     */
    public $diskUsage;

    /**
     * @description Indicates whether LBlob is enabled for the instance. Valid values:
     *
     * true: LBlob is enabled for the instance. false: LBlob is not enabled for the instance.
     * @example true
     *
     * @var bool
     */
    public $enableBlob;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableCdc;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableCompute;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableKms;

    /**
     * @var bool
     */
    public $enableLProxy;

    /**
     * @description Indicates whether the LTS engine is activated for the instance. Valid values:
     *
     *   **true**: The LTS engine is activated for the instance.
     *   **false**: The LTS engine is not activated for the instance.
     *
     * @example true
     *
     * @var bool
     */
    public $enableLTS;

    /**
     * @description Indicates whether LindormTable of the instance supports LindormSQL V3 that is compatible with MySQL. By default, LindormTable of instances that are purchased after October 24, 2023 supports LindormSQL V3. If your instance is purchased before this date and want to enable LindormSQL V3, contact the technical support.
     *
     *   True: LindormTable supports LindormSQL V3.
     *   False: LindormTable does not support LindormSQL V3.
     *
     * @example True
     *
     * @var bool
     */
    public $enableLsqlVersionV3;

    /**
     * @description Indicates whether AI control nodes are enabled for the instance.
     *
     *   True: AI control nodes are enabled for the instance.
     *   False: AI control nodes are not enabled for the instance.
     *
     * @example False
     *
     * @var bool
     */
    public $enableMLCtrl;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableSSL;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableShs;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableStream;

    /**
     * @description The latest version number of the engine.
     *
     * @var engineList[]
     */
    public $engineList;

    /**
     * @example 15
     *
     * @var int
     */
    public $engineType;

    /**
     * @example 2021-08-27 00:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 1629993600000
     *
     * @var int
     */
    public $expiredMilliseconds;

    /**
     * @example test0726
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @example ld-bp1o3y0yme2i2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the instance. Valid values:
     *
     *   **CREATING**: The instance is being created.
     *   **ACTIVATION**: The instance is running.
     *   **COLD_EXPANDING**: The Capacity storage of the instance is being scaled up.
     *   **MINOR_VERSION_TRANSING**: The minor version of the instance is being updated.
     *   **RESIZING**: The nodes in the instance are being scaled up.
     *   **SHRINKING**: The nodes in the instance are being scaled down.
     *   **CLASS_CHANGING**: The specification of the instance is being changed.
     *   **SSL_SWITCHING: SSL**: The SSL configurations of the instance are being changed.
     *   **CDC_OPENING**: Data subscription is being enabled for the instance.
     *   **TRANSFER**: The data of the instance is being transferred.
     *   **DATABASE_TRANSFER**: The data of the instance is being transferred to databases.
     *   **GUARD_CREATING**: A disaster recovery instance is being created.
     *   **BACKUP_RECOVERING**: The data of the instance is being restored from a backup.
     *   **DATABASE_IMPORTING**: Data is being imported to the instance.
     *   **NET_MODIFYING**: The network configurations of the instance are being changed.
     *   **NET_SWITCHING**: The network of the instance is being switched between a virtual private cloud (VPC) and the Internet.
     *   **NET_CREATING**: The connection to the instance is being created.
     *   **NET_DELETING**: The connection to the instance is being deleted.
     *   **DELETING**: The instance is being deleted.
     *   **RESTARTING**: The instance is restarting.
     *   **LOCKED**: The instance is locked because it expires.
     *
     * @example ACTIVATION
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example 480
     *
     * @var string
     */
    public $instanceStorage;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $logDiskCategory;

    /**
     * @example 4
     *
     * @var int
     */
    public $logNum;

    /**
     * @description The storage capacity of the disk of a single log node. This parameter is returned only for multi-zone instances.
     *
     * @example 400GB
     *
     * @var int
     */
    public $logSingleStorage;

    /**
     * @example lindorm.sn1.large
     *
     * @var string
     */
    public $logSpec;

    /**
     * @example 20:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @example 00:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @example cn-shanghai-efg-aliyun
     *
     * @var string
     */
    public $multiZoneCombination;

    /**
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description 400
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @example vsw-uf6fdqa7c0pipnqzq****
     *
     * @var string
     */
    public $primaryVSwitchId;

    /**
     * @example cn-shanghai-e
     *
     * @var string
     */
    public $primaryZoneId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 633F1BE4-C8DA-5744-8FDF-A3075C3FE37F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-aek2wvd6oia****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example lindorm
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example vsw-2zec0kcn08cgdtr6****
     *
     * @var string
     */
    public $standbyVSwitchId;

    /**
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $standbyZoneId;

    /**
     * @description The type of the log nodes. This parameter is returned only for multi-zone instances.
     *
     * @example vpc-bp1n3i15v90el48nx****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The number of the log nodes. This parameter is returned only for multi-zone instances.
     *
     * @example vsw-bp1vbjzmod9q3l9eo****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid'               => 'AliUid',
        'arbiterVSwitchId'     => 'ArbiterVSwitchId',
        'arbiterZoneId'        => 'ArbiterZoneId',
        'archVersion'          => 'ArchVersion',
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
        'enableBlob'           => 'EnableBlob',
        'enableCdc'            => 'EnableCdc',
        'enableCompute'        => 'EnableCompute',
        'enableKms'            => 'EnableKms',
        'enableLProxy'         => 'EnableLProxy',
        'enableLTS'            => 'EnableLTS',
        'enableLsqlVersionV3'  => 'EnableLsqlVersionV3',
        'enableMLCtrl'         => 'EnableMLCtrl',
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
        if (null !== $this->archVersion) {
            $res['ArchVersion'] = $this->archVersion;
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
        if (null !== $this->enableBlob) {
            $res['EnableBlob'] = $this->enableBlob;
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
        if (null !== $this->enableLProxy) {
            $res['EnableLProxy'] = $this->enableLProxy;
        }
        if (null !== $this->enableLTS) {
            $res['EnableLTS'] = $this->enableLTS;
        }
        if (null !== $this->enableLsqlVersionV3) {
            $res['EnableLsqlVersionV3'] = $this->enableLsqlVersionV3;
        }
        if (null !== $this->enableMLCtrl) {
            $res['EnableMLCtrl'] = $this->enableMLCtrl;
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
        if (isset($map['ArchVersion'])) {
            $model->archVersion = $map['ArchVersion'];
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
        if (isset($map['EnableBlob'])) {
            $model->enableBlob = $map['EnableBlob'];
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
        if (isset($map['EnableLProxy'])) {
            $model->enableLProxy = $map['EnableLProxy'];
        }
        if (isset($map['EnableLTS'])) {
            $model->enableLTS = $map['EnableLTS'];
        }
        if (isset($map['EnableLsqlVersionV3'])) {
            $model->enableLsqlVersionV3 = $map['EnableLsqlVersionV3'];
        }
        if (isset($map['EnableMLCtrl'])) {
            $model->enableMLCtrl = $map['EnableMLCtrl'];
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
