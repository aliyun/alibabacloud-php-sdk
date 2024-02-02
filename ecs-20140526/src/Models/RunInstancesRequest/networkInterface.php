<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class networkInterface extends Model
{
    /**
     * @description Specifies whether to release ENI N when the instance is released. Valid values:
     *
     * Example: true.
     * @example true
     *
     * @var bool
     */
    public $deleteOnRelease;

    /**
     * @description The description of ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you do not need to set this parameter.
     *
     * @example Network_Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of ENI N. Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *
     * Valid values:
     *
     *   Primary
     *   Secondary
     *
     * Default value: Secondary.
     * @example Secondary
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description IPv6 address N to assign to the primary ENI. Up to 10 IPv6 addresses can be assigned to the primary ENI. Valid values of the second N: 1 to 10.
     *
     * Example: `Ipv6Address.1=2001:db8:1234:1a00::***`.
     *
     * Take note of the following items:
     *
     *   This parameter is valid only when `NetworkInterface.N.InstanceType` is set to `Primary`. If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, you cannot set this parameter.
     *   If you specify this parameter, you must set `Amount` to 1. You cannot specify `Ipv6AddressCount`, `Ipv6Address.N`, or `NetworkInterface.N.Ipv6AddressCount`.
     *
     * @var string[]
     */
    public $ipv6Address;

    /**
     * @description The number of IPv6 addresses that the system randomly generates for the primary ENI. Valid values: 1 to 10.
     *
     * Take note of the following items:
     *
     *   This parameter is valid only when `NetworkInterface.N.InstanceType` is set to `Primary`. If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, you cannot set this parameter.
     *   If you specify this parameter, you cannot specify `Ipv6AddressCount`, `Ipv6Address.N`, or `NetworkInterface.N.Ipv6Address.N`.
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The network interface controller (NIC) index specified for an ENI.
     *
     * - If NetworkInterface.N.InstanceType is set to Secondary or left empty, specify this parameter based on the instance type of the instance that supports NICs. For more information, see [Overview of instance families](~~25378~~).
     * @example 0
     *
     * @var int
     */
    public $networkCardIndex;

    /**
     * @description The ID of ENI N.
     *
     * > Note This parameter takes effect only for secondary ENIs.
     * Example: eni-bp1gn106np8jhxhj****.
     * @example eni-bp1gn106np8jhxhj****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The name of ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you do not need to set this parameter.
     *
     * @example Network_Name
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description The communication mode of primary ENI N. Valid values:
     *
     *   Standard: uses the TCP communication mode.
     *   HighPerformance: enables the Elastic RDMA Interface (ERI) and uses the remote direct memory access (RDMA) communication mode.
     *
     * Take note of the following items:
     *
     *   This parameter is valid only when `NetworkInterface.N.InstanceType` is set to `Primary`. If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, you cannot set this parameter.
     *   If you set this parameter to HighPerformance, you can create instances only of the c7re RDMA-enhanced instance family. The maximum number of ENIs in RDMA mode that can be bound to a c7re instance is determined based on the instance type. The c7re instance family is in invitational preview in Beijing Zone K. For more information, see [Instance family](~~25378~~).
     *
     * @example Standard
     *
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The primary IP address to assign to ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2.
     *
     *   If the value of N is 1, you can configure a primary or secondary ENI. If this parameter is specified, `Amount` is set to a numeric value greater than 1, and NetworkInterface.N.InstanceType is set to Primary, the specified number of instances are created and consecutive primary IP addresses starting from the specified one are assigned to the instances. In this case, you cannot bind secondary ENIs to the instances.
     *   If the value of N is 2, you can configure a primary ENI and a secondary ENI. If this parameter is specified, `Amount` is set to a numeric value greater than 1, and NetworkInterface.N.InstanceType is set to Primary, you cannot specify `NetworkInterface.2.InstanceType` to Secondary to bind a secondary ENI.
     *
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, this parameter is equivalent to `PrivateIpAddress` and you cannot specify both NetworkInterface.N.PrimaryIpAddress and `PrivateIpAddress`.
     *
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, the specified primary IP address is assigned to the secondary ENI. The default value is an IP address that is randomly selected from within the CIDR block of the vSwitch to which to connect the secondary ENI.
     *
     * > You can bind only a single secondary ENI when you create an instance. After the instance is created, you can call the [CreateNetworkInterface](~~58504~~) and [AttachNetworkInterface](~~58515~~) operations to bind more secondary ENIs.
     * @example 172.16.**.**
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description The number of queues supported by ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can set a primary or secondary ENI. If the value of N is 2, you can set a primary ENI and a secondary ENI.
     *   The value of this parameter cannot exceed the maximum number of queues per ENI allowed for the specified instance type.
     *   The total number of queues for all ENIs on the instance cannot exceed the queue quota for the instance type. To query the maximum number of queues per ENI and the queue quota for an instance type, you can call the [DescribeInstanceTypes](~~25620~~) operation to query the `MaximumQueueNumberPerEni` and `TotalEniQueueQuantity` values.
     *   If this parameter is set and `NetworkInterface.N.InstanceType` is set to `Primary`, you cannot set the `NetworkInterfaceQueueNumber` parameter.
     *
     * @example 8
     *
     * @var int
     */
    public $queueNumber;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example 0
     *
     * @var int
     */
    public $queuePairNumber;

    /**
     * @var int
     */
    public $rxQueueSize;

    /**
     * @description The ID of the security group to which to assign secondary ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you must set this parameter. In this case, this parameter is equivalent to `SecurityGroupId` and you cannot specify `SecurityGroupId`, `SecurityGroupIds.N`, or `NetworkInterface.N.SecurityGroupIds.N`.
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, this parameter is optional. The default value is the ID of the security group to which to assign the ECS instance.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of security group N to which to assign ENI N.
     *
     *   Valid values of the first N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   The second N indicates that one or more security group IDs can be specified. The valid values of N vary based on the maximum number of security groups to which an instance can belong. For more information, see the "Security group limits" section in [Limits](~~25412#SecurityGroupQuota1~~).
     *
     * Take note of the following items:
     *
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you must set this parameter or `NetworkInterface.N.SecurityGroupId`. In this case, this parameter is equivalent to `SecurityGroupIds.N` and you cannot specify `SecurityGroupId`, `SecurityGroupIds.N`, or `NetworkInterface.N.SecurityGroupId`.
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, this parameter is optional. The default value is the ID of the security group to which to assign the ECS instance.
     *
     * @example sg-bp15ed6xe1yxeycg7****
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var int
     */
    public $txQueueSize;

    /**
     * @description The ID of the vSwitch to which to connect to ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you must set this parameter. In this case, this parameter is equivalent to `VSwitchId` and you cannot specify `VSwitchId`.
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, this parameter is optional. The default value is the ID of the vSwitch to which to connect to the instance.
     *
     * @example vsw-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'deleteOnRelease'             => 'DeleteOnRelease',
        'description'                 => 'Description',
        'instanceType'                => 'InstanceType',
        'ipv6Address'                 => 'Ipv6Address',
        'ipv6AddressCount'            => 'Ipv6AddressCount',
        'networkCardIndex'            => 'NetworkCardIndex',
        'networkInterfaceId'          => 'NetworkInterfaceId',
        'networkInterfaceName'        => 'NetworkInterfaceName',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'primaryIpAddress'            => 'PrimaryIpAddress',
        'queueNumber'                 => 'QueueNumber',
        'queuePairNumber'             => 'QueuePairNumber',
        'rxQueueSize'                 => 'RxQueueSize',
        'securityGroupId'             => 'SecurityGroupId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'txQueueSize'                 => 'TxQueueSize',
        'vSwitchId'                   => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteOnRelease) {
            $res['DeleteOnRelease'] = $this->deleteOnRelease;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }
        if (null !== $this->networkCardIndex) {
            $res['NetworkCardIndex'] = $this->networkCardIndex;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }
        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }
        if (null !== $this->queueNumber) {
            $res['QueueNumber'] = $this->queueNumber;
        }
        if (null !== $this->queuePairNumber) {
            $res['QueuePairNumber'] = $this->queuePairNumber;
        }
        if (null !== $this->rxQueueSize) {
            $res['RxQueueSize'] = $this->rxQueueSize;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->txQueueSize) {
            $res['TxQueueSize'] = $this->txQueueSize;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterface
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteOnRelease'])) {
            $model->deleteOnRelease = $map['DeleteOnRelease'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = $map['Ipv6Address'];
            }
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['NetworkCardIndex'])) {
            $model->networkCardIndex = $map['NetworkCardIndex'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }
        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }
        if (isset($map['QueueNumber'])) {
            $model->queueNumber = $map['QueueNumber'];
        }
        if (isset($map['QueuePairNumber'])) {
            $model->queuePairNumber = $map['QueuePairNumber'];
        }
        if (isset($map['RxQueueSize'])) {
            $model->rxQueueSize = $map['RxQueueSize'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['TxQueueSize'])) {
            $model->txQueueSize = $map['TxQueueSize'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
