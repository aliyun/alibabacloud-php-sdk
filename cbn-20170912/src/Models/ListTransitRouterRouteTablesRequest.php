<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesRequest\routeTableOptions;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesRequest\tag;

class ListTransitRouterRouteTablesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var routeTableOptions
     */
    public $routeTableOptions;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $transitRouterId;

    /**
     * @var string[]
     */
    public $transitRouterRouteTableIds;

    /**
     * @var string[]
     */
    public $transitRouterRouteTableNames;

    /**
     * @var string
     */
    public $transitRouterRouteTableStatus;

    /**
     * @var string
     */
    public $transitRouterRouteTableType;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'routeTableOptions' => 'RouteTableOptions',
        'tag' => 'Tag',
        'transitRouterId' => 'TransitRouterId',
        'transitRouterRouteTableIds' => 'TransitRouterRouteTableIds',
        'transitRouterRouteTableNames' => 'TransitRouterRouteTableNames',
        'transitRouterRouteTableStatus' => 'TransitRouterRouteTableStatus',
        'transitRouterRouteTableType' => 'TransitRouterRouteTableType',
    ];

    public function validate()
    {
        if (null !== $this->routeTableOptions) {
            $this->routeTableOptions->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->transitRouterRouteTableIds)) {
            Model::validateArray($this->transitRouterRouteTableIds);
        }
        if (\is_array($this->transitRouterRouteTableNames)) {
            Model::validateArray($this->transitRouterRouteTableNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RouteTableOptions'] = null !== $this->routeTableOptions ? $this->routeTableOptions->toArray($noStream) : $this->routeTableOptions;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        if (null !== $this->transitRouterRouteTableIds) {
            if (\is_array($this->transitRouterRouteTableIds)) {
                $res['TransitRouterRouteTableIds'] = [];
                $n1 = 0;
                foreach ($this->transitRouterRouteTableIds as $item1) {
                    $res['TransitRouterRouteTableIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->transitRouterRouteTableNames) {
            if (\is_array($this->transitRouterRouteTableNames)) {
                $res['TransitRouterRouteTableNames'] = [];
                $n1 = 0;
                foreach ($this->transitRouterRouteTableNames as $item1) {
                    $res['TransitRouterRouteTableNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->transitRouterRouteTableStatus) {
            $res['TransitRouterRouteTableStatus'] = $this->transitRouterRouteTableStatus;
        }

        if (null !== $this->transitRouterRouteTableType) {
            $res['TransitRouterRouteTableType'] = $this->transitRouterRouteTableType;
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        if (isset($map['TransitRouterRouteTableIds'])) {
            if (!empty($map['TransitRouterRouteTableIds'])) {
                $model->transitRouterRouteTableIds = [];
                $n1 = 0;
                foreach ($map['TransitRouterRouteTableIds'] as $item1) {
                    $model->transitRouterRouteTableIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TransitRouterRouteTableNames'])) {
            if (!empty($map['TransitRouterRouteTableNames'])) {
                $model->transitRouterRouteTableNames = [];
                $n1 = 0;
                foreach ($map['TransitRouterRouteTableNames'] as $item1) {
                    $model->transitRouterRouteTableNames[$n1++] = $item1;
                }
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
