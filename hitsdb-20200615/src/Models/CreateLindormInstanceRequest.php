<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Tea\Model;

class CreateLindormInstanceRequest extends Model
{
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
     * @example 2.0
     *
     * @var string
     */
    public $archVersion;

    /**
     * @example 800
     *
     * @var int
     */
    public $coldStorage;

    /**
     * @example 400
     *
     * @var int
     */
    public $coreSingleStorage;

    /**
     * @example lindorm.i2.xlarge
     *
     * @var string
     */
    public $coreSpec;

    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @example 2
     *
     * @var int
     */
    public $filestoreNum;

    /**
     * @example lindorm.c.xlarge
     *
     * @var string
     */
    public $filestoreSpec;

    /**
     * @example lindorm_test
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @example 480
     *
     * @var string
     */
    public $instanceStorage;

    /**
     * @example 2
     *
     * @var int
     */
    public $lindormNum;

    /**
     * @example lindorm.c.xlarge
     *
     * @var string
     */
    public $lindormSpec;

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
     * @example 400
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
     * @example POSTPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

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
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
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
     * @example 2
     *
     * @var int
     */
    public $solrNum;

    /**
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $solrSpec;

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
     * @description 实例的流引擎节点数量，取值：**0**~**60**。
     *
     * @example 2
     *
     * @var int
     */
    public $streamNum;

    /**
     * @description 实例的流引擎节点规格，取值：
     *
     * - **lindorm.g.xlarge**：表示4核16GB（独享规格）。
     * - **lindorm.c.2xlarge**：表示8核16GB（独享规格）。
     * - **lindorm.g.2xlarge**：表示8核32GB（独享规格）。
     * - **lindorm.c.4xlarge**：表示16核32GB（独享规格）。
     * - **lindorm.g.4xlarge**：表示16核64GB（独享规格）。
     * - **lindorm.c.8xlarge**：表示32核64GB（独享规格）。
     * - **lindorm.g.8xlarge**：表示32核128GB（独享规格）。
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $streamSpec;

    /**
     * @example 2
     *
     * @var int
     */
    public $tsdbNum;

    /**
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $tsdbSpec;

    /**
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'arbiterVSwitchId'     => 'ArbiterVSwitchId',
        'arbiterZoneId'        => 'ArbiterZoneId',
        'archVersion'          => 'ArchVersion',
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
