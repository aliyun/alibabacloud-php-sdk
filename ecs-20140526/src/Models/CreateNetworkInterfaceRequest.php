<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest\connectionTrackingConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateNetworkInterfaceRequest extends Model
{
    /**
     * @description > This parameter is no longer used.
     *
     * @example null
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var connectionTrackingConfiguration
     */
    public $connectionTrackingConfiguration;

    /**
     * @description Specifies whether to release the ENI when the associated instance is released. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $deleteOnRelease;

    /**
     * @description The description of the ENI. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * This parameter is empty by default.
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the ENI. Valid values:
     *
     *   Secondary: secondary ENI.
     *   Trunk: trunk ENI. This value is in invitational preview.
     *
     * Default value: Secondary.
     * @example null
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description IPv4 prefixes to assign to the ENI. Valid values of N: 1 to 10.
     *
     * >  To assign IPv4 prefixes to the ENI, you must specify the Ipv4Prefix.N or Ipv4PrefixCount parameter, but not both.
     * @var string[]
     */
    public $ipv4Prefix;

    /**
     * @description The number of IPv4 prefixes to assign to the ENI. Valid values: 1 to 10.
     *
     * >  To assign IPv4 prefixes to the ENI, you must specify the Ipv4Prefix.N or Ipv4PrefixCount parameter, but not both.
     * @example hide
     *
     * @var int
     */
    public $ipv4PrefixCount;

    /**
     * @description IPv6 addresses to assign to the ENI. Valid values of N: 1 to 10.
     *
     * Example: Ipv6Address.1=2001:db8:1234:1a00::\*\*\*\*
     *
     * >  To assign IPv6 addresses to the ENI, you must specify the `Ipv6Addresses.N` or `Ipv6AddressCount` parameter, but not both.
     * @example 2001:db8:1234:1a00::****
     *
     * @var string[]
     */
    public $ipv6Address;

    /**
     * @description The number of IPv6 addresses to randomly generate for the ENI. Valid values: 1 to 10.
     *
     * >  To assign IPv6 addresses to the ENI, you must specify the `Ipv6Addresses.N` or `Ipv6AddressCount` parameter, but not both.
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description IPv6 prefixes to assign to the ENI. Valid values of N: 1 to 10.
     *
     * >  To assign IPv6 prefixes to the ENI, you must specify the Ipv6Prefix.N or Ipv6PrefixCount parameter, but not both.
     * @var string[]
     */
    public $ipv6Prefix;

    /**
     * @description The number of IPv6 prefixes to assign to the ENI. Valid values: 1 to 10.
     *
     * >  To assign IPv6 prefixes to the ENI, you must specify the Ipv6Prefix.N or Ipv6PrefixCount parameter, but not both.
     * @example hide
     *
     * @var int
     */
    public $ipv6PrefixCount;

    /**
     * @description The name of the ENI. The name must be 2 to 128 characters in length, and can contain letters, digits, colons (:), underscores (\_), and hyphens (-). It must start with a letter and cannot start with `http://` or `https://`.
     *
     * This parameter is empty by default.
     * @example testNetworkInterfaceName
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description The communication mode of the ENI. Valid values:
     *
     *   Standard: uses the TCP communication mode.
     *   HighPerformance: uses the remote direct memory access (RDMA) communication mode with Elastic RDMA Interface (ERI) enabled.
     *
     * Default value: Standard.
     * @example Standard
     *
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
     * @description The primary private IP address of the ENI.
     *
     * The specified IP address must be an idle IP address within the CIDR block of the vSwitch with which to associate the ENI. If this parameter is not specified, an idle IP address is assigned from within the vSwitch CIDR block at random.
     * @example 172.17.**.**
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description Secondary private IP addresses to assign to the ENI. The IP addresses must be idle IP addresses in the CIDR block of the vSwitch with which to associate the ENI. Valid values of N: 0 to 10.
     *
     * >  To assign secondary private IP addresses to the ENI, you can specify the `PrivateIpAddress.N` or `SecondaryPrivateIpAddressCount` parameter, but not both.
     * @example 172.17.**.**
     *
     * @var string[]
     */
    public $privateIpAddress;

    /**
     * @description The number of queues supported by the ENI. Valid values: 1 to 2048.
     *
     * This parameter is left empty by default. If you do not specify this parameter, the default number of queues per ENI for the instance type of an instance is used when you attach the ENI to the instance. To view the default number of queues per ENI for an instance type, you can call the [DescribeInstanceTypes](~~25620~~) operation and then check the return value of `SecondaryEniQueueNumber`.
     * @example 1
     *
     * @var int
     */
    public $queueNumber;

    /**
     * @description > This parameter is in invitational preview and is not publicly available.
     *
     * @example 22
     *
     * @var int
     */
    public $queuePairNumber;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which you want to assign the ENI. You can call the [ListResourceGroups](~~158855~~) operation to query the most recent resource group list.
     *
     * @example rg-bp67acfmxazb4ph****
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
     * @description The receive (Rx) queue depth of the ENI.
     *
     * Take note of the following items:
     *
     *   The Rx queue depth of an ENI must be the same as the Tx queue depth of the ENI. Valid values: powers of 2 in the range of 8192 to 16384.
     *   A larger Rx queue depth yields higher inbound throughput but consumes more memory.
     *
     * @example 8192
     *
     * @var int
     */
    public $rxQueueSize;

    /**
     * @description The number of private IP addresses to be assigned by ECS. Valid values: 1 to 49.
     *
     * @example 1
     *
     * @var int
     */
    public $secondaryPrivateIpAddressCount;

    /**
     * @description The ID of the security group to which to assign the ENI. The security group and the ENI must belong to the same VPC.
     *
     * > You must specify `SecurityGroupId` or `SecurityGroupIds.N` but not both.
     * @example sg-bp1fg655nh68xyz9i****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of security group N to which to assign the ENI. The security group and the ENI must belong to the same VPC. The valid values of N are determined based on the maximum number of security groups to which an ENI can be assigned. For more information, see [Limits](~~25412~~).
     *
     **
     *
     * You must specify **SecurityGroupId** or SecurityGroupIds.N but not both.````
     * @example sg-bp1fg655nh68xyz9i****
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The tags to add to the ENI.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The transmit (Tx) queue depth of the ENI.
     *
     * Take note of the following items:
     *
     *   The Tx queue depth of an ENI must be the same as the Rx queue depth of the ENI. Valid values: powers of 2 in the range of 8192 to 16384.
     *   A larger Tx queue depth yields higher outbound throughput but consumes more memory.
     *
     * @example 8192
     *
     * @var int
     */
    public $txQueueSize;

    /**
     * @description The ID of the vSwitch with which to associate the ENI. Private IP addresses are assigned to the ENI from within the CIDR block of the vSwitch.
     *
     * @example vsw-bp1s5fnvk4gn2tws03****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description > This parameter is no longer used.
     *
     * @example null
     *
     * @var bool
     */
    public $visible;
    protected $_name = [
        'businessType'                    => 'BusinessType',
        'clientToken'                     => 'ClientToken',
        'connectionTrackingConfiguration' => 'ConnectionTrackingConfiguration',
        'deleteOnRelease'                 => 'DeleteOnRelease',
        'description'                     => 'Description',
        'instanceType'                    => 'InstanceType',
        'ipv4Prefix'                      => 'Ipv4Prefix',
        'ipv4PrefixCount'                 => 'Ipv4PrefixCount',
        'ipv6Address'                     => 'Ipv6Address',
        'ipv6AddressCount'                => 'Ipv6AddressCount',
        'ipv6Prefix'                      => 'Ipv6Prefix',
        'ipv6PrefixCount'                 => 'Ipv6PrefixCount',
        'networkInterfaceName'            => 'NetworkInterfaceName',
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
        'tag'                             => 'Tag',
        'txQueueSize'                     => 'TxQueueSize',
        'vSwitchId'                       => 'VSwitchId',
        'visible'                         => 'Visible',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->connectionTrackingConfiguration) {
            $res['ConnectionTrackingConfiguration'] = null !== $this->connectionTrackingConfiguration ? $this->connectionTrackingConfiguration->toMap() : null;
        }
        if (null !== $this->deleteOnRelease) {
            $res['DeleteOnRelease'] = $this->deleteOnRelease;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipv4Prefix) {
            $res['Ipv4Prefix'] = $this->ipv4Prefix;
        }
        if (null !== $this->ipv4PrefixCount) {
            $res['Ipv4PrefixCount'] = $this->ipv4PrefixCount;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }
        if (null !== $this->ipv6Prefix) {
            $res['Ipv6Prefix'] = $this->ipv6Prefix;
        }
        if (null !== $this->ipv6PrefixCount) {
            $res['Ipv6PrefixCount'] = $this->ipv6PrefixCount;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
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
            $res['PrivateIpAddress'] = $this->privateIpAddress;
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
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CreateNetworkInterfaceRequest
     */
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Ipv4Prefix'])) {
            if (!empty($map['Ipv4Prefix'])) {
                $model->ipv4Prefix = $map['Ipv4Prefix'];
            }
        }
        if (isset($map['Ipv4PrefixCount'])) {
            $model->ipv4PrefixCount = $map['Ipv4PrefixCount'];
        }
        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = $map['Ipv6Address'];
            }
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['Ipv6Prefix'])) {
            if (!empty($map['Ipv6Prefix'])) {
                $model->ipv6Prefix = $map['Ipv6Prefix'];
            }
        }
        if (isset($map['Ipv6PrefixCount'])) {
            $model->ipv6PrefixCount = $map['Ipv6PrefixCount'];
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
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
                $model->privateIpAddress = $map['PrivateIpAddress'];
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
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
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
