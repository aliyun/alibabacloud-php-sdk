<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeNetworkInterfacesRequest extends Model
{
    /**
     * @description The ID of the instance to which the ENI is attached.
     *
     * @example i-bp1e2l6djkndyuli****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description An array that consists of the IPv6 address of the ENI. You can specify multiple IPv6 addresses. Valid values of N: 1 to 100.
     *
     * @example 2408:4321:180:1701:94c7:bc38:3bfa:****
     *
     * @var string[]
     */
    public $ipv6Address;

    /**
     * @description The maximum number of entries to return on each page. Valid values: 10 to 500.
     *
     * Default values:
     *
     *   If this parameter is not specified or if this parameter is set to a value less than 10, the default value is 10.
     *   If this parameter is set to a value greater than 500, the default value is 500.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description An array that consists of the IDs of the ENIs. You specify multiple ENI IDs. Valid values of N: 1 to 100.
     *
     * @example eni-bp125p95hhdhn3ot****
     *
     * @var string[]
     */
    public $networkInterfaceId;

    /**
     * @description The name of the ENI.
     *
     * @example test-eni-name
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description The query token. Set the value to the `NextToken` value returned in the last call to this operation.
     *
     * For more information about how to check the responses returned by this operation, see the preceding "Description" section.
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number.
     *
     * >  This parameter will be removed in the future. We recommend that you use NextToken and MaxResults for a paged query.
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * >  This parameter will be removed in the future. We recommend that you use NextToken and MaxResults for a paged query.
     * @example 100
     *
     * @deprecated
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The primary private IPv4 address of the ENI.
     *
     * @example 192.168.\*\*.**
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description An array that consists of the secondary private IPv4 addresses of the ENI. You can specify multiple secondary private IPv4 addresses. Valid values of N: 1 to 100.
     *
     * @example 192.168.\*\*.**
     *
     * @var string[]
     */
    public $privateIpAddress;

    /**
     * @description The region ID of the ENI. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the ENI belongs. If this parameter is specified to query resources, up to 1,000 resources that belong to the specified resource group can be returned.
     *
     * > Resources in the default resource group are displayed in the response regardless of how this parameter is set.
     * @example rg-bp67acfmxazb4p****
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
     * @description The ID of the security group to which the secondary ENI belongs.
     *
     *   To query the details of secondary ENIs based on the ID of a security group, specify this parameter.
     *   To query the details of primary ENIs based on the ID of a security group, call the [DescribeInstances](https://help.aliyun.com/document_detail/25506.html) operation and specify the `SecurityGroupId` parameter.
     *
     * @example sg-bp144yr32sx6ndw****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description Specifies whether the user of the ENI is an Alibaba Cloud service or a distributor.
     *
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The state of the ENI. Valid values:
     *
     *   Available: The ENI is available.
     *   Attaching: The ENI is being attached to an instance.
     *   InUse: The ENI is attached to an instance.
     *   Detaching: The ENI is being detached from an instance.
     *   Deleting: The ENI is being deleted.
     *
     * This parameter is empty by default, which indicates that ENIs in all states are queried.
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags to use for query.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of the ENI. Valid values:
     *
     *   Primary
     *   Secondary
     *
     * This parameter is empty by default, which indicates that both primary and secondary ENIs are queried.
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
     * @description The ID of the virtual private cloud (VPC) to which the elastic network interface (ENI) belongs.
     *
     * @example vsw-bp16usj2p27htro3****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'ipv6Address'          => 'Ipv6Address',
        'maxResults'           => 'MaxResults',
        'networkInterfaceId'   => 'NetworkInterfaceId',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'primaryIpAddress'     => 'PrimaryIpAddress',
        'privateIpAddress'     => 'PrivateIpAddress',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityGroupId'      => 'SecurityGroupId',
        'serviceManaged'       => 'ServiceManaged',
        'status'               => 'Status',
        'tag'                  => 'Tag',
        'type'                 => 'Type',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkInterfacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = $map['Ipv6Address'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            if (!empty($map['NetworkInterfaceId'])) {
                $model->networkInterfaceId = $map['NetworkInterfaceId'];
            }
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }
        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = $map['PrivateIpAddress'];
            }
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
