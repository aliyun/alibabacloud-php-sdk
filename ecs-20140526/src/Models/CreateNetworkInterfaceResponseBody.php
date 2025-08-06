<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\ipv4PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\ipv6PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\ipv6Sets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\privateIpSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\securityGroupIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\tags;

class CreateNetworkInterfaceResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

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
        'description' => 'Description',
        'ipv4PrefixSets' => 'Ipv4PrefixSets',
        'ipv6PrefixSets' => 'Ipv6PrefixSets',
        'ipv6Sets' => 'Ipv6Sets',
        'macAddress' => 'MacAddress',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'ownerId' => 'OwnerId',
        'privateIpAddress' => 'PrivateIpAddress',
        'privateIpSets' => 'PrivateIpSets',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupIds' => 'SecurityGroupIds',
        'serviceID' => 'ServiceID',
        'serviceManaged' => 'ServiceManaged',
        'sourceDestCheck' => 'SourceDestCheck',
        'status' => 'Status',
        'tags' => 'Tags',
        'type' => 'Type',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->ipv4PrefixSets) {
            $this->ipv4PrefixSets->validate();
        }
        if (null !== $this->ipv6PrefixSets) {
            $this->ipv6PrefixSets->validate();
        }
        if (null !== $this->ipv6Sets) {
            $this->ipv6Sets->validate();
        }
        if (null !== $this->privateIpSets) {
            $this->privateIpSets->validate();
        }
        if (null !== $this->securityGroupIds) {
            $this->securityGroupIds->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        if (null !== $this->privateIpSets) {
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toArray($noStream) : $this->privateIpSets;
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

        if (null !== $this->sourceDestCheck) {
            $res['SourceDestCheck'] = $this->sourceDestCheck;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        if (isset($map['PrivateIpSets'])) {
            $model->privateIpSets = privateIpSets::fromMap($map['PrivateIpSets']);
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

        if (isset($map['SourceDestCheck'])) {
            $model->sourceDestCheck = $map['SourceDestCheck'];
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
