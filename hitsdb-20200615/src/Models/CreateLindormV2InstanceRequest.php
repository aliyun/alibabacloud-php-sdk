<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormV2InstanceRequest\engineList;

class CreateLindormV2InstanceRequest extends Model
{
    /**
     * @var string
     */
    public $arbiterVSwitchId;

    /**
     * @var string
     */
    public $arbiterZoneId;

    /**
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
     * @var int
     */
    public $capacityStorageSize;

    /**
     * @var int
     */
    public $cloudStorageSize;

    /**
     * @var string
     */
    public $cloudStorageType;

    /**
     * @var string
     */
    public $clusterMode;

    /**
     * @var string
     */
    public $clusterPattern;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $enableCapacityStorage;

    /**
     * @var engineList[]
     */
    public $engineList;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $ownerAccount;

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
    public $pricingCycle;

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
        'arbiterVSwitchId' => 'ArbiterVSwitchId',
        'arbiterZoneId' => 'ArbiterZoneId',
        'archVersion' => 'ArchVersion',
        'autoRenewDuration' => 'AutoRenewDuration',
        'autoRenewal' => 'AutoRenewal',
        'capacityStorageSize' => 'CapacityStorageSize',
        'cloudStorageSize' => 'CloudStorageSize',
        'cloudStorageType' => 'CloudStorageType',
        'clusterMode' => 'ClusterMode',
        'clusterPattern' => 'ClusterPattern',
        'duration' => 'Duration',
        'enableCapacityStorage' => 'EnableCapacityStorage',
        'engineList' => 'EngineList',
        'instanceAlias' => 'InstanceAlias',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'payType' => 'PayType',
        'pricingCycle' => 'PricingCycle',
        'primaryVSwitchId' => 'PrimaryVSwitchId',
        'primaryZoneId' => 'PrimaryZoneId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
        'standbyVSwitchId' => 'StandbyVSwitchId',
        'standbyZoneId' => 'StandbyZoneId',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->engineList)) {
            Model::validateArray($this->engineList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->capacityStorageSize) {
            $res['CapacityStorageSize'] = $this->capacityStorageSize;
        }

        if (null !== $this->cloudStorageSize) {
            $res['CloudStorageSize'] = $this->cloudStorageSize;
        }

        if (null !== $this->cloudStorageType) {
            $res['CloudStorageType'] = $this->cloudStorageType;
        }

        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }

        if (null !== $this->clusterPattern) {
            $res['ClusterPattern'] = $this->clusterPattern;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->enableCapacityStorage) {
            $res['EnableCapacityStorage'] = $this->enableCapacityStorage;
        }

        if (null !== $this->engineList) {
            if (\is_array($this->engineList)) {
                $res['EngineList'] = [];
                $n1 = 0;
                foreach ($this->engineList as $item1) {
                    $res['EngineList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
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

        if (null !== $this->standbyVSwitchId) {
            $res['StandbyVSwitchId'] = $this->standbyVSwitchId;
        }

        if (null !== $this->standbyZoneId) {
            $res['StandbyZoneId'] = $this->standbyZoneId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['CapacityStorageSize'])) {
            $model->capacityStorageSize = $map['CapacityStorageSize'];
        }

        if (isset($map['CloudStorageSize'])) {
            $model->cloudStorageSize = $map['CloudStorageSize'];
        }

        if (isset($map['CloudStorageType'])) {
            $model->cloudStorageType = $map['CloudStorageType'];
        }

        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }

        if (isset($map['ClusterPattern'])) {
            $model->clusterPattern = $map['ClusterPattern'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EnableCapacityStorage'])) {
            $model->enableCapacityStorage = $map['EnableCapacityStorage'];
        }

        if (isset($map['EngineList'])) {
            if (!empty($map['EngineList'])) {
                $model->engineList = [];
                $n1 = 0;
                foreach ($map['EngineList'] as $item1) {
                    $model->engineList[$n1++] = engineList::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
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

        if (isset($map['StandbyVSwitchId'])) {
            $model->standbyVSwitchId = $map['StandbyVSwitchId'];
        }

        if (isset($map['StandbyZoneId'])) {
            $model->standbyZoneId = $map['StandbyZoneId'];
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
