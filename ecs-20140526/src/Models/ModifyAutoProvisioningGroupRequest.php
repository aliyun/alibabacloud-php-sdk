<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoProvisioningGroupRequest\launchTemplateConfig;

class ModifyAutoProvisioningGroupRequest extends Model
{
    /**
     * @var string
     */
    public $autoProvisioningGroupId;

    /**
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @var string
     */
    public $excessCapacityTerminationPolicy;

    /**
     * @var launchTemplateConfig[]
     */
    public $launchTemplateConfig;

    /**
     * @var float
     */
    public $maxSpotPrice;

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
    public $payAsYouGoTargetCapacity;

    /**
     * @var string
     */
    public $regionId;

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
    public $spotTargetCapacity;

    /**
     * @var bool
     */
    public $terminateInstancesWithExpiration;

    /**
     * @var string
     */
    public $totalTargetCapacity;
    protected $_name = [
        'autoProvisioningGroupId' => 'AutoProvisioningGroupId',
        'autoProvisioningGroupName' => 'AutoProvisioningGroupName',
        'defaultTargetCapacityType' => 'DefaultTargetCapacityType',
        'excessCapacityTerminationPolicy' => 'ExcessCapacityTerminationPolicy',
        'launchTemplateConfig' => 'LaunchTemplateConfig',
        'maxSpotPrice' => 'MaxSpotPrice',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'payAsYouGoTargetCapacity' => 'PayAsYouGoTargetCapacity',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'spotTargetCapacity' => 'SpotTargetCapacity',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'totalTargetCapacity' => 'TotalTargetCapacity',
    ];

    public function validate()
    {
        if (\is_array($this->launchTemplateConfig)) {
            Model::validateArray($this->launchTemplateConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }

        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }

        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }

        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
        }

        if (null !== $this->launchTemplateConfig) {
            if (\is_array($this->launchTemplateConfig)) {
                $res['LaunchTemplateConfig'] = [];
                $n1 = 0;
                foreach ($this->launchTemplateConfig as $item1) {
                    $res['LaunchTemplateConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxSpotPrice) {
            $res['MaxSpotPrice'] = $this->maxSpotPrice;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->payAsYouGoTargetCapacity) {
            $res['PayAsYouGoTargetCapacity'] = $this->payAsYouGoTargetCapacity;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->spotTargetCapacity) {
            $res['SpotTargetCapacity'] = $this->spotTargetCapacity;
        }

        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
        }

        if (null !== $this->totalTargetCapacity) {
            $res['TotalTargetCapacity'] = $this->totalTargetCapacity;
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
        if (isset($map['AutoProvisioningGroupId'])) {
            $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
        }

        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }

        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }

        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
        }

        if (isset($map['LaunchTemplateConfig'])) {
            if (!empty($map['LaunchTemplateConfig'])) {
                $model->launchTemplateConfig = [];
                $n1 = 0;
                foreach ($map['LaunchTemplateConfig'] as $item1) {
                    $model->launchTemplateConfig[$n1++] = launchTemplateConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxSpotPrice'])) {
            $model->maxSpotPrice = $map['MaxSpotPrice'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PayAsYouGoTargetCapacity'])) {
            $model->payAsYouGoTargetCapacity = $map['PayAsYouGoTargetCapacity'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SpotTargetCapacity'])) {
            $model->spotTargetCapacity = $map['SpotTargetCapacity'];
        }

        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
        }

        if (isset($map['TotalTargetCapacity'])) {
            $model->totalTargetCapacity = $map['TotalTargetCapacity'];
        }

        return $model;
    }
}
