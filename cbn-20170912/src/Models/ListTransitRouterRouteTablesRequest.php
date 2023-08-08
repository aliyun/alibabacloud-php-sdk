<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesRequest\routeTableOptions;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListTransitRouterRouteTablesRequest extends Model
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
     * @description The token that determines the start point of the query. Valid values:
     *
     *   If this is your first query or no subsequent query is to be sent, ignore this parameter.
     *   If a subsequent query is to be sent, set the value to the value of **NextToken** that is returned from the last call.
     *
     * @example dd20****
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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The features of the route table.
     *
     * @var routeTableOptions
     */
    public $routeTableOptions;

    /**
     * @description The information about the tags.
     *
     * You can specify at most 20 tags in each call.
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the Enterprise Edition transit router.
     *
     * @example tr-uf654ttymmljlvh2x****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The ID of the route table.
     *
     * You can query multiple route tables in each call. Maximum value of **N**: **20**.
     * @example vtb-bp1l8awdb4iuo9uwu****
     *
     * @var string[]
     */
    public $transitRouterRouteTableIds;

    /**
     * @description The name of the route table.
     *
     * You can query multiple route tables in each call. Maximum value of **N**: **20**.
     *
     * > If you set both **TransitRouterRouteTableNames.N** and **TransitRouterRouteTableIds.N**, make sure that the specified name and ID belong to the same route table.
     * @example testname
     *
     * @var string[]
     */
    public $transitRouterRouteTableNames;

    /**
     * @description The status of the route table. Valid values:
     *
     *   **Creating**: The route table is being created.
     *   **Deleting**: The route table is being deleted.
     *   **Active**: The route table is available.
     *
     * @example Active
     *
     * @var string
     */
    public $transitRouterRouteTableStatus;

    /**
     * @description The type of the route table. Valid values:
     *
     *   **Custom**: a custom route table
     *   **System**: the default route table
     *
     * @example Custom
     *
     * @var string
     */
    public $transitRouterRouteTableType;
    protected $_name = [
        'maxResults'                    => 'MaxResults',
        'nextToken'                     => 'NextToken',
        'ownerAccount'                  => 'OwnerAccount',
        'ownerId'                       => 'OwnerId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'routeTableOptions'             => 'RouteTableOptions',
        'tag'                           => 'Tag',
        'transitRouterId'               => 'TransitRouterId',
        'transitRouterRouteTableIds'    => 'TransitRouterRouteTableIds',
        'transitRouterRouteTableNames'  => 'TransitRouterRouteTableNames',
        'transitRouterRouteTableStatus' => 'TransitRouterRouteTableStatus',
        'transitRouterRouteTableType'   => 'TransitRouterRouteTableType',
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routeTableOptions) {
            $res['RouteTableOptions'] = null !== $this->routeTableOptions ? $this->routeTableOptions->toMap() : null;
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
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterRouteTableIds) {
            $res['TransitRouterRouteTableIds'] = $this->transitRouterRouteTableIds;
        }
        if (null !== $this->transitRouterRouteTableNames) {
            $res['TransitRouterRouteTableNames'] = $this->transitRouterRouteTableNames;
        }
        if (null !== $this->transitRouterRouteTableStatus) {
            $res['TransitRouterRouteTableStatus'] = $this->transitRouterRouteTableStatus;
        }
        if (null !== $this->transitRouterRouteTableType) {
            $res['TransitRouterRouteTableType'] = $this->transitRouterRouteTableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterRouteTablesRequest
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouteTableOptions'])) {
            $model->routeTableOptions = routeTableOptions::fromMap($map['RouteTableOptions']);
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
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterRouteTableIds'])) {
            if (!empty($map['TransitRouterRouteTableIds'])) {
                $model->transitRouterRouteTableIds = $map['TransitRouterRouteTableIds'];
            }
        }
        if (isset($map['TransitRouterRouteTableNames'])) {
            if (!empty($map['TransitRouterRouteTableNames'])) {
                $model->transitRouterRouteTableNames = $map['TransitRouterRouteTableNames'];
            }
        }
        if (isset($map['TransitRouterRouteTableStatus'])) {
            $model->transitRouterRouteTableStatus = $map['TransitRouterRouteTableStatus'];
        }
        if (isset($map['TransitRouterRouteTableType'])) {
            $model->transitRouterRouteTableType = $map['TransitRouterRouteTableType'];
        }

        return $model;
    }
}
