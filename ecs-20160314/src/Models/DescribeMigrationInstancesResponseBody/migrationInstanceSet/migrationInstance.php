<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationInstancesResponseBody\migrationInstanceSet;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationInstancesResponseBody\migrationInstanceSet\migrationInstance\securityGroupIdSets;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationInstancesResponseBody\migrationInstanceSet\migrationInstance\securityGroupIdSetsAfterTransition;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationInstancesResponseBody\migrationInstanceSet\migrationInstance\tags;
use AlibabaCloud\Tea\Model;

class migrationInstance extends Model
{
    /**
     * @var string
     */
    public $businessMigrationType;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var bool
     */
    public $changePublicIp;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var bool
     */
    public $hasLocalDisk;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $internetIpAfterTransition;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $intranetIpAfterTransition;

    /**
     * @var string
     */
    public $loadProgress;

    /**
     * @var string
     */
    public $macAddressAfterTransition;

    /**
     * @var string
     */
    public $mergeProgress;

    /**
     * @var string
     */
    public $migrationPlanId;

    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $networkConnectivityStatus;

    /**
     * @var int
     */
    public $networkMigrationType;

    /**
     * @var bool
     */
    public $nonStandardInstanceType;

    /**
     * @var string
     */
    public $privateMacAddress;

    /**
     * @var string
     */
    public $publicMacAddress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var securityGroupIdSets
     */
    public $securityGroupIdSets;

    /**
     * @var securityGroupIdSetsAfterTransition
     */
    public $securityGroupIdSetsAfterTransition;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $targetVSwitchId;

    /**
     * @var string
     */
    public $targetVpcId;

    /**
     * @var string
     */
    public $targetZoneId;

    /**
     * @var string
     */
    public $transitionTime;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'businessMigrationType'              => 'BusinessMigrationType',
        'businessStatus'                     => 'BusinessStatus',
        'changePublicIp'                     => 'ChangePublicIp',
        'finishTime'                         => 'FinishTime',
        'hasLocalDisk'                       => 'HasLocalDisk',
        'instanceChargeType'                 => 'InstanceChargeType',
        'instanceId'                         => 'InstanceId',
        'instanceType'                       => 'InstanceType',
        'internetIp'                         => 'InternetIp',
        'internetIpAfterTransition'          => 'InternetIpAfterTransition',
        'intranetIp'                         => 'IntranetIp',
        'intranetIpAfterTransition'          => 'IntranetIpAfterTransition',
        'loadProgress'                       => 'LoadProgress',
        'macAddressAfterTransition'          => 'MacAddressAfterTransition',
        'mergeProgress'                      => 'MergeProgress',
        'migrationPlanId'                    => 'MigrationPlanId',
        'migrationStatus'                    => 'MigrationStatus',
        'name'                               => 'Name',
        'networkConnectivityStatus'          => 'NetworkConnectivityStatus',
        'networkMigrationType'               => 'NetworkMigrationType',
        'nonStandardInstanceType'            => 'NonStandardInstanceType',
        'privateMacAddress'                  => 'PrivateMacAddress',
        'publicMacAddress'                   => 'PublicMacAddress',
        'regionId'                           => 'RegionId',
        'resourceGroupId'                    => 'ResourceGroupId',
        'securityGroupIdSets'                => 'SecurityGroupIdSets',
        'securityGroupIdSetsAfterTransition' => 'SecurityGroupIdSetsAfterTransition',
        'status'                             => 'Status',
        'tags'                               => 'Tags',
        'targetVSwitchId'                    => 'TargetVSwitchId',
        'targetVpcId'                        => 'TargetVpcId',
        'targetZoneId'                       => 'TargetZoneId',
        'transitionTime'                     => 'TransitionTime',
        'zoneId'                             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessMigrationType) {
            $res['BusinessMigrationType'] = $this->businessMigrationType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->changePublicIp) {
            $res['ChangePublicIp'] = $this->changePublicIp;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->hasLocalDisk) {
            $res['HasLocalDisk'] = $this->hasLocalDisk;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->internetIpAfterTransition) {
            $res['InternetIpAfterTransition'] = $this->internetIpAfterTransition;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->intranetIpAfterTransition) {
            $res['IntranetIpAfterTransition'] = $this->intranetIpAfterTransition;
        }
        if (null !== $this->loadProgress) {
            $res['LoadProgress'] = $this->loadProgress;
        }
        if (null !== $this->macAddressAfterTransition) {
            $res['MacAddressAfterTransition'] = $this->macAddressAfterTransition;
        }
        if (null !== $this->mergeProgress) {
            $res['MergeProgress'] = $this->mergeProgress;
        }
        if (null !== $this->migrationPlanId) {
            $res['MigrationPlanId'] = $this->migrationPlanId;
        }
        if (null !== $this->migrationStatus) {
            $res['MigrationStatus'] = $this->migrationStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkConnectivityStatus) {
            $res['NetworkConnectivityStatus'] = $this->networkConnectivityStatus;
        }
        if (null !== $this->networkMigrationType) {
            $res['NetworkMigrationType'] = $this->networkMigrationType;
        }
        if (null !== $this->nonStandardInstanceType) {
            $res['NonStandardInstanceType'] = $this->nonStandardInstanceType;
        }
        if (null !== $this->privateMacAddress) {
            $res['PrivateMacAddress'] = $this->privateMacAddress;
        }
        if (null !== $this->publicMacAddress) {
            $res['PublicMacAddress'] = $this->publicMacAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupIdSets) {
            $res['SecurityGroupIdSets'] = null !== $this->securityGroupIdSets ? $this->securityGroupIdSets->toMap() : null;
        }
        if (null !== $this->securityGroupIdSetsAfterTransition) {
            $res['SecurityGroupIdSetsAfterTransition'] = null !== $this->securityGroupIdSetsAfterTransition ? $this->securityGroupIdSetsAfterTransition->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->targetVSwitchId) {
            $res['TargetVSwitchId'] = $this->targetVSwitchId;
        }
        if (null !== $this->targetVpcId) {
            $res['TargetVpcId'] = $this->targetVpcId;
        }
        if (null !== $this->targetZoneId) {
            $res['TargetZoneId'] = $this->targetZoneId;
        }
        if (null !== $this->transitionTime) {
            $res['TransitionTime'] = $this->transitionTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessMigrationType'])) {
            $model->businessMigrationType = $map['BusinessMigrationType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ChangePublicIp'])) {
            $model->changePublicIp = $map['ChangePublicIp'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['HasLocalDisk'])) {
            $model->hasLocalDisk = $map['HasLocalDisk'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['InternetIpAfterTransition'])) {
            $model->internetIpAfterTransition = $map['InternetIpAfterTransition'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['IntranetIpAfterTransition'])) {
            $model->intranetIpAfterTransition = $map['IntranetIpAfterTransition'];
        }
        if (isset($map['LoadProgress'])) {
            $model->loadProgress = $map['LoadProgress'];
        }
        if (isset($map['MacAddressAfterTransition'])) {
            $model->macAddressAfterTransition = $map['MacAddressAfterTransition'];
        }
        if (isset($map['MergeProgress'])) {
            $model->mergeProgress = $map['MergeProgress'];
        }
        if (isset($map['MigrationPlanId'])) {
            $model->migrationPlanId = $map['MigrationPlanId'];
        }
        if (isset($map['MigrationStatus'])) {
            $model->migrationStatus = $map['MigrationStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkConnectivityStatus'])) {
            $model->networkConnectivityStatus = $map['NetworkConnectivityStatus'];
        }
        if (isset($map['NetworkMigrationType'])) {
            $model->networkMigrationType = $map['NetworkMigrationType'];
        }
        if (isset($map['NonStandardInstanceType'])) {
            $model->nonStandardInstanceType = $map['NonStandardInstanceType'];
        }
        if (isset($map['PrivateMacAddress'])) {
            $model->privateMacAddress = $map['PrivateMacAddress'];
        }
        if (isset($map['PublicMacAddress'])) {
            $model->publicMacAddress = $map['PublicMacAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupIdSets'])) {
            $model->securityGroupIdSets = securityGroupIdSets::fromMap($map['SecurityGroupIdSets']);
        }
        if (isset($map['SecurityGroupIdSetsAfterTransition'])) {
            $model->securityGroupIdSetsAfterTransition = securityGroupIdSetsAfterTransition::fromMap($map['SecurityGroupIdSetsAfterTransition']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TargetVSwitchId'])) {
            $model->targetVSwitchId = $map['TargetVSwitchId'];
        }
        if (isset($map['TargetVpcId'])) {
            $model->targetVpcId = $map['TargetVpcId'];
        }
        if (isset($map['TargetZoneId'])) {
            $model->targetZoneId = $map['TargetZoneId'];
        }
        if (isset($map['TransitionTime'])) {
            $model->transitionTime = $map['TransitionTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
