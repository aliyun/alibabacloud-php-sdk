<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest\connectionTrackingConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest\enhancedNetwork;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest\networkInterfaceTrafficConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest\tag;

class CreateNetworkInterfaceRequest extends Model
{
    /**
     * @var string
     */
    public $businessType;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var connectionTrackingConfiguration
     */
    public $connectionTrackingConfiguration;
    /**
     * @var bool
     */
    public $deleteOnRelease;
    /**
     * @var string
     */
    public $description;
    /**
     * @var enhancedNetwork
     */
    public $enhancedNetwork;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var string[]
     */
    public $ipv4Prefix;
    /**
     * @var int
     */
    public $ipv4PrefixCount;
    /**
     * @var string[]
     */
    public $ipv6Address;
    /**
     * @var int
     */
    public $ipv6AddressCount;
    /**
     * @var string[]
     */
    public $ipv6Prefix;
    /**
     * @var int
     */
    public $ipv6PrefixCount;
    /**
     * @var string
     */
    public $networkInterfaceName;
    /**
     * @var networkInterfaceTrafficConfig
     */
    public $networkInterfaceTrafficConfig;
    /**
     * @var string
     */
    public $networkInterfaceTrafficMode;
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
    public $primaryIpAddress;
    /**
     * @var string[]
     */
    public $privateIpAddress;
    /**
     * @var int
     */
    public $queueNumber;
    /**
     * @var int
     */
    public $queuePairNumber;
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
     * @var int
     */
    public $rxQueueSize;
    /**
     * @var int
     */
    public $secondaryPrivateIpAddressCount;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var string[]
     */
    public $securityGroupIds;
    /**
     * @var bool
     */
    public $sourceDestCheck;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var int
     */
    public $txQueueSize;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var bool
     */
    public $visible;
    protected $_name = [
        'businessType'                    => 'BusinessType',
        'clientToken'                     => 'ClientToken',
        'connectionTrackingConfiguration' => 'ConnectionTrackingConfiguration',
        'deleteOnRelease'                 => 'DeleteOnRelease',
        'description'                     => 'Description',
        'enhancedNetwork'                 => 'EnhancedNetwork',
        'instanceType'                    => 'InstanceType',
        'ipv4Prefix'                      => 'Ipv4Prefix',
        'ipv4PrefixCount'                 => 'Ipv4PrefixCount',
        'ipv6Address'                     => 'Ipv6Address',
        'ipv6AddressCount'                => 'Ipv6AddressCount',
        'ipv6Prefix'                      => 'Ipv6Prefix',
        'ipv6PrefixCount'                 => 'Ipv6PrefixCount',
        'networkInterfaceName'            => 'NetworkInterfaceName',
        'networkInterfaceTrafficConfig'   => 'NetworkInterfaceTrafficConfig',
        'networkInterfaceTrafficMode'     => 'NetworkInterfaceTrafficMode',
        'ownerAccount'                    => 'OwnerAccount',
        'ownerId'                         => 'OwnerId',
        'primaryIpAddress'                => 'PrimaryIpAddress',
        'privateIpAddress'                => 'PrivateIpAddress',
        'queueNumber'                     => 'QueueNumber',
        'queuePairNumber'                 => 'QueuePairNumber',
        'regionId'                        => 'RegionId',
        'resourceGroupId'                 => 'ResourceGroupId',
        'resourceOwnerAccount'            => 'ResourceOwnerAccount',
        'resourceOwnerId'                 => 'ResourceOwnerId',
        'rxQueueSize'                     => 'RxQueueSize',
        'secondaryPrivateIpAddressCount'  => 'SecondaryPrivateIpAddressCount',
        'securityGroupId'                 => 'SecurityGroupId',
        'securityGroupIds'                => 'SecurityGroupIds',
        'sourceDestCheck'                 => 'SourceDestCheck',
        'tag'                             => 'Tag',
        'txQueueSize'                     => 'TxQueueSize',
        'vSwitchId'                       => 'VSwitchId',
        'visible'                         => 'Visible',
    ];

    public function validate()
    {
        if (null !== $this->connectionTrackingConfiguration) {
            $this->connectionTrackingConfiguration->validate();
        }
        if (null !== $this->enhancedNetwork) {
            $this->enhancedNetwork->validate();
        }
        if (\is_array($this->ipv4Prefix)) {
            Model::validateArray($this->ipv4Prefix);
        }
        if (\is_array($this->ipv6Address)) {
            Model::validateArray($this->ipv6Address);
        }
        if (\is_array($this->ipv6Prefix)) {
            Model::validateArray($this->ipv6Prefix);
        }
        if (null !== $this->networkInterfaceTrafficConfig) {
            $this->networkInterfaceTrafficConfig->validate();
        }
        if (\is_array($this->privateIpAddress)) {
            Model::validateArray($this->privateIpAddress);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->connectionTrackingConfiguration) {
            $res['ConnectionTrackingConfiguration'] = null !== $this->connectionTrackingConfiguration ? $this->connectionTrackingConfiguration->toArray($noStream) : $this->connectionTrackingConfiguration;
        }

        if (null !== $this->deleteOnRelease) {
            $res['DeleteOnRelease'] = $this->deleteOnRelease;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enhancedNetwork) {
            $res['EnhancedNetwork'] = null !== $this->enhancedNetwork ? $this->enhancedNetwork->toArray($noStream) : $this->enhancedNetwork;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->ipv4Prefix) {
            if (\is_array($this->ipv4Prefix)) {
                $res['Ipv4Prefix'] = [];
                $n1                = 0;
                foreach ($this->ipv4Prefix as $item1) {
                    $res['Ipv4Prefix'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ipv4PrefixCount) {
            $res['Ipv4PrefixCount'] = $this->ipv4PrefixCount;
        }

        if (null !== $this->ipv6Address) {
            if (\is_array($this->ipv6Address)) {
                $res['Ipv6Address'] = [];
                $n1                 = 0;
                foreach ($this->ipv6Address as $item1) {
                    $res['Ipv6Address'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }

        if (null !== $this->ipv6Prefix) {
            if (\is_array($this->ipv6Prefix)) {
                $res['Ipv6Prefix'] = [];
                $n1                = 0;
                foreach ($this->ipv6Prefix as $item1) {
                    $res['Ipv6Prefix'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ipv6PrefixCount) {
            $res['Ipv6PrefixCount'] = $this->ipv6PrefixCount;
        }

        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }

        if (null !== $this->networkInterfaceTrafficConfig) {
            $res['NetworkInterfaceTrafficConfig'] = null !== $this->networkInterfaceTrafficConfig ? $this->networkInterfaceTrafficConfig->toArray($noStream) : $this->networkInterfaceTrafficConfig;
        }

        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }

        if (null !== $this->privateIpAddress) {
            if (\is_array($this->privateIpAddress)) {
                $res['PrivateIpAddress'] = [];
                $n1                      = 0;
                foreach ($this->privateIpAddress as $item1) {
                    $res['PrivateIpAddress'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->queueNumber) {
            $res['QueueNumber'] = $this->queueNumber;
        }

        if (null !== $this->queuePairNumber) {
            $res['QueuePairNumber'] = $this->queuePairNumber;
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

        if (null !== $this->rxQueueSize) {
            $res['RxQueueSize'] = $this->rxQueueSize;
        }

        if (null !== $this->secondaryPrivateIpAddressCount) {
            $res['SecondaryPrivateIpAddressCount'] = $this->secondaryPrivateIpAddressCount;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1                      = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceDestCheck) {
            $res['SourceDestCheck'] = $this->sourceDestCheck;
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

        if (null !== $this->txQueueSize) {
            $res['TxQueueSize'] = $this->txQueueSize;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConnectionTrackingConfiguration'])) {
            $model->connectionTrackingConfiguration = connectionTrackingConfiguration::fromMap($map['ConnectionTrackingConfiguration']);
        }

        if (isset($map['DeleteOnRelease'])) {
            $model->deleteOnRelease = $map['DeleteOnRelease'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnhancedNetwork'])) {
            $model->enhancedNetwork = enhancedNetwork::fromMap($map['EnhancedNetwork']);
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Ipv4Prefix'])) {
            if (!empty($map['Ipv4Prefix'])) {
                $model->ipv4Prefix = [];
                $n1                = 0;
                foreach ($map['Ipv4Prefix'] as $item1) {
                    $model->ipv4Prefix[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Ipv4PrefixCount'])) {
            $model->ipv4PrefixCount = $map['Ipv4PrefixCount'];
        }

        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = [];
                $n1                 = 0;
                foreach ($map['Ipv6Address'] as $item1) {
                    $model->ipv6Address[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }

        if (isset($map['Ipv6Prefix'])) {
            if (!empty($map['Ipv6Prefix'])) {
                $model->ipv6Prefix = [];
                $n1                = 0;
                foreach ($map['Ipv6Prefix'] as $item1) {
                    $model->ipv6Prefix[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Ipv6PrefixCount'])) {
            $model->ipv6PrefixCount = $map['Ipv6PrefixCount'];
        }

        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }

        if (isset($map['NetworkInterfaceTrafficConfig'])) {
            $model->networkInterfaceTrafficConfig = networkInterfaceTrafficConfig::fromMap($map['NetworkInterfaceTrafficConfig']);
        }

        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }

        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = [];
                $n1                      = 0;
                foreach ($map['PrivateIpAddress'] as $item1) {
                    $model->privateIpAddress[$n1++] = $item1;
                }
            }
        }

        if (isset($map['QueueNumber'])) {
            $model->queueNumber = $map['QueueNumber'];
        }

        if (isset($map['QueuePairNumber'])) {
            $model->queuePairNumber = $map['QueuePairNumber'];
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

        if (isset($map['RxQueueSize'])) {
            $model->rxQueueSize = $map['RxQueueSize'];
        }

        if (isset($map['SecondaryPrivateIpAddressCount'])) {
            $model->secondaryPrivateIpAddressCount = $map['SecondaryPrivateIpAddressCount'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1                      = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceDestCheck'])) {
            $model->sourceDestCheck = $map['SourceDestCheck'];
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

        if (isset($map['TxQueueSize'])) {
            $model->txQueueSize = $map['TxQueueSize'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }

        return $model;
    }
}
