<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\dataDiskConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchTemplateConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\prePaidOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\systemDiskConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\tag;

class CreateAutoProvisioningGroupShrinkRequest extends Model
{
    /**
     * @var launchConfiguration
     */
    public $launchConfiguration;
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
    public $clientToken;
    /**
     * @var dataDiskConfig[]
     */
    public $dataDiskConfig;
    /**
     * @var string
     */
    public $defaultTargetCapacityType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $excessCapacityTerminationPolicy;
    /**
     * @var bool
     */
    public $hibernationOptionsConfigured;
    /**
     * @var launchTemplateConfig[]
     */
    public $launchTemplateConfig;
    /**
     * @var string
     */
    public $launchTemplateId;
    /**
     * @var string
     */
    public $launchTemplateVersion;
    /**
     * @var float
     */
    public $maxSpotPrice;
    /**
     * @var string
     */
    public $minTargetCapacity;
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
    public $payAsYouGoAllocationStrategy;
    /**
     * @var string
     */
    public $payAsYouGoTargetCapacity;
    /**
     * @var prePaidOptions
     */
    public $prePaidOptions;
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
    public $resourcePoolOptionsShrink;
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
    public $spotTargetCapacity;
    /**
     * @var systemDiskConfig[]
     */
    public $systemDiskConfig;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var bool
     */
    public $terminateInstances;
    /**
     * @var bool
     */
    public $terminateInstancesWithExpiration;
    /**
     * @var string
     */
    public $totalTargetCapacity;
    /**
     * @var string
     */
    public $validFrom;
    /**
     * @var string
     */
    public $validUntil;
    protected $_name = [
        'launchConfiguration'              => 'LaunchConfiguration',
        'autoProvisioningGroupName'        => 'AutoProvisioningGroupName',
        'autoProvisioningGroupType'        => 'AutoProvisioningGroupType',
        'clientToken'                      => 'ClientToken',
        'dataDiskConfig'                   => 'DataDiskConfig',
        'defaultTargetCapacityType'        => 'DefaultTargetCapacityType',
        'description'                      => 'Description',
        'excessCapacityTerminationPolicy'  => 'ExcessCapacityTerminationPolicy',
        'hibernationOptionsConfigured'     => 'HibernationOptionsConfigured',
        'launchTemplateConfig'             => 'LaunchTemplateConfig',
        'launchTemplateId'                 => 'LaunchTemplateId',
        'launchTemplateVersion'            => 'LaunchTemplateVersion',
        'maxSpotPrice'                     => 'MaxSpotPrice',
        'minTargetCapacity'                => 'MinTargetCapacity',
        'ownerAccount'                     => 'OwnerAccount',
        'ownerId'                          => 'OwnerId',
        'payAsYouGoAllocationStrategy'     => 'PayAsYouGoAllocationStrategy',
        'payAsYouGoTargetCapacity'         => 'PayAsYouGoTargetCapacity',
        'prePaidOptions'                   => 'PrePaidOptions',
        'regionId'                         => 'RegionId',
        'resourceGroupId'                  => 'ResourceGroupId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'resourcePoolOptionsShrink'        => 'ResourcePoolOptions',
        'spotAllocationStrategy'           => 'SpotAllocationStrategy',
        'spotInstanceInterruptionBehavior' => 'SpotInstanceInterruptionBehavior',
        'spotInstancePoolsToUseCount'      => 'SpotInstancePoolsToUseCount',
        'spotTargetCapacity'               => 'SpotTargetCapacity',
        'systemDiskConfig'                 => 'SystemDiskConfig',
        'tag'                              => 'Tag',
        'terminateInstances'               => 'TerminateInstances',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'totalTargetCapacity'              => 'TotalTargetCapacity',
        'validFrom'                        => 'ValidFrom',
        'validUntil'                       => 'ValidUntil',
    ];

    public function validate()
    {
        if (null !== $this->launchConfiguration) {
            $this->launchConfiguration->validate();
        }
        if (\is_array($this->dataDiskConfig)) {
            Model::validateArray($this->dataDiskConfig);
        }
        if (\is_array($this->launchTemplateConfig)) {
            Model::validateArray($this->launchTemplateConfig);
        }
        if (null !== $this->prePaidOptions) {
            $this->prePaidOptions->validate();
        }
        if (\is_array($this->systemDiskConfig)) {
            Model::validateArray($this->systemDiskConfig);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->launchConfiguration) {
            $res['LaunchConfiguration'] = null !== $this->launchConfiguration ? $this->launchConfiguration->toArray($noStream) : $this->launchConfiguration;
        }

        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }

        if (null !== $this->autoProvisioningGroupType) {
            $res['AutoProvisioningGroupType'] = $this->autoProvisioningGroupType;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dataDiskConfig) {
            if (\is_array($this->dataDiskConfig)) {
                $res['DataDiskConfig'] = [];
                $n1                    = 0;
                foreach ($this->dataDiskConfig as $item1) {
                    $res['DataDiskConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
        }

        if (null !== $this->hibernationOptionsConfigured) {
            $res['HibernationOptionsConfigured'] = $this->hibernationOptionsConfigured;
        }

        if (null !== $this->launchTemplateConfig) {
            if (\is_array($this->launchTemplateConfig)) {
                $res['LaunchTemplateConfig'] = [];
                $n1                          = 0;
                foreach ($this->launchTemplateConfig as $item1) {
                    $res['LaunchTemplateConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }

        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }

        if (null !== $this->maxSpotPrice) {
            $res['MaxSpotPrice'] = $this->maxSpotPrice;
        }

        if (null !== $this->minTargetCapacity) {
            $res['MinTargetCapacity'] = $this->minTargetCapacity;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->payAsYouGoAllocationStrategy) {
            $res['PayAsYouGoAllocationStrategy'] = $this->payAsYouGoAllocationStrategy;
        }

        if (null !== $this->payAsYouGoTargetCapacity) {
            $res['PayAsYouGoTargetCapacity'] = $this->payAsYouGoTargetCapacity;
        }

        if (null !== $this->prePaidOptions) {
            $res['PrePaidOptions'] = null !== $this->prePaidOptions ? $this->prePaidOptions->toArray($noStream) : $this->prePaidOptions;
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

        if (null !== $this->resourcePoolOptionsShrink) {
            $res['ResourcePoolOptions'] = $this->resourcePoolOptionsShrink;
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

        if (null !== $this->spotTargetCapacity) {
            $res['SpotTargetCapacity'] = $this->spotTargetCapacity;
        }

        if (null !== $this->systemDiskConfig) {
            if (\is_array($this->systemDiskConfig)) {
                $res['SystemDiskConfig'] = [];
                $n1                      = 0;
                foreach ($this->systemDiskConfig as $item1) {
                    $res['SystemDiskConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->terminateInstances) {
            $res['TerminateInstances'] = $this->terminateInstances;
        }

        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
        }

        if (null !== $this->totalTargetCapacity) {
            $res['TotalTargetCapacity'] = $this->totalTargetCapacity;
        }

        if (null !== $this->validFrom) {
            $res['ValidFrom'] = $this->validFrom;
        }

        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
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
        if (isset($map['LaunchConfiguration'])) {
            $model->launchConfiguration = launchConfiguration::fromMap($map['LaunchConfiguration']);
        }

        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }

        if (isset($map['AutoProvisioningGroupType'])) {
            $model->autoProvisioningGroupType = $map['AutoProvisioningGroupType'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DataDiskConfig'])) {
            if (!empty($map['DataDiskConfig'])) {
                $model->dataDiskConfig = [];
                $n1                    = 0;
                foreach ($map['DataDiskConfig'] as $item1) {
                    $model->dataDiskConfig[$n1++] = dataDiskConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
        }

        if (isset($map['HibernationOptionsConfigured'])) {
            $model->hibernationOptionsConfigured = $map['HibernationOptionsConfigured'];
        }

        if (isset($map['LaunchTemplateConfig'])) {
            if (!empty($map['LaunchTemplateConfig'])) {
                $model->launchTemplateConfig = [];
                $n1                          = 0;
                foreach ($map['LaunchTemplateConfig'] as $item1) {
                    $model->launchTemplateConfig[$n1++] = launchTemplateConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }

        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }

        if (isset($map['MaxSpotPrice'])) {
            $model->maxSpotPrice = $map['MaxSpotPrice'];
        }

        if (isset($map['MinTargetCapacity'])) {
            $model->minTargetCapacity = $map['MinTargetCapacity'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PayAsYouGoAllocationStrategy'])) {
            $model->payAsYouGoAllocationStrategy = $map['PayAsYouGoAllocationStrategy'];
        }

        if (isset($map['PayAsYouGoTargetCapacity'])) {
            $model->payAsYouGoTargetCapacity = $map['PayAsYouGoTargetCapacity'];
        }

        if (isset($map['PrePaidOptions'])) {
            $model->prePaidOptions = prePaidOptions::fromMap($map['PrePaidOptions']);
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

        if (isset($map['ResourcePoolOptions'])) {
            $model->resourcePoolOptionsShrink = $map['ResourcePoolOptions'];
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

        if (isset($map['SpotTargetCapacity'])) {
            $model->spotTargetCapacity = $map['SpotTargetCapacity'];
        }

        if (isset($map['SystemDiskConfig'])) {
            if (!empty($map['SystemDiskConfig'])) {
                $model->systemDiskConfig = [];
                $n1                      = 0;
                foreach ($map['SystemDiskConfig'] as $item1) {
                    $model->systemDiskConfig[$n1++] = systemDiskConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TerminateInstances'])) {
            $model->terminateInstances = $map['TerminateInstances'];
        }

        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
        }

        if (isset($map['TotalTargetCapacity'])) {
            $model->totalTargetCapacity = $map['TotalTargetCapacity'];
        }

        if (isset($map['ValidFrom'])) {
            $model->validFrom = $map['ValidFrom'];
        }

        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }

        return $model;
    }
}
