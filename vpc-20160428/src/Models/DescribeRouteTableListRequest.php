<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeRouteTableListRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The value of tag N to add to the resource. You can specify up to 20 tag values. The tag value can be an empty string.
     *
     * The tag value can be up to 128 characters in length. It cannot start with `aliyun` or `acs:` and cannot contain `http://` or `https://`.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The type of the route table.
     *
     *   **System**
     *   **Custom**
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of entries per page.
     *
     * This parameter is required.
     * @example ap-southeast-6
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The details of the route table.
     *
     * @example rg-acfmxazb4ph****
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
     * @description The tags.
     *
     * @example vtb-bp145q7glnuzdvzu2****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description The key of tag N to add to the resource. You can specify up to 20 tag keys. The tag key cannot be an empty string.
     *
     * The tag key can be up to 128 characters in length. It cannot start with `aliyun` or `acs:`, and cannot contain `http://` or `https://`.
     * @example doctest
     *
     * @var string
     */
    public $routeTableName;

    /**
     * @description The time when the route table was created.
     *
     * @example System
     *
     * @var string
     */
    public $routeTableType;

    /**
     * @description The region ID of the VPC to which the route table belongs.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     * @example vrt-bp1lhl0taikrteen8****
     *
     * @var string
     */
    public $routerId;

    /**
     * @description The ID of the resource group to which the route table to be queried belongs.
     *
     * @example VRouter
     *
     * @var string
     */
    public $routerType;

    /**
     * @description The page number.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The tags of the resource.
     *
     * @example vpc-bp15zckdt37pq72****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeTableId'         => 'RouteTableId',
        'routeTableName'       => 'RouteTableName',
        'routeTableType'       => 'RouteTableType',
        'routerId'             => 'RouterId',
        'routerType'           => 'RouterType',
        'tag'                  => 'Tag',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->routeTableName) {
            $res['RouteTableName'] = $this->routeTableName;
        }
        if (null !== $this->routeTableType) {
            $res['RouteTableType'] = $this->routeTableType;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouteTableListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['RouteTableName'])) {
            $model->routeTableName = $map['RouteTableName'];
        }
        if (isset($map['RouteTableType'])) {
            $model->routeTableType = $map['RouteTableType'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
