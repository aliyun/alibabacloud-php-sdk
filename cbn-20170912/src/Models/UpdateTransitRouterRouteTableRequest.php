<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterRouteTableRequest\routeTableOptions;

class UpdateTransitRouterRouteTableRequest extends Model
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
     * @var string
     */
    public $transitRouterRouteTableDescription;

    /**
     * @var string
     */
    public $transitRouterRouteTableId;

    /**
     * @var string
     */
    public $transitRouterRouteTableName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'routeTableOptions' => 'RouteTableOptions',
        'transitRouterRouteTableDescription' => 'TransitRouterRouteTableDescription',
        'transitRouterRouteTableId' => 'TransitRouterRouteTableId',
        'transitRouterRouteTableName' => 'TransitRouterRouteTableName',
    ];

    public function validate()
    {
        if (null !== $this->routeTableOptions) {
            $this->routeTableOptions->validate();
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

        if (null !== $this->transitRouterRouteTableDescription) {
            $res['TransitRouterRouteTableDescription'] = $this->transitRouterRouteTableDescription;
        }

        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
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

        if (isset($map['TransitRouterRouteTableDescription'])) {
            $model->transitRouterRouteTableDescription = $map['TransitRouterRouteTableDescription'];
        }

        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }

        if (isset($map['TransitRouterRouteTableName'])) {
            $model->transitRouterRouteTableName = $map['TransitRouterRouteTableName'];
        }

        return $model;
    }
}
