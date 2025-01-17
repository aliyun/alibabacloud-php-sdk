<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterRouteTableRequest\routeTableOptions;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterRouteTableRequest\tag;

class CreateTransitRouterRouteTableRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
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
     * @var string
     */
    public $transitRouterRouteTableDescription;
    /**
     * @var string
     */
    public $transitRouterRouteTableName;
    protected $_name = [
        'clientToken'                        => 'ClientToken',
        'dryRun'                             => 'DryRun',
        'ownerAccount'                       => 'OwnerAccount',
        'ownerId'                            => 'OwnerId',
        'resourceOwnerAccount'               => 'ResourceOwnerAccount',
        'resourceOwnerId'                    => 'ResourceOwnerId',
        'routeTableOptions'                  => 'RouteTableOptions',
        'tag'                                => 'Tag',
        'transitRouterId'                    => 'TransitRouterId',
        'transitRouterRouteTableDescription' => 'TransitRouterRouteTableDescription',
        'transitRouterRouteTableName'        => 'TransitRouterRouteTableName',
    ];

    public function validate()
    {
        if (null !== $this->routeTableOptions) {
            $this->routeTableOptions->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        if (null !== $this->transitRouterRouteTableDescription) {
            $res['TransitRouterRouteTableDescription'] = $this->transitRouterRouteTableDescription;
        }

        if (null !== $this->transitRouterRouteTableName) {
            $res['TransitRouterRouteTableName'] = $this->transitRouterRouteTableName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        if (isset($map['TransitRouterRouteTableDescription'])) {
            $model->transitRouterRouteTableDescription = $map['TransitRouterRouteTableDescription'];
        }

        if (isset($map['TransitRouterRouteTableName'])) {
            $model->transitRouterRouteTableName = $map['TransitRouterRouteTableName'];
        }

        return $model;
    }
}
