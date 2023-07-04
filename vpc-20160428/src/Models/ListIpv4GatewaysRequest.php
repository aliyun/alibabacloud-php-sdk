<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpv4GatewaysRequest\tags;
use AlibabaCloud\Tea\Model;

class ListIpv4GatewaysRequest extends Model
{
    /**
     * @description The ID of the IPv4 gateway.
     *
     * @example ipv4gw-5tsnc6s4ogsedtp3k****
     *
     * @var string
     */
    public $ipv4GatewayId;

    /**
     * @description The name of the IPv4 gateway.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example name
     *
     * @var string
     */
    public $ipv4GatewayName;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **100**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If this is your first query and no next queries are to be sent, ignore this parameter.
     *   If a next query is to be sent, set the value to the value of NextToken that is returned from the last call.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
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
     * @description The ID of the region where the IPv4 gateways to be queried are deployed.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example ap-southeast-6
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the IPv4 gateway belongs.
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
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the virtual private cloud (VPC) with which the IPv4 gateway is associated.
     *
     * @example vpc-5tsrxlw7dv074gci4****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ipv4GatewayId'        => 'Ipv4GatewayId',
        'ipv4GatewayName'      => 'Ipv4GatewayName',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tags'                 => 'Tags',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4GatewayId) {
            $res['Ipv4GatewayId'] = $this->ipv4GatewayId;
        }
        if (null !== $this->ipv4GatewayName) {
            $res['Ipv4GatewayName'] = $this->ipv4GatewayName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpv4GatewaysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4GatewayId'])) {
            $model->ipv4GatewayId = $map['Ipv4GatewayId'];
        }
        if (isset($map['Ipv4GatewayName'])) {
            $model->ipv4GatewayName = $map['Ipv4GatewayName'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
