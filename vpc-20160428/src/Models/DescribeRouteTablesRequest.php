<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeRouteTablesRequest extends Model
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
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the VPC to which the route table belongs.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the route table to be queried belongs.
     *
     * @example rg-acfmxazccb4ph****
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
     * @description The ID of the route table that you want to query.
     *
     * @example rtb-bp12mw1f8k3jgygk9****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description The name of the route table that you want to query.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-).
     * @example RouteTable-1
     *
     * @var string
     */
    public $routeTableName;

    /**
     * @description The ID of the router to which the route table belongs.
     *
     * @example vtb-bp1krxxzp0c29fmon****
     *
     * @var string
     */
    public $routerId;

    /**
     * @description The type of the router to which the route table belongs. Valid values:
     *
     *   **VRouter** (default)
     *   **VBR**
     *
     * @example VRouter
     *
     * @var string
     */
    public $routerType;

    /**
     * @description The route type. Valid values:
     *
     *   **Custom**
     *   **System**
     *   **BGP**
     *   **CEN**
     *
     * @example custom
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the vRouter.
     *
     * @example vtb-bp1krxxzp0c29fmon****
     *
     * @var string
     */
    public $VRouterId;
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
        'routerId'             => 'RouterId',
        'routerType'           => 'RouterType',
        'type'                 => 'Type',
        'VRouterId'            => 'VRouterId',
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
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouteTablesRequest
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
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }

        return $model;
    }
}
