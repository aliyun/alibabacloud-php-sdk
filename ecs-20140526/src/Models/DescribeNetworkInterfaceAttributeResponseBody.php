<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\associatedPublicIp;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\attachment;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\bondInterfaceSpecification;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\ipv4PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\ipv6PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\ipv6Sets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\privateIpSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\securityGroupIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\slaveInterfaceSpecification;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeNetworkInterfaceAttributeResponseBody extends Model
{
    /**
     * @description The elastic IP address (EIP) that is associated with the secondary private IP address of the ENI.
     *
     * @var associatedPublicIp
     */
    public $associatedPublicIp;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @var attachment
     */
    public $attachment;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @var bondInterfaceSpecification
     */
    public $bondInterfaceSpecification;

    /**
     * @description The time when the ENI was created.
     *
     * @example 2019-12-25T12:31:31Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $deleteOnRelease;

    /**
     * @description The description of the ENI.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the instance to which the ENI is attached.
     *
     * > If the ENI is managed and controlled by other Alibaba Cloud services, no instance ID is returned.
     * @example i-bp1e2l6djkndyuli****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IPv4 address prefixes of the ENI.
     *
     * @var ipv4PrefixSets
     */
    public $ipv4PrefixSets;

    /**
     * @description The IPv6 address prefixes of the ENI.
     *
     * @var ipv6PrefixSets
     */
    public $ipv6PrefixSets;

    /**
     * @description The IPv6 addresses of the ENI.
     *
     * @var ipv6Sets
     */
    public $ipv6Sets;

    /**
     * @description The media access control (MAC) address of the ENI.
     *
     * @example 00:16:3e:12:**:**
     *
     * @var string
     */
    public $macAddress;

    /**
     * @description The ID of the ENI.
     *
     * @example eni-bp125p95hhdhn3ot****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The name of the ENI.
     *
     * @example my-eni-name
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description The communication mode of the ENI. Valid values:
     *
     *   Standard: The TCP communication mode is used.
     *   HighPerformance: Elastic RDMA Interface (ERI) is enabled and the remote direct memory access (RDMA) communication mode is used.
     *
     * > This parameter can have a value of HighPerformance only when the ENI is attached to a c7re RDMA-enhanced instance that resides in Beijing Zone K.
     * @example Standard
     *
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The ID of the account to which the ENI belongs.
     *
     * @example 123456****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The private IP address of the ENI.
     *
     * @example 10.1.**.**
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description Details about the private IP addresses.
     *
     * @var privateIpSets
     */
    public $privateIpSets;

    /**
     * @description The number of queues supported by the ENI.
     *
     *   For a primary ENI: The default number of queues that the instance type supports for the ENI is returned.
     *
     *   For a secondary ENI:
     *
     *   When the ENI is in the InUse state, the following situations occur for the QueueNumber parameter:
     *
     *   If the number of queues supported by the ENI has not been modified, the default number of queues that the instance type supports for the ENI is returned.
     *   If the number of queues supported by the ENI has been modified, the new number of queues is returned.
     *
     *   When the ENI is in the Available state, the following situations occur for the QueueNumber parameter:
     *
     *   If the number of queues supported by the ENI has not been modified, the return value is empty.
     *   If the number of queues supported by the ENI has been modified, the new number of queues is returned.
     *
     * @example 8
     *
     * @var int
     */
    public $queueNumber;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example 22
     *
     * @var int
     */
    public $queuePairNumber;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the instance belongs. If this parameter is specified to query resources, up to 1,000 resources that belong to the specified resource group can be displayed in the response.
     *
     * > Resources in the default resource group are displayed in the response regardless of how this parameter is set.
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The IDs of the security groups to which the ENI belongs.
     *
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @description The ID of the distributor to which the ENI belongs.
     *
     * @example 12345678910
     *
     * @var int
     */
    public $serviceID;

    /**
     * @description Indicates whether the user of the ENI is an Alibaba Cloud service or a distributor.
     *
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @var slaveInterfaceSpecification
     */
    public $slaveInterfaceSpecification;

    /**
     * @description The state of the ENI. Valid values:
     *
     *   Available: The ENI is not attached to an instance.
     *   Attaching: The ENI is being attached to an instance.
     *   InUse: The ENI is attached to an instance.
     *   Detaching: The ENI is being detached from an instance.
     *   Deleting: The ENI is being deleted.
     *
     * This parameter is empty by default, which indicates that all states are queried.
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the ENI.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The type of the ENI. Valid values:
     *
     *   Primary
     *   Secondary
     *
     * @example Secondary
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the vSwitch to which the ENI is connected.
     *
     * @example vsw-bp1s5fnvk4gn2tws0****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the ENI belongs.
     *
     * @example vpc-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'associatedPublicIp'          => 'AssociatedPublicIp',
        'attachment'                  => 'Attachment',
        'bondInterfaceSpecification'  => 'BondInterfaceSpecification',
        'creationTime'                => 'CreationTime',
        'deleteOnRelease'             => 'DeleteOnRelease',
        'description'                 => 'Description',
        'instanceId'                  => 'InstanceId',
        'ipv4PrefixSets'              => 'Ipv4PrefixSets',
        'ipv6PrefixSets'              => 'Ipv6PrefixSets',
        'ipv6Sets'                    => 'Ipv6Sets',
        'macAddress'                  => 'MacAddress',
        'networkInterfaceId'          => 'NetworkInterfaceId',
        'networkInterfaceName'        => 'NetworkInterfaceName',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'ownerId'                     => 'OwnerId',
        'privateIpAddress'            => 'PrivateIpAddress',
        'privateIpSets'               => 'PrivateIpSets',
        'queueNumber'                 => 'QueueNumber',
        'queuePairNumber'             => 'QueuePairNumber',
        'requestId'                   => 'RequestId',
        'resourceGroupId'             => 'ResourceGroupId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'serviceID'                   => 'ServiceID',
        'serviceManaged'              => 'ServiceManaged',
        'slaveInterfaceSpecification' => 'SlaveInterfaceSpecification',
        'status'                      => 'Status',
        'tags'                        => 'Tags',
        'type'                        => 'Type',
        'vSwitchId'                   => 'VSwitchId',
        'vpcId'                       => 'VpcId',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedPublicIp) {
            $res['AssociatedPublicIp'] = null !== $this->associatedPublicIp ? $this->associatedPublicIp->toMap() : null;
        }
        if (null !== $this->attachment) {
            $res['Attachment'] = null !== $this->attachment ? $this->attachment->toMap() : null;
        }
        if (null !== $this->bondInterfaceSpecification) {
            $res['BondInterfaceSpecification'] = null !== $this->bondInterfaceSpecification ? $this->bondInterfaceSpecification->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deleteOnRelease) {
            $res['DeleteOnRelease'] = $this->deleteOnRelease;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipv4PrefixSets) {
            $res['Ipv4PrefixSets'] = null !== $this->ipv4PrefixSets ? $this->ipv4PrefixSets->toMap() : null;
        }
        if (null !== $this->ipv6PrefixSets) {
            $res['Ipv6PrefixSets'] = null !== $this->ipv6PrefixSets ? $this->ipv6PrefixSets->toMap() : null;
        }
        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = null !== $this->ipv6Sets ? $this->ipv6Sets->toMap() : null;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->privateIpSets) {
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toMap() : null;
        }
        if (null !== $this->queueNumber) {
            $res['QueueNumber'] = $this->queueNumber;
        }
        if (null !== $this->queuePairNumber) {
            $res['QueuePairNumber'] = $this->queuePairNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }
        if (null !== $this->serviceID) {
            $res['ServiceID'] = $this->serviceID;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->slaveInterfaceSpecification) {
            $res['SlaveInterfaceSpecification'] = null !== $this->slaveInterfaceSpecification ? $this->slaveInterfaceSpecification->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkInterfaceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedPublicIp'])) {
            $model->associatedPublicIp = associatedPublicIp::fromMap($map['AssociatedPublicIp']);
        }
        if (isset($map['Attachment'])) {
            $model->attachment = attachment::fromMap($map['Attachment']);
        }
        if (isset($map['BondInterfaceSpecification'])) {
            $model->bondInterfaceSpecification = bondInterfaceSpecification::fromMap($map['BondInterfaceSpecification']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeleteOnRelease'])) {
            $model->deleteOnRelease = $map['DeleteOnRelease'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ipv4PrefixSets'])) {
            $model->ipv4PrefixSets = ipv4PrefixSets::fromMap($map['Ipv4PrefixSets']);
        }
        if (isset($map['Ipv6PrefixSets'])) {
            $model->ipv6PrefixSets = ipv6PrefixSets::fromMap($map['Ipv6PrefixSets']);
        }
        if (isset($map['Ipv6Sets'])) {
            $model->ipv6Sets = ipv6Sets::fromMap($map['Ipv6Sets']);
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['PrivateIpSets'])) {
            $model->privateIpSets = privateIpSets::fromMap($map['PrivateIpSets']);
        }
        if (isset($map['QueueNumber'])) {
            $model->queueNumber = $map['QueueNumber'];
        }
        if (isset($map['QueuePairNumber'])) {
            $model->queuePairNumber = $map['QueuePairNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['ServiceID'])) {
            $model->serviceID = $map['ServiceID'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['SlaveInterfaceSpecification'])) {
            $model->slaveInterfaceSpecification = slaveInterfaceSpecification::fromMap($map['SlaveInterfaceSpecification']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
