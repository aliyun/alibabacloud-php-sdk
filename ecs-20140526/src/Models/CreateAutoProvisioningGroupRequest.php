<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\dataDiskConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\launchConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\launchTemplateConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\systemDiskConfig;
use AlibabaCloud\Tea\Model;

class CreateAutoProvisioningGroupRequest extends Model
{
    /**
     * @var launchConfiguration
     */
    public $launchConfiguration;

    /**
     * @var int
     */
    public $ownerId;

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
    public $ownerAccount;

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
    public $autoProvisioningGroupName;

    /**
     * @var string
     */
    public $autoProvisioningGroupType;

    /**
     * @var string
     */
    public $spotAllocationStrategy;

    /**
     * @var string
     */
    public $spotInstanceInterruptionBehavior;

    /**
     * @var int
     */
    public $spotInstancePoolsToUseCount;

    /**
     * @var string
     */
    public $payAsYouGoAllocationStrategy;

    /**
     * @var string
     */
    public $excessCapacityTerminationPolicy;

    /**
     * @var string
     */
    public $validFrom;

    /**
     * @var string
     */
    public $validUntil;

    /**
     * @var bool
     */
    public $terminateInstancesWithExpiration;

    /**
     * @var bool
     */
    public $terminateInstances;

    /**
     * @var float
     */
    public $maxSpotPrice;

    /**
     * @var string
     */
    public $totalTargetCapacity;

    /**
     * @var string
     */
    public $payAsYouGoTargetCapacity;

    /**
     * @var string
     */
    public $spotTargetCapacity;

    /**
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var launchTemplateConfig[]
     */
    public $launchTemplateConfig;

    /**
     * @var systemDiskConfig[]
     */
    public $systemDiskConfig;

    /**
     * @var dataDiskConfig[]
     */
    public $dataDiskConfig;
    protected $_name = [
        'launchConfiguration'              => 'LaunchConfiguration',
        'ownerId'                          => 'OwnerId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'ownerAccount'                     => 'OwnerAccount',
        'regionId'                         => 'RegionId',
        'resourceGroupId'                  => 'ResourceGroupId',
        'autoProvisioningGroupName'        => 'AutoProvisioningGroupName',
        'autoProvisioningGroupType'        => 'AutoProvisioningGroupType',
        'spotAllocationStrategy'           => 'SpotAllocationStrategy',
        'spotInstanceInterruptionBehavior' => 'SpotInstanceInterruptionBehavior',
        'spotInstancePoolsToUseCount'      => 'SpotInstancePoolsToUseCount',
        'payAsYouGoAllocationStrategy'     => 'PayAsYouGoAllocationStrategy',
        'excessCapacityTerminationPolicy'  => 'ExcessCapacityTerminationPolicy',
        'validFrom'                        => 'ValidFrom',
        'validUntil'                       => 'ValidUntil',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'terminateInstances'               => 'TerminateInstances',
        'maxSpotPrice'                     => 'MaxSpotPrice',
        'totalTargetCapacity'              => 'TotalTargetCapacity',
        'payAsYouGoTargetCapacity'         => 'PayAsYouGoTargetCapacity',
        'spotTargetCapacity'               => 'SpotTargetCapacity',
        'defaultTargetCapacityType'        => 'DefaultTargetCapacityType',
        'launchTemplateId'                 => 'LaunchTemplateId',
        'launchTemplateVersion'            => 'LaunchTemplateVersion',
        'description'                      => 'Description',
        'clientToken'                      => 'ClientToken',
        'launchTemplateConfig'             => 'LaunchTemplateConfig',
        'systemDiskConfig'                 => 'SystemDiskConfig',
        'dataDiskConfig'                   => 'DataDiskConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchConfiguration) {
            $res['LaunchConfiguration'] = null !== $this->launchConfiguration ? $this->launchConfiguration->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }
        if (null !== $this->autoProvisioningGroupType) {
            $res['AutoProvisioningGroupType'] = $this->autoProvisioningGroupType;
        }
        if (null !== $this->spotAllocationStrategy) {
            $res['SpotAllocationStrategy'] = $this->spotAllocationStrategy;
        }
        if (null !== $this->spotInstanceInterruptionBehavior) {
            $res['SpotInstanceInterruptionBehavior'] = $this->spotInstanceInterruptionBehavior;
        }
        if (null !== $this->spotInstancePoolsToUseCount) {
            $res['SpotInstancePoolsToUseCount'] = $this->spotInstancePoolsToUseCount;
        }
        if (null !== $this->payAsYouGoAllocationStrategy) {
            $res['PayAsYouGoAllocationStrategy'] = $this->payAsYouGoAllocationStrategy;
        }
        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
        }
        if (null !== $this->validFrom) {
            $res['ValidFrom'] = $this->validFrom;
        }
        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
        }
        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
        }
        if (null !== $this->terminateInstances) {
            $res['TerminateInstances'] = $this->terminateInstances;
        }
        if (null !== $this->maxSpotPrice) {
            $res['MaxSpotPrice'] = $this->maxSpotPrice;
        }
        if (null !== $this->totalTargetCapacity) {
            $res['TotalTargetCapacity'] = $this->totalTargetCapacity;
        }
        if (null !== $this->payAsYouGoTargetCapacity) {
            $res['PayAsYouGoTargetCapacity'] = $this->payAsYouGoTargetCapacity;
        }
        if (null !== $this->spotTargetCapacity) {
            $res['SpotTargetCapacity'] = $this->spotTargetCapacity;
        }
        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->launchTemplateConfig) {
            $res['LaunchTemplateConfig'] = [];
            if (null !== $this->launchTemplateConfig && \is_array($this->launchTemplateConfig)) {
                $n = 0;
                foreach ($this->launchTemplateConfig as $item) {
                    $res['LaunchTemplateConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->systemDiskConfig) {
            $res['SystemDiskConfig'] = [];
            if (null !== $this->systemDiskConfig && \is_array($this->systemDiskConfig)) {
                $n = 0;
                foreach ($this->systemDiskConfig as $item) {
                    $res['SystemDiskConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataDiskConfig) {
            $res['DataDiskConfig'] = [];
            if (null !== $this->dataDiskConfig && \is_array($this->dataDiskConfig)) {
                $n = 0;
                foreach ($this->dataDiskConfig as $item) {
                    $res['DataDiskConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoProvisioningGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchConfiguration'])) {
            $model->launchConfiguration = launchConfiguration::fromMap($map['LaunchConfiguration']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }
        if (isset($map['AutoProvisioningGroupType'])) {
            $model->autoProvisioningGroupType = $map['AutoProvisioningGroupType'];
        }
        if (isset($map['SpotAllocationStrategy'])) {
            $model->spotAllocationStrategy = $map['SpotAllocationStrategy'];
        }
        if (isset($map['SpotInstanceInterruptionBehavior'])) {
            $model->spotInstanceInterruptionBehavior = $map['SpotInstanceInterruptionBehavior'];
        }
        if (isset($map['SpotInstancePoolsToUseCount'])) {
            $model->spotInstancePoolsToUseCount = $map['SpotInstancePoolsToUseCount'];
        }
        if (isset($map['PayAsYouGoAllocationStrategy'])) {
            $model->payAsYouGoAllocationStrategy = $map['PayAsYouGoAllocationStrategy'];
        }
        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
        }
        if (isset($map['ValidFrom'])) {
            $model->validFrom = $map['ValidFrom'];
        }
        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }
        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
        }
        if (isset($map['TerminateInstances'])) {
            $model->terminateInstances = $map['TerminateInstances'];
        }
        if (isset($map['MaxSpotPrice'])) {
            $model->maxSpotPrice = $map['MaxSpotPrice'];
        }
        if (isset($map['TotalTargetCapacity'])) {
            $model->totalTargetCapacity = $map['TotalTargetCapacity'];
        }
        if (isset($map['PayAsYouGoTargetCapacity'])) {
            $model->payAsYouGoTargetCapacity = $map['PayAsYouGoTargetCapacity'];
        }
        if (isset($map['SpotTargetCapacity'])) {
            $model->spotTargetCapacity = $map['SpotTargetCapacity'];
        }
        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['LaunchTemplateConfig'])) {
            if (!empty($map['LaunchTemplateConfig'])) {
                $model->launchTemplateConfig = [];
                $n                           = 0;
                foreach ($map['LaunchTemplateConfig'] as $item) {
                    $model->launchTemplateConfig[$n++] = null !== $item ? launchTemplateConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SystemDiskConfig'])) {
            if (!empty($map['SystemDiskConfig'])) {
                $model->systemDiskConfig = [];
                $n                       = 0;
                foreach ($map['SystemDiskConfig'] as $item) {
                    $model->systemDiskConfig[$n++] = null !== $item ? systemDiskConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataDiskConfig'])) {
            if (!empty($map['DataDiskConfig'])) {
                $model->dataDiskConfig = [];
                $n                     = 0;
                foreach ($map['DataDiskConfig'] as $item) {
                    $model->dataDiskConfig[$n++] = null !== $item ? dataDiskConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
