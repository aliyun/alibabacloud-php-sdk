<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesRequest\tag;

class DescribeNetworkInterfacesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string[]
     */
    public $ipv6Address;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string[]
     */
    public $networkInterfaceId;
    /**
     * @var string
     */
    public $networkInterfaceName;
    /**
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
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $primaryIpAddress;
    /**
     * @var string[]
     */
    public $privateIpAddress;
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
     * @var string
     */
    public $securityGroupId;
    /**
     * @var bool
     */
    public $serviceManaged;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tag[]
     */
    public $tag;
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
        if (\is_array($this->ipv6Address)) {
            Model::validateArray($this->ipv6Address);
        }
        if (\is_array($this->networkInterfaceId)) {
            Model::validateArray($this->networkInterfaceId);
        }
        if (\is_array($this->privateIpAddress)) {
            Model::validateArray($this->privateIpAddress);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->networkInterfaceId) {
            if (\is_array($this->networkInterfaceId)) {
                $res['NetworkInterfaceId'] = [];
                $n1                        = 0;
                foreach ($this->networkInterfaceId as $item1) {
                    $res['NetworkInterfaceId'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->privateIpAddress)) {
                $res['PrivateIpAddress'] = [];
                $n1                      = 0;
                foreach ($this->privateIpAddress as $item1) {
                    $res['PrivateIpAddress'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NetworkInterfaceId'])) {
            if (!empty($map['NetworkInterfaceId'])) {
                $model->networkInterfaceId = [];
                $n1                        = 0;
                foreach ($map['NetworkInterfaceId'] as $item1) {
                    $model->networkInterfaceId[$n1++] = $item1;
                }
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
                $model->privateIpAddress = [];
                $n1                      = 0;
                foreach ($map['PrivateIpAddress'] as $item1) {
                    $model->privateIpAddress[$n1++] = $item1;
                }
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
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
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
