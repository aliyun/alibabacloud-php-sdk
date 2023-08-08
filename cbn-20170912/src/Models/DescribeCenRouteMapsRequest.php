<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DescribeCenRouteMapsRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example cen-wx12mmlt17ld82****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The match method that is used to match routes based on the AS path.
     *
     *   **Include**: fuzzy match. A route is a match if the AS path of the route overlaps with the AS path specified in the match condition.
     *   **Complete**: exact match. A route is a match only if the AS path of the route is the same as the AS path specified in the match condition.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $cenRegionId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The route table ID of the transit router with which the routing policy is associated.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The IDs of the destination network instances to which the routes belong.
     *
     * >  The destination network instance IDs are valid only when the routing policy is applied to scenarios where routes are advertised from the gateway in the current region to network instances in the current region.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Indicates whether the destination network instance IDs are excluded.
     *
     *   **false** (default): A route is a match if its destination network instance ID is in the list specified by **DestinationInstanceIds.N**.
     *   **true**: A route is a match if its destination network instance ID is not in the list specified by **DestinationInstanceIds.N**.
     *
     * @example cenrmap-y40mxdvf7joc12****
     *
     * @var string
     */
    public $routeMapId;

    /**
     * @description The priority of the routing policy that you want to associate with the current one.
     *
     * @example vtb-gw8nx3515m1mbd1z1****
     *
     * @var string
     */
    public $transitRouterRouteTableId;

    /**
     * @description The match method that is used to match routes based on the community.
     *
     *   **Include**: fuzzy match. A route is a match if the community of the route overlaps with the community specified in the match condition.
     *   **Complete**: exact match. A route is a match only if the community of the route is the same as the community specified in the match condition.
     *
     * @example RegionOut
     *
     * @var string
     */
    public $transmitDirection;
    protected $_name = [
        'cenId'                     => 'CenId',
        'cenRegionId'               => 'CenRegionId',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'routeMapId'                => 'RouteMapId',
        'transitRouterRouteTableId' => 'TransitRouterRouteTableId',
        'transmitDirection'         => 'TransmitDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenRegionId) {
            $res['CenRegionId'] = $this->cenRegionId;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }
        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }
        if (null !== $this->transmitDirection) {
            $res['TransmitDirection'] = $this->transmitDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenRouteMapsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenRegionId'])) {
            $model->cenRegionId = $map['CenRegionId'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }
        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }
        if (isset($map['TransmitDirection'])) {
            $model->transmitDirection = $map['TransmitDirection'];
        }

        return $model;
    }
}
