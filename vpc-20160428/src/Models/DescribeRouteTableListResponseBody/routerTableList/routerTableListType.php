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
     * @var string
     */
    public $associateType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var gatewayIds
     */
    public $gatewayIds;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $routeTableName;

    /**
     * @var string
     */
    public $routeTableType;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $routerType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associateType'   => 'AssociateType',
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'gatewayIds'      => 'GatewayIds',
        'ownerId'         => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'routeTableId'    => 'RouteTableId',
        'routeTableName'  => 'RouteTableName',
        'routeTableType'  => 'RouteTableType',
        'routerId'        => 'RouterId',
        'routerType'      => 'RouterType',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'vSwitchIds'      => 'VSwitchIds',
        'vpcId'           => 'VpcId',
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
