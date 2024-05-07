<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class networkInterface extends Model
{
    /**
     * @description Specifies whether to retain ENI N when the associated instance is released. Valid values:
     *
     *   true
     *   false
     *
     * >  This parameter takes effect only for secondary ENIs.
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
     *   If you specify this parameter, you must set `Amount` to 1 and cannot specify `Ipv6AddressCount`, `Ipv6Address.N`, or `NetworkInterface.N.Ipv6AddressCount`.
     *
     * @var string[]
     */
    public $ipv6Address;

    /**
     * @description The number of IPv6 addresses to randomly generate for the primary ENI. Valid values: 1 to 10.
     *
     * Take note of the following items:
     *
     *   This parameter is valid only when `NetworkInterface.N.InstanceType` is set to `Primary`. If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, you cannot set this parameter.
     *   If this parameter is specified, you cannot specify `Ipv6AddressCount`, `Ipv6Address.N`, or `NetworkInterface.N.Ipv6Address.N`.
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The index of the network card for ENI N.
     *
     * Take note of the following items:
     *
     *   You can specify network card indexes only for instances of specific instance types.
     *   When NetworkInterface.N.InstanceType is set to Primary, you can set NetworkInterface.N.NetworkCardIndex only to 0 for instance types that support network cards.
     *   When NetworkInterface.N.InstanceType is set to Secondary or left empty, you can set NetworkInterface.N.NetworkCardIndex based on instance types if the instance types support network cards. For more information, see the [Overview of instance families](~~25378~~) topic.
     *
     * @example 0
     *
     * @var int
     */
    public $networkCardIndex;

    /**
     * @description The ID of ENI N to attach to the instance.
     *
     * >  This parameter takes effect only for secondary ENIs. After you specify an existing secondary ENI, you cannot configure other ENI creation parameters.
     * @example eni-bp1gn106np8jhxhj****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The name of ENI N. The name must be 2 to 128 characters in length and support Unicode characters under the Decimal Number category and the categories whose names contain Letter. The name can contain colons (:), underscores (\_), periods (.), and hyphens (-).
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
     * @description The communication mode of ENI N. Valid values:
     *
     *   Standard: The TCP communication mode is used.
     *   HighPerformance: The Elastic RDMA Interface (ERI) is enabled and the remote direct memory access (RDMA) communication mode is used.
     *
     * >  The number of ERIs on an instance cannot exceed the maximum number of ERIs that the instance type supports. For more information, see [Overview of instance families](~~25378~~).
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
     *   If the value of N is 1, you can configure a primary or secondary ENI. If this parameter is specified, `Amount` is set to a numeric value greater than 1, and NetworkInterface.N.InstanceType is set to Primary, the specified number of instances are created and consecutive primary IP addresses starting from the specified one are assigned to the instances. In this case, you cannot attach secondary ENIs to the instances.
     *   If the value of N is 2, you can configure a primary ENI and a secondary ENI. If this parameter is specified, `Amount` is set to a numeric value greater than 1, and NetworkInterface.N.InstanceType is set to Primary, you cannot set `NetworkInterface.2.InstanceType` to Secondary to attach a secondary ENI.
     *
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, this parameter is equivalent to `PrivateIpAddress`. You cannot specify both NetworkInterface.N.PrimaryIpAddress and `PrivateIpAddress`.
     *
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, the specified primary IP address is assigned to the secondary ENI. The default value is an IP address that is randomly selected from within the CIDR block of the vSwitch to which to connect the secondary ENI.
     *
     * >
     *
     *   You can attach only a single secondary ENI when you create an ECS instance. After the instance is created, you can call the [CreateNetworkInterface](~~58504~~) and [AttachNetworkInterface](~~58515~~) operations to attach more secondary ENIs.
     *
     *   The first IP address and last three IP addresses of each vSwitch CIDR block are reserved. You cannot specify the IP addresses. For example, if a vSwitch CIDR block is 192.168.1.0/24, the IP addresses 192.168.1.0, 192.168.1.253, 192.168.1.254, and 192.168.1.255 are reserved.
     *
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
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   The value of this parameter cannot exceed the maximum number of queues per ENI allowed for the instance type.
     *   The total number of queues for all ENIs on the instance cannot exceed the queue quota for the instance type. To learn the maximum number of queues per ENI and the queue quota for an instance type, you can call the [DescribeInstanceTypes](~~25620~~) operation to query the `MaximumQueueNumberPerEni` and `TotalEniQueueQuantity` values.
     *   If this parameter is set and `NetworkInterface.N.InstanceType` is set to `Primary`, you cannot specify `NetworkInterfaceQueueNumber`.
     *
     * @example 8
     *
     * @var int
     */
    public $queueNumber;

    /**
     * @description The number of queues supported by the ERI.
     *
     * @example 0
     *
     * @var int
     */
    public $queuePairNumber;

    /**
     * @description The receive (Rx) queue depth of ENI N.
     *
     * Take note of the following items:
     *
     *   The Rx queue depth of an ENI must be the same as the transmit (Tx) queue depth of the ENI. Valid values: powers of 2 in the range of 8192 to 16384.
     *   A larger Rx queue depth yields higher inbound throughput but consumes more memory.
     *
     * @example 8192
     *
     * @var int
     */
    public $rxQueueSize;

    /**
     * @description The ID of the security group to which to assign ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you must set this parameter. In this case, this parameter is equivalent to `SecurityGroupId`. You cannot specify `SecurityGroupId`, `SecurityGroupIds.N`, or `NetworkInterface.N.SecurityGroupIds.N`.
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, this parameter is optional. The default value is the ID of the security group to which the instance belongs.
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
     *   The second N indicates that one or more security group IDs can be specified. The valid values of N vary based on the maximum number of security groups to which an instance can belong. For more information, see the [Security group limits](~~25412#SecurityGroupQuota1~~) section in the "Limits" topic.
     *
     * Take note of the following items:
     *
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you must specify this parameter or `NetworkInterface.N.SecurityGroupId`. In this case, this parameter is equivalent to `SecurityGroupIds.N`. You cannot specify `SecurityGroupId`, `SecurityGroupIds.N`, or `NetworkInterface.N.SecurityGroupId`.
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, this parameter is optional. The default value is the ID of the security group to which the instance belongs.
     *
     * @example sg-bp15ed6xe1yxeycg7****
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The Tx queue depth of ENI N.
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
     * @description The ID of the vSwitch to which to connect ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you must set this parameter. In this case, this parameter is equivalent to `VSwitchId`. You cannot specify both NetworkInterface.N.VSwitchId and `VSwitchId`.
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, this parameter is optional. The default value is the VSwitchId value.
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
