<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Tea\Model;

class CreateLindormInstanceRequest extends Model
{
    /**
     * @description The ID of the vSwitch that is specified for the zone for the coordinate node of the instance. The vSwitch must be deployed in the zone specified by the ArbiterZoneId parameter. **This parameter is required if you want to create a multi-zone instance**.
     *
     * @example vsw-uf6664pqjawb87k36****
     *
     * @var string
     */
    public $arbiterVSwitchId;

    /**
     * @description The ID of the zone for the coordinate node of the instance. **This parameter is required if you want to create a multi-zone instance**.
     *
     * @example cn-shanghai-g
     *
     * @var string
     */
    public $arbiterZoneId;

    /**
     * @description The architecture of the instance. Valid values:
     *
     *   **1.0**: The instance that you want to create is a single-zone instance.
     *   **2.0**: The instance that you want to create is a multi-zone instance.
     *
     * By default, the value of this parameter is 1.0. To create a multi-zone instance, set this parameter to 2.0. **This parameter is required if you want to create a multi-zone instance**.
     * @example 2.0
     *
     * @var string
     */
    public $archVersion;

    /**
     * @var string
     */
    public $autoRenewDuration;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @description The cold storage capacity of the instance. By default, if you leave this parameter unspecified, cold storage is not enabled for the instance. Unit: GB. Valid values: **800** to **1000000**.
     *
     * @example 800
     *
     * @var int
     */
    public $coldStorage;

    /**
     * @description The storage capacity of the disk of a single core node. Valid values: 400 to 64000. Unit: GB. **This parameter is required if you want to create a multi-zone instance**.
     *
     * @example 400
     *
     * @var int
     */
    public $coreSingleStorage;

    /**
     * @description The specification of the nodes in the instance if you set DiskCategory to local_ssd_pro or local_hdd_pro.
     *
     * When DiskCategory is set to local_ssd_pro, you can set this parameter to the following values:
     *
     *   **lindorm.i2.xlarge**: Each node has 4 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.i2.2xlarge**: Each node has 8 dedicated CPU cores and 64 GB of dedicated memory.
     *   **lindorm.i2.4xlarge**: Each node has 16 dedicated CPU cores and 128 GB of dedicated memory.
     *   **lindorm.i2.8xlarge**: Each node has 32 dedicated CPU cores and 256 GB of dedicated memory.
     *
     * When DiskCategory is set to local_hdd_pro, you can set this parameter to the following values:
     *
     *   **lindorm.d1.2xlarge**: Each node has 8 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.d1.4xlarge**: Each node has 16 dedicated CPU cores and 64 GB of dedicated memory.
     *   **lindorm.d1.6xlarge**: Each node has 24 dedicated CPU cores and 96 GB of dedicated memory.
     *
     * @example lindorm.i2.xlarge
     *
     * @var string
     */
    public $coreSpec;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **cloud_efficiency**: This instance uses the Standard type of storage.
     *   **cloud_ssd**: This instance uses the Performance type of storage.
     *   **capacity_cloud_storage**: This instance uses the Capacity type of storage.
     *   **local_ssd_pro**: This instance uses local SSDs.
     *   **local_hdd_pro**: This instance uses local HDDs.
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The subscription period of the instance. The valid values of this parameter depend on the value of the PricingCycle parameter.
     *
     *   If PricingCycle is set to **Month**, set this parameter to an integer that ranges from **1** to **9**.
     *   If PricingCycle is set to **Year**, set this parameter to an integer that ranges from **1** to **3**.
     *
     * > This parameter is available and required when the PayType parameter is set to **PREPAY**.
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @description The number of LindormDFS nodes in the instance. The valid values of this parameter depend on the value of the PayType parameter.
     *
     *   If the PayType parameter is set to **PREPAY**, set this parameter to an integer that ranges from **0** to **60**.
     *   If the PayType parameter is set to **POSTPAY**, set this parameter to an integer that ranges from **0** to **8**.
     *
     * @example 2
     *
     * @var int
     */
    public $filestoreNum;

    /**
     * @description The specification of LindormDFS nodes in the instance. Set the value of this parameter to **lindorm.c.xlarge**, which indicates that each node has 4 dedicated CPU cores and 8 GB of dedicated memory.
     *
     * @example lindorm.c.xlarge
     *
     * @var string
     */
    public $filestoreSpec;

    /**
     * @description The name of the instance that you want to create.
     *
     * @example lindorm_test
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @description The storage capacity of the instance you want to create. Unit: GB.
     *
     * @example 480
     *
     * @var string
     */
    public $instanceStorage;

    /**
     * @description The number of LindormTable nodes in the instance. The valid values of this parameter depend on the value of the PayType parameter.
     *
     *   If the PayType parameter is set to **PREPAY**, set this parameter to an integer that ranges from **0** to **90**.
     *   If the PayType parameter is set to **POSTPAY**, set this parameter to an integer that ranges from **0** to **400**.
     *
     **This parameter is required if you want to create a multi-zone instance**.  The valid values of this parameter range from 4 to 400 if you want to create a multi-zone instance.
     *
     * @example 2
     *
     * @var int
     */
    public $lindormNum;

    /**
     * @description The specification of LindormTable nodes in the instance. Valid values:
     *
     *   **lindorm.c.xlarge**: Each node has 4 dedicated CPU cores and 8 GB of dedicated memory.
     *   **lindorm.c.2xlarge**: Each node has 8 dedicated CPU cores and 16 GB of dedicated memory.
     *   **lindorm.c.4xlarge**: Each node has 16 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.c.8xlarge**: Each node has 32 dedicated CPU cores and 64 GB of dedicated memory.
     *
     * @example lindorm.c.xlarge
     *
     * @var string
     */
    public $lindormSpec;

    /**
     * @description The disk type of the log nodes. Valid values:
     *
     *   **cloud_efficiency**: This instance uses the Standard type of storage.
     *   **cloud_ssd**: This instance uses the Performance type of storage.
     *
     **This parameter is required if you want to create a multi-zone instance**.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $logDiskCategory;

    /**
     * @description The number of the log nodes. Valid values: 4 to 400. **This parameter is required if you want to create a multi-zone instance**.
     *
     * @example 4
     *
     * @var int
     */
    public $logNum;

    /**
     * @description The storage capacity of the disk of a single log node. Valid values: 400 to 64000. Unit: GB. **This parameter is required if you want to create a multi-zone instance**.
     *
     * @example 400
     *
     * @var int
     */
    public $logSingleStorage;

    /**
     * @description The type of the log nodes. Valid values:
     *
     *   **lindorm.sn1.xlarge**: Each node has 4 dedicated CPU cores and 8 GB of dedicated memory.
     *   **lindorm.sn1.2xlarge**: Each node has 8 dedicated CPU cores and 16 GB of dedicated memory.
     *
     **This parameter is required if you want to create a multi-zone instance**.
     *
     * @example lindorm.sn1.large
     *
     * @var string
     */
    public $logSpec;

    /**
     * @description The combinations of zones that are available for the multi-zone instance. You can go to the purchase page of Lindorm to view the supported zone combinations.
     *
     *   **ap-southeast-5abc-aliyun**: Zone A+B+C in the Indonesia (Jakarta) region.
     *   **cn-hangzhou-ehi-aliyun**: Zone E+H+I in the China (Hangzhou) region.
     *   **cn-beijing-acd-aliyun**: Zone A+C+D in the China (Beijing) region.
     *   **ap-southeast-1-abc-aliyun**: Zone A+B+C in the Singapore region.
     *   **cn-zhangjiakou-abc-aliyun**: Zone A+B+C in the China (Zhangjiakou) region.
     *   **cn-shanghai-efg-aliyun**: Zone E+F+G in the China (Shanghai) region.
     *   **cn-shanghai-abd-aliyun**: Zone A+B+D in the China (Shanghai) region.
     *   **cn-hangzhou-bef-aliyun**: Zone B+E+F in the China (Hangzhou) region.
     *   **cn-hangzhou-bce-aliyun**: Zone B+C+E in the China (Hangzhou) region.
     *   **cn-beijing-fgh-aliyun**: Zone F+G+H in the China (Beijing) region.
     *   **cn-shenzhen-abc-aliyun**: Zone A+B+C in the China (Shenzhen) region.
     *
     **This parameter is required if you want to create a multi-zone instance**.
     *
     * @example cn-shanghai-efg-aliyun
     *
     * @var string
     */
    public $multiZoneCombination;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the instance you want to create. Valid values:
     *
     *   **PREPAY**: subscription.
     *   **POSTPAY**: pay-as-you-go.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @description The period based on which you are charged for the instance. Valid values:
     *
     *   **Month**: You are charged for the instance on a monthly basis.
     *   **Year**: You are charged for the instance on a yearly basis.
     *
     * > This parameter is available and required when the PayType parameter is set to **PREPAY**.
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The ID of the vSwitch that is specified for the secondary zone of the instance. The vSwitch must be deployed in the zone specified by the StandbyZoneId parameter. **This parameter is required if you want to create a multi-zone instance**.
     *
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
     * @description The ID of the region in which you want to create the instance. You can call the [DescribeRegions](~~426062~~) operation to query the region in which you can create the instance.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the Lindorm instance belongs.
     *
     * @example rg-aek2i6weeb4nfii
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The number of LindormSearch nodes in the instance. Valid values: integers from **0** to **60**.
     *
     * @example 2
     *
     * @var int
     */
    public $solrNum;

    /**
     * @description The specification of the LindormSearch nodes in the instance. Valid values:
     *
     *   **lindorm.g.xlarge**: Each node has 4 dedicated CPU cores and 16 GB of dedicated memory.
     *   **lindorm.g.2xlarge**: Each node has 8 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.g.4xlarge**: Each node has 16 dedicated CPU cores and 64 GB of dedicated memory.
     *   **lindorm.g.8xlarge**: Each node has 32 dedicated CPU cores and 128 GB of dedicated memory.
     *
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $solrSpec;

    /**
     * @description The ID of the vSwitch that is specified for the secondary zone of the instance. The vSwitch must be deployed in the zone specified by the StandbyZoneId parameter. **This parameter is required if you want to create a multi-zone instance**.
     *
     * @example vsw-2zec0kcn08cgdtr6****
     *
     * @var string
     */
    public $standbyVSwitchId;

    /**
     * @description The ID of the secondary zone of the instance. **This parameter is required if you want to create a multi-zone instance**.
     *
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $standbyZoneId;

    /**
     * @description The number of LindormStream nodes in the instance. Valid values: integers from **0** to **60**.
     *
     * @example 2
     *
     * @var int
     */
    public $streamNum;

    /**
     * @description The specification of the LindormStream nodes in the instance. Valid values:
     *
     *   **lindorm.g.xlarge**: Each node has 4 dedicated CPU cores and 16 GB of dedicated memory.
     *   **lindorm.g.2xlarge**: Each node has 8 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.g.4xlarge**: Each node has 16 dedicated CPU cores and 64 GB of dedicated memory.
     *   **lindorm.g.8xlarge**: Each node has 32 dedicated CPU cores and 128 GB of dedicated memory.
     *
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $streamSpec;

    /**
     * @description The number of the LindormTSDB nodes in the instance. The valid values of this parameter depend on the value of the PayType parameter.
     *
     *   If the PayType parameter is set to **PREPAY**, set this parameter to an integer that ranges from **0** to **24**.
     *   If the PayType parameter is set to **POSTPAY**, set this parameter to an integer that ranges from **0** to **32**.
     *
     * @example 2
     *
     * @var int
     */
    public $tsdbNum;

    /**
     * @description The specification of the LindormTSDB nodes in the instance. Valid values:
     *
     *   **lindorm.g.xlarge**: Each node has 4 dedicated CPU cores and 16 GB of dedicated memory.
     *   **lindorm.g.2xlarge**: Each node has 8 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.g.4xlarge**: Each node has 16 dedicated CPU cores and 64 GB of dedicated memory.
     *   **lindorm.g.8xlarge**: Each node has 32 dedicated CPU cores and 128 GB of dedicated memory.
     *
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $tsdbSpec;

    /**
     * @description The ID of the VPC in which you want to create the instance.
     *
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch to which you want the instance to connect.
     *
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone in which you want to create the instance.
     *
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'arbiterVSwitchId'     => 'ArbiterVSwitchId',
        'arbiterZoneId'        => 'ArbiterZoneId',
        'archVersion'          => 'ArchVersion',
        'autoRenewDuration'    => 'AutoRenewDuration',
        'autoRenewal'          => 'AutoRenewal',
        'coldStorage'          => 'ColdStorage',
        'coreSingleStorage'    => 'CoreSingleStorage',
        'coreSpec'             => 'CoreSpec',
        'diskCategory'         => 'DiskCategory',
        'duration'             => 'Duration',
        'filestoreNum'         => 'FilestoreNum',
        'filestoreSpec'        => 'FilestoreSpec',
        'instanceAlias'        => 'InstanceAlias',
        'instanceStorage'      => 'InstanceStorage',
        'lindormNum'           => 'LindormNum',
        'lindormSpec'          => 'LindormSpec',
        'logDiskCategory'      => 'LogDiskCategory',
        'logNum'               => 'LogNum',
        'logSingleStorage'     => 'LogSingleStorage',
        'logSpec'              => 'LogSpec',
        'multiZoneCombination' => 'MultiZoneCombination',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'pricingCycle'         => 'PricingCycle',
        'primaryVSwitchId'     => 'PrimaryVSwitchId',
        'primaryZoneId'        => 'PrimaryZoneId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'solrNum'              => 'SolrNum',
        'solrSpec'             => 'SolrSpec',
        'standbyVSwitchId'     => 'StandbyVSwitchId',
        'standbyZoneId'        => 'StandbyZoneId',
        'streamNum'            => 'StreamNum',
        'streamSpec'           => 'StreamSpec',
        'tsdbNum'              => 'TsdbNum',
        'tsdbSpec'             => 'TsdbSpec',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arbiterVSwitchId) {
            $res['ArbiterVSwitchId'] = $this->arbiterVSwitchId;
        }
        if (null !== $this->arbiterZoneId) {
            $res['ArbiterZoneId'] = $this->arbiterZoneId;
        }
        if (null !== $this->archVersion) {
            $res['ArchVersion'] = $this->archVersion;
        }
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->coldStorage) {
            $res['ColdStorage'] = $this->coldStorage;
        }
        if (null !== $this->coreSingleStorage) {
            $res['CoreSingleStorage'] = $this->coreSingleStorage;
        }
        if (null !== $this->coreSpec) {
            $res['CoreSpec'] = $this->coreSpec;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->filestoreNum) {
            $res['FilestoreNum'] = $this->filestoreNum;
        }
        if (null !== $this->filestoreSpec) {
            $res['FilestoreSpec'] = $this->filestoreSpec;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceStorage) {
            $res['InstanceStorage'] = $this->instanceStorage;
        }
        if (null !== $this->lindormNum) {
            $res['LindormNum'] = $this->lindormNum;
        }
        if (null !== $this->lindormSpec) {
            $res['LindormSpec'] = $this->lindormSpec;
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
        if (null !== $this->multiZoneCombination) {
            $res['MultiZoneCombination'] = $this->multiZoneCombination;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->solrNum) {
            $res['SolrNum'] = $this->solrNum;
        }
        if (null !== $this->solrSpec) {
            $res['SolrSpec'] = $this->solrSpec;
        }
        if (null !== $this->standbyVSwitchId) {
            $res['StandbyVSwitchId'] = $this->standbyVSwitchId;
        }
        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
        }
        if (null !== $this->streamNum) {
            $res['StreamNum'] = $this->streamNum;
        }
        if (null !== $this->streamSpec) {
            $res['StreamSpec'] = $this->streamSpec;
        }
        if (null !== $this->tsdbNum) {
            $res['TsdbNum'] = $this->tsdbNum;
        }
        if (null !== $this->tsdbSpec) {
            $res['TsdbSpec'] = $this->tsdbSpec;
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
     * @return CreateLindormInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArbiterVSwitchId'])) {
            $model->arbiterVSwitchId = $map['ArbiterVSwitchId'];
        }
        if (isset($map['ArbiterZoneId'])) {
            $model->arbiterZoneId = $map['ArbiterZoneId'];
        }
        if (isset($map['ArchVersion'])) {
            $model->archVersion = $map['ArchVersion'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ColdStorage'])) {
            $model->coldStorage = $map['ColdStorage'];
        }
        if (isset($map['CoreSingleStorage'])) {
            $model->coreSingleStorage = $map['CoreSingleStorage'];
        }
        if (isset($map['CoreSpec'])) {
            $model->coreSpec = $map['CoreSpec'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FilestoreNum'])) {
            $model->filestoreNum = $map['FilestoreNum'];
        }
        if (isset($map['FilestoreSpec'])) {
            $model->filestoreSpec = $map['FilestoreSpec'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceStorage'])) {
            $model->instanceStorage = $map['InstanceStorage'];
        }
        if (isset($map['LindormNum'])) {
            $model->lindormNum = $map['LindormNum'];
        }
        if (isset($map['LindormSpec'])) {
            $model->lindormSpec = $map['LindormSpec'];
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
        if (isset($map['MultiZoneCombination'])) {
            $model->multiZoneCombination = $map['MultiZoneCombination'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SolrNum'])) {
            $model->solrNum = $map['SolrNum'];
        }
        if (isset($map['SolrSpec'])) {
            $model->solrSpec = $map['SolrSpec'];
        }
        if (isset($map['StandbyVSwitchId'])) {
            $model->standbyVSwitchId = $map['StandbyVSwitchId'];
        }
        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
        }
        if (isset($map['StreamNum'])) {
            $model->streamNum = $map['StreamNum'];
        }
        if (isset($map['StreamSpec'])) {
            $model->streamSpec = $map['StreamSpec'];
        }
        if (isset($map['TsdbNum'])) {
            $model->tsdbNum = $map['TsdbNum'];
        }
        if (isset($map['TsdbSpec'])) {
            $model->tsdbSpec = $map['TsdbSpec'];
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
