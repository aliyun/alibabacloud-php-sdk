<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesRequest\routeFilter;

class ListTransitRouterRouteEntriesRequest extends Model
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
     * @var string
     */
    public $transitRouterRouteEntryDestinationCidrBlock;
    /**
     * @var string[]
     */
    public $transitRouterRouteEntryIds;
    /**
     * @var string[]
     */
    public $transitRouterRouteEntryNames;
    /**
     * @var string
     */
    public $transitRouterRouteEntryNextHopId;
    /**
     * @var string
     */
    public $transitRouterRouteEntryNextHopResourceId;
    /**
     * @var string
     */
    public $transitRouterRouteEntryNextHopResourceType;
    /**
     * @var string
     */
    public $transitRouterRouteEntryNextHopType;
    /**
     * @var string
     */
    public $transitRouterRouteEntryOriginResourceId;
    /**
     * @var string
     */
    public $transitRouterRouteEntryOriginResourceType;
    /**
     * @var string
     */
    public $transitRouterRouteEntryStatus;
    /**
     * @var string
     */
    public $transitRouterRouteEntryType;
    /**
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
        if (\is_array($this->routeFilter)) {
            Model::validateArray($this->routeFilter);
        }
        if (\is_array($this->transitRouterRouteEntryIds)) {
            Model::validateArray($this->transitRouterRouteEntryIds);
        }
        if (\is_array($this->transitRouterRouteEntryNames)) {
            Model::validateArray($this->transitRouterRouteEntryNames);
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
            if (\is_array($this->routeFilter)) {
                $res['RouteFilter'] = [];
                $n1                 = 0;
                foreach ($this->routeFilter as $item1) {
                    $res['RouteFilter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transitRouterRouteEntryDestinationCidrBlock) {
            $res['TransitRouterRouteEntryDestinationCidrBlock'] = $this->transitRouterRouteEntryDestinationCidrBlock;
        }

        if (null !== $this->transitRouterRouteEntryIds) {
            if (\is_array($this->transitRouterRouteEntryIds)) {
                $res['TransitRouterRouteEntryIds'] = [];
                $n1                                = 0;
                foreach ($this->transitRouterRouteEntryIds as $item1) {
                    $res['TransitRouterRouteEntryIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->transitRouterRouteEntryNames) {
            if (\is_array($this->transitRouterRouteEntryNames)) {
                $res['TransitRouterRouteEntryNames'] = [];
                $n1                                  = 0;
                foreach ($this->transitRouterRouteEntryNames as $item1) {
                    $res['TransitRouterRouteEntryNames'][$n1++] = $item1;
                }
            }
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
                $n1                 = 0;
                foreach ($map['RouteFilter'] as $item1) {
                    $model->routeFilter[$n1++] = routeFilter::fromMap($item1);
                }
            }
        }

        if (isset($map['TransitRouterRouteEntryDestinationCidrBlock'])) {
            $model->transitRouterRouteEntryDestinationCidrBlock = $map['TransitRouterRouteEntryDestinationCidrBlock'];
        }

        if (isset($map['TransitRouterRouteEntryIds'])) {
            if (!empty($map['TransitRouterRouteEntryIds'])) {
                $model->transitRouterRouteEntryIds = [];
                $n1                                = 0;
                foreach ($map['TransitRouterRouteEntryIds'] as $item1) {
                    $model->transitRouterRouteEntryIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TransitRouterRouteEntryNames'])) {
            if (!empty($map['TransitRouterRouteEntryNames'])) {
                $model->transitRouterRouteEntryNames = [];
                $n1                                  = 0;
                foreach ($map['TransitRouterRouteEntryNames'] as $item1) {
                    $model->transitRouterRouteEntryNames[$n1++] = $item1;
                }
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
