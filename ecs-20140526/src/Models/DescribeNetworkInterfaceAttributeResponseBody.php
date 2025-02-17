<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\associatedPublicIp;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\attachment;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\bondInterfaceSpecification;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\connectionTrackingConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\enhancedNetwork;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\ipv4PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\ipv6PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\ipv6Sets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\networkInterfaceTrafficConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\privateIpSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\securityGroupIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\slaveInterfaceSpecification;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\tags;

class DescribeNetworkInterfaceAttributeResponseBody extends Model
{
    /**
     * @var associatedPublicIp
     */
    public $associatedPublicIp;
    /**
     * @var attachment
     */
    public $attachment;
    /**
     * @var bondInterfaceSpecification
     */
    public $bondInterfaceSpecification;
    /**
     * @var connectionTrackingConfiguration
     */
    public $connectionTrackingConfiguration;
    /**
     * @var string
     */
    public $creationTime;
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
    public $instanceId;
    /**
     * @var ipv4PrefixSets
     */
    public $ipv4PrefixSets;
    /**
     * @var ipv6PrefixSets
     */
    public $ipv6PrefixSets;
    /**
     * @var ipv6Sets
     */
    public $ipv6Sets;
    /**
     * @var string
     */
    public $macAddress;
    /**
     * @var string
     */
    public $networkInterfaceId;
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
    public $ownerId;
    /**
     * @var string
     */
    public $privateIpAddress;
    /**
     * @var privateIpSets
     */
    public $privateIpSets;
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
    public $requestId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var securityGroupIds
     */
    public $securityGroupIds;
    /**
     * @var int
     */
    public $serviceID;
    /**
     * @var bool
     */
    public $serviceManaged;
    /**
     * @var slaveInterfaceSpecification
     */
    public $slaveInterfaceSpecification;
    /**
     * @var bool
     */
    public $sourceDestCheck;
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
    public $tcpOptionAddressEnabled;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'associatedPublicIp'              => 'AssociatedPublicIp',
        'attachment'                      => 'Attachment',
        'bondInterfaceSpecification'      => 'BondInterfaceSpecification',
        'connectionTrackingConfiguration' => 'ConnectionTrackingConfiguration',
        'creationTime'                    => 'CreationTime',
        'deleteOnRelease'                 => 'DeleteOnRelease',
        'description'                     => 'Description',
        'enhancedNetwork'                 => 'EnhancedNetwork',
        'instanceId'                      => 'InstanceId',
        'ipv4PrefixSets'                  => 'Ipv4PrefixSets',
        'ipv6PrefixSets'                  => 'Ipv6PrefixSets',
        'ipv6Sets'                        => 'Ipv6Sets',
        'macAddress'                      => 'MacAddress',
        'networkInterfaceId'              => 'NetworkInterfaceId',
        'networkInterfaceName'            => 'NetworkInterfaceName',
        'networkInterfaceTrafficConfig'   => 'NetworkInterfaceTrafficConfig',
        'networkInterfaceTrafficMode'     => 'NetworkInterfaceTrafficMode',
        'ownerId'                         => 'OwnerId',
        'privateIpAddress'                => 'PrivateIpAddress',
        'privateIpSets'                   => 'PrivateIpSets',
        'queueNumber'                     => 'QueueNumber',
        'queuePairNumber'                 => 'QueuePairNumber',
        'requestId'                       => 'RequestId',
        'resourceGroupId'                 => 'ResourceGroupId',
        'securityGroupIds'                => 'SecurityGroupIds',
        'serviceID'                       => 'ServiceID',
        'serviceManaged'                  => 'ServiceManaged',
        'slaveInterfaceSpecification'     => 'SlaveInterfaceSpecification',
        'sourceDestCheck'                 => 'SourceDestCheck',
        'status'                          => 'Status',
        'tags'                            => 'Tags',
        'tcpOptionAddressEnabled'         => 'TcpOptionAddressEnabled',
        'type'                            => 'Type',
        'vSwitchId'                       => 'VSwitchId',
        'vpcId'                           => 'VpcId',
        'zoneId'                          => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->associatedPublicIp) {
            $this->associatedPublicIp->validate();
        }
        if (null !== $this->attachment) {
            $this->attachment->validate();
        }
        if (null !== $this->bondInterfaceSpecification) {
            $this->bondInterfaceSpecification->validate();
        }
        if (null !== $this->connectionTrackingConfiguration) {
            $this->connectionTrackingConfiguration->validate();
        }
        if (null !== $this->enhancedNetwork) {
            $this->enhancedNetwork->validate();
        }
        if (null !== $this->ipv4PrefixSets) {
            $this->ipv4PrefixSets->validate();
        }
        if (null !== $this->ipv6PrefixSets) {
            $this->ipv6PrefixSets->validate();
        }
        if (null !== $this->ipv6Sets) {
            $this->ipv6Sets->validate();
        }
        if (null !== $this->networkInterfaceTrafficConfig) {
            $this->networkInterfaceTrafficConfig->validate();
        }
        if (null !== $this->privateIpSets) {
            $this->privateIpSets->validate();
        }
        if (null !== $this->securityGroupIds) {
            $this->securityGroupIds->validate();
        }
        if (null !== $this->slaveInterfaceSpecification) {
            $this->slaveInterfaceSpecification->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedPublicIp) {
            $res['AssociatedPublicIp'] = null !== $this->associatedPublicIp ? $this->associatedPublicIp->toArray($noStream) : $this->associatedPublicIp;
        }

        if (null !== $this->attachment) {
            $res['Attachment'] = null !== $this->attachment ? $this->attachment->toArray($noStream) : $this->attachment;
        }

        if (null !== $this->bondInterfaceSpecification) {
            $res['BondInterfaceSpecification'] = null !== $this->bondInterfaceSpecification ? $this->bondInterfaceSpecification->toArray($noStream) : $this->bondInterfaceSpecification;
        }

        if (null !== $this->connectionTrackingConfiguration) {
            $res['ConnectionTrackingConfiguration'] = null !== $this->connectionTrackingConfiguration ? $this->connectionTrackingConfiguration->toArray($noStream) : $this->connectionTrackingConfiguration;
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

        if (null !== $this->enhancedNetwork) {
            $res['EnhancedNetwork'] = null !== $this->enhancedNetwork ? $this->enhancedNetwork->toArray($noStream) : $this->enhancedNetwork;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ipv4PrefixSets) {
            $res['Ipv4PrefixSets'] = null !== $this->ipv4PrefixSets ? $this->ipv4PrefixSets->toArray($noStream) : $this->ipv4PrefixSets;
        }

        if (null !== $this->ipv6PrefixSets) {
            $res['Ipv6PrefixSets'] = null !== $this->ipv6PrefixSets ? $this->ipv6PrefixSets->toArray($noStream) : $this->ipv6PrefixSets;
        }

        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = null !== $this->ipv6Sets ? $this->ipv6Sets->toArray($noStream) : $this->ipv6Sets;
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

        if (null !== $this->networkInterfaceTrafficConfig) {
            $res['NetworkInterfaceTrafficConfig'] = null !== $this->networkInterfaceTrafficConfig ? $this->networkInterfaceTrafficConfig->toArray($noStream) : $this->networkInterfaceTrafficConfig;
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
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toArray($noStream) : $this->privateIpSets;
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
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toArray($noStream) : $this->securityGroupIds;
        }

        if (null !== $this->serviceID) {
            $res['ServiceID'] = $this->serviceID;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->slaveInterfaceSpecification) {
            $res['SlaveInterfaceSpecification'] = null !== $this->slaveInterfaceSpecification ? $this->slaveInterfaceSpecification->toArray($noStream) : $this->slaveInterfaceSpecification;
        }

        if (null !== $this->sourceDestCheck) {
            $res['SourceDestCheck'] = $this->sourceDestCheck;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->tcpOptionAddressEnabled) {
            $res['TcpOptionAddressEnabled'] = $this->tcpOptionAddressEnabled;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ConnectionTrackingConfiguration'])) {
            $model->connectionTrackingConfiguration = connectionTrackingConfiguration::fromMap($map['ConnectionTrackingConfiguration']);
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

        if (isset($map['EnhancedNetwork'])) {
            $model->enhancedNetwork = enhancedNetwork::fromMap($map['EnhancedNetwork']);
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

        if (isset($map['NetworkInterfaceTrafficConfig'])) {
            $model->networkInterfaceTrafficConfig = networkInterfaceTrafficConfig::fromMap($map['NetworkInterfaceTrafficConfig']);
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

        if (isset($map['SourceDestCheck'])) {
            $model->sourceDestCheck = $map['SourceDestCheck'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TcpOptionAddressEnabled'])) {
            $model->tcpOptionAddressEnabled = $map['TcpOptionAddressEnabled'];
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
