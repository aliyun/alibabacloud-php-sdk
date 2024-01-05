<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponseBody\routerTableList;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponseBody\routerTableList\routerTableListType\gatewayIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponseBody\routerTableList\routerTableListType\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponseBody\routerTableList\routerTableListType\vSwitchIds;
use AlibabaCloud\Tea\Model;

class routerTableListType extends Model
{
    /**
     * @description The type of the cloud resource with which the route table is associated. Valid values:
     *
     *   **VSwitch**: a vSwitch
     *   **Gateway**: an IPv4 gateway
     *
     * @example VSwitch
     *
     * @var string
     */
    public $associateType;

    /**
     * @description The time when the route table was created.
     *
     * @example 2021-08-22T10:40:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the route table.
     *
     * @example This is Route Table.
     *
     * @var string
     */
    public $description;

    /**
     * @description The detailed information about the IPv4 gateway.
     *
     * @var gatewayIds
     */
    public $gatewayIds;

    /**
     * @description The ID of the Alibaba Cloud account to which the route table belongs.
     *
     * @example 253460731706911258
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group to which the route table belongs.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $routePropagationEnable;

    /**
     * @description The ID of the route table.
     *
     * @example vtb-bp145q7glnuzdvzu2****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description The name of the route table.
     *
     * @example doctest
     *
     * @var string
     */
    public $routeTableName;

    /**
     * @description The type of the route table. Valid values:
     *
     *   **Custom**
     *   **System**
     *
     * @example System
     *
     * @var string
     */
    public $routeTableType;

    /**
     * @description The ID of the router to which the route table belongs.
     *
     * @example vrt-bp1lhl0taikrteen8****
     *
     * @var string
     */
    public $routerId;

    /**
     * @description The type of the router to which the route table belongs. Valid values:
     *
     *   **VRouter**
     *   **VBR**
     *
     * @example VRouter
     *
     * @var string
     */
    public $routerType;

    /**
     * @description The status of the route table. Valid values:
     *
     *   **Pending**
     *   **Available**
     *   **Deleting**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag added to the route table.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The information about the vSwitches.
     *
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @description The ID of the VPC to which the route table belongs.
     *
     * @example vpc-bp15zckdt37pq72****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associateType'          => 'AssociateType',
        'creationTime'           => 'CreationTime',
        'description'            => 'Description',
        'gatewayIds'             => 'GatewayIds',
        'ownerId'                => 'OwnerId',
        'resourceGroupId'        => 'ResourceGroupId',
        'routePropagationEnable' => 'RoutePropagationEnable',
        'routeTableId'           => 'RouteTableId',
        'routeTableName'         => 'RouteTableName',
        'routeTableType'         => 'RouteTableType',
        'routerId'               => 'RouterId',
        'routerType'             => 'RouterType',
        'status'                 => 'Status',
        'tags'                   => 'Tags',
        'vSwitchIds'             => 'VSwitchIds',
        'vpcId'                  => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associateType) {
            $res['AssociateType'] = $this->associateType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gatewayIds) {
            $res['GatewayIds'] = null !== $this->gatewayIds ? $this->gatewayIds->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routePropagationEnable) {
            $res['RoutePropagationEnable'] = $this->routePropagationEnable;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routerTableListType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociateType'])) {
            $model->associateType = $map['AssociateType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GatewayIds'])) {
            $model->gatewayIds = gatewayIds::fromMap($map['GatewayIds']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RoutePropagationEnable'])) {
            $model->routePropagationEnable = $map['RoutePropagationEnable'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
