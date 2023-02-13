<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\ipv4PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\ipv6PrefixSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\ipv6Sets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\privateIpSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\securityGroupIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\tags;
use AlibabaCloud\Tea\Model;

class CreateNetworkInterfaceResponseBody extends Model
{
    /**
     * @description The description of the ENI.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description > This parameter is in invitational preview and is unavailable for general users.
     *
     * @var ipv4PrefixSets
     */
    public $ipv4PrefixSets;

    /**
     * @description > This parameter is in invitational preview and is unavailable for general users.
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
     * @example eni-bp14v2sdd3v8htln****
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
     * @example 172.17.**.**
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description Details about the private IP addresses of the ENI.
     *
     * @var privateIpSets
     */
    public $privateIpSets;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the ENI belongs.
     *
     * @example rg-2ze88m67qx5z****
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
     * @description The state of the ENI.
     *
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
     * @description The type of the ENI.
     *
     * @example Secondary
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the vSwitch with which the ENI is associated.
     *
     * @example vsw-bp16usj2p27htro3****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC to which the ENI belongs.
     *
     * @example vpc-bp1j7w3gc1cexjqd****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the ENI.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'description'          => 'Description',
        'ipv4PrefixSets'       => 'Ipv4PrefixSets',
        'ipv6PrefixSets'       => 'Ipv6PrefixSets',
        'ipv6Sets'             => 'Ipv6Sets',
        'macAddress'           => 'MacAddress',
        'networkInterfaceId'   => 'NetworkInterfaceId',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'ownerId'              => 'OwnerId',
        'privateIpAddress'     => 'PrivateIpAddress',
        'privateIpSets'        => 'PrivateIpSets',
        'requestId'            => 'RequestId',
        'resourceGroupId'      => 'ResourceGroupId',
        'securityGroupIds'     => 'SecurityGroupIds',
        'serviceID'            => 'ServiceID',
        'serviceManaged'       => 'ServiceManaged',
        'status'               => 'Status',
        'tags'                 => 'Tags',
        'type'                 => 'Type',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->privateIpSets) {
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toMap() : null;
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
     * @return CreateNetworkInterfaceResponseBody
     */
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
