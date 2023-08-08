<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesRequest\routeFilter;
use AlibabaCloud\Tea\Model;

class ListTransitRouterRouteEntriesRequest extends Model
{
    /**
     * @description The number of entries to return on each page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example fce19****
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
     * @example pl-6ehtn5kqxgeyy08fi****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var routeFilter[]
     */
    public $routeFilter;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example 192.168.0.0/24
     *
     * @deprecated
     *
     * @var string
     */
    public $transitRouterRouteEntryDestinationCidrBlock;

    /**
     * @description The route entry ID.
     *
     * >  You can use only this parameter to query static routes.
     * @example rte-oklkgwmj97z6dn****
     *
     * @var string[]
     */
    public $transitRouterRouteEntryIds;

    /**
     * @description The route name.
     *
     * >  You can use only this parameter to query static routes.
     * @example testname
     *
     * @var string[]
     */
    public $transitRouterRouteEntryNames;

    /**
     * @example tr-attach-nls9fzkfat8934****
     *
     * @var string
     */
    public $transitRouterRouteEntryNextHopId;

    /**
     * @example vpc-m5ent6du8deaq5*****
     *
     * @var string
     */
    public $transitRouterRouteEntryNextHopResourceId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $transitRouterRouteEntryNextHopResourceType;

    /**
     * @example Attachment
     *
     * @var string
     */
    public $transitRouterRouteEntryNextHopType;

    /**
     * @example vpc-m5ent6du8deaq5*****
     *
     * @var string
     */
    public $transitRouterRouteEntryOriginResourceId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $transitRouterRouteEntryOriginResourceType;

    /**
     * @description The status of the route. Valid values:
     *
     *   **Creating**: The route is being created.
     *   **Active**: The route is available.
     *   **Deleting**: The route is being deleted.
     *
     * @example Active
     *
     * @var string
     */
    public $transitRouterRouteEntryStatus;

    /**
     * @example Propagated
     *
     * @var string
     */
    public $transitRouterRouteEntryType;

    /**
     * @description The ID of the route table of the Enterprise Edition transit router.
     *
     * @example vtb-bp1dudbh2d5na6b50****
     *
     * @var string
     */
    public $transitRouterRouteTableId;
    protected $_name = [
        'maxResults'                                  => 'MaxResults',
        'nextToken'                                   => 'NextToken',
        'ownerAccount'                                => 'OwnerAccount',
        'ownerId'                                     => 'OwnerId',
        'prefixListId'                                => 'PrefixListId',
        'resourceOwnerAccount'                        => 'ResourceOwnerAccount',
        'resourceOwnerId'                             => 'ResourceOwnerId',
        'routeFilter'                                 => 'RouteFilter',
        'transitRouterRouteEntryDestinationCidrBlock' => 'TransitRouterRouteEntryDestinationCidrBlock',
        'transitRouterRouteEntryIds'                  => 'TransitRouterRouteEntryIds',
        'transitRouterRouteEntryNames'                => 'TransitRouterRouteEntryNames',
        'transitRouterRouteEntryNextHopId'            => 'TransitRouterRouteEntryNextHopId',
        'transitRouterRouteEntryNextHopResourceId'    => 'TransitRouterRouteEntryNextHopResourceId',
        'transitRouterRouteEntryNextHopResourceType'  => 'TransitRouterRouteEntryNextHopResourceType',
        'transitRouterRouteEntryNextHopType'          => 'TransitRouterRouteEntryNextHopType',
        'transitRouterRouteEntryOriginResourceId'     => 'TransitRouterRouteEntryOriginResourceId',
        'transitRouterRouteEntryOriginResourceType'   => 'TransitRouterRouteEntryOriginResourceType',
        'transitRouterRouteEntryStatus'               => 'TransitRouterRouteEntryStatus',
        'transitRouterRouteEntryType'                 => 'TransitRouterRouteEntryType',
        'transitRouterRouteTableId'                   => 'TransitRouterRouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routeFilter) {
            $res['RouteFilter'] = [];
            if (null !== $this->routeFilter && \is_array($this->routeFilter)) {
                $n = 0;
                foreach ($this->routeFilter as $item) {
                    $res['RouteFilter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transitRouterRouteEntryDestinationCidrBlock) {
            $res['TransitRouterRouteEntryDestinationCidrBlock'] = $this->transitRouterRouteEntryDestinationCidrBlock;
        }
        if (null !== $this->transitRouterRouteEntryIds) {
            $res['TransitRouterRouteEntryIds'] = $this->transitRouterRouteEntryIds;
        }
        if (null !== $this->transitRouterRouteEntryNames) {
            $res['TransitRouterRouteEntryNames'] = $this->transitRouterRouteEntryNames;
        }
        if (null !== $this->transitRouterRouteEntryNextHopId) {
            $res['TransitRouterRouteEntryNextHopId'] = $this->transitRouterRouteEntryNextHopId;
        }
        if (null !== $this->transitRouterRouteEntryNextHopResourceId) {
            $res['TransitRouterRouteEntryNextHopResourceId'] = $this->transitRouterRouteEntryNextHopResourceId;
        }
        if (null !== $this->transitRouterRouteEntryNextHopResourceType) {
            $res['TransitRouterRouteEntryNextHopResourceType'] = $this->transitRouterRouteEntryNextHopResourceType;
        }
        if (null !== $this->transitRouterRouteEntryNextHopType) {
            $res['TransitRouterRouteEntryNextHopType'] = $this->transitRouterRouteEntryNextHopType;
        }
        if (null !== $this->transitRouterRouteEntryOriginResourceId) {
            $res['TransitRouterRouteEntryOriginResourceId'] = $this->transitRouterRouteEntryOriginResourceId;
        }
        if (null !== $this->transitRouterRouteEntryOriginResourceType) {
            $res['TransitRouterRouteEntryOriginResourceType'] = $this->transitRouterRouteEntryOriginResourceType;
        }
        if (null !== $this->transitRouterRouteEntryStatus) {
            $res['TransitRouterRouteEntryStatus'] = $this->transitRouterRouteEntryStatus;
        }
        if (null !== $this->transitRouterRouteEntryType) {
            $res['TransitRouterRouteEntryType'] = $this->transitRouterRouteEntryType;
        }
        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterRouteEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouteFilter'])) {
            if (!empty($map['RouteFilter'])) {
                $model->routeFilter = [];
                $n                  = 0;
                foreach ($map['RouteFilter'] as $item) {
                    $model->routeFilter[$n++] = null !== $item ? routeFilter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterRouteEntryDestinationCidrBlock'])) {
            $model->transitRouterRouteEntryDestinationCidrBlock = $map['TransitRouterRouteEntryDestinationCidrBlock'];
        }
        if (isset($map['TransitRouterRouteEntryIds'])) {
            if (!empty($map['TransitRouterRouteEntryIds'])) {
                $model->transitRouterRouteEntryIds = $map['TransitRouterRouteEntryIds'];
            }
        }
        if (isset($map['TransitRouterRouteEntryNames'])) {
            if (!empty($map['TransitRouterRouteEntryNames'])) {
                $model->transitRouterRouteEntryNames = $map['TransitRouterRouteEntryNames'];
            }
        }
        if (isset($map['TransitRouterRouteEntryNextHopId'])) {
            $model->transitRouterRouteEntryNextHopId = $map['TransitRouterRouteEntryNextHopId'];
        }
        if (isset($map['TransitRouterRouteEntryNextHopResourceId'])) {
            $model->transitRouterRouteEntryNextHopResourceId = $map['TransitRouterRouteEntryNextHopResourceId'];
        }
        if (isset($map['TransitRouterRouteEntryNextHopResourceType'])) {
            $model->transitRouterRouteEntryNextHopResourceType = $map['TransitRouterRouteEntryNextHopResourceType'];
        }
        if (isset($map['TransitRouterRouteEntryNextHopType'])) {
            $model->transitRouterRouteEntryNextHopType = $map['TransitRouterRouteEntryNextHopType'];
        }
        if (isset($map['TransitRouterRouteEntryOriginResourceId'])) {
            $model->transitRouterRouteEntryOriginResourceId = $map['TransitRouterRouteEntryOriginResourceId'];
        }
        if (isset($map['TransitRouterRouteEntryOriginResourceType'])) {
            $model->transitRouterRouteEntryOriginResourceType = $map['TransitRouterRouteEntryOriginResourceType'];
        }
        if (isset($map['TransitRouterRouteEntryStatus'])) {
            $model->transitRouterRouteEntryStatus = $map['TransitRouterRouteEntryStatus'];
        }
        if (isset($map['TransitRouterRouteEntryType'])) {
            $model->transitRouterRouteEntryType = $map['TransitRouterRouteEntryType'];
        }
        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }

        return $model;
    }
}
