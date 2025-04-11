<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class CreateTransitRouterRouteEntryRequest extends Model
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
     * @var string
     */
    public $transitRouterRouteEntryDescription;

    /**
     * @var string
     */
    public $transitRouterRouteEntryDestinationCidrBlock;

    /**
     * @var string
     */
    public $transitRouterRouteEntryName;

    /**
     * @var string
     */
    public $transitRouterRouteEntryNextHopId;

    /**
     * @var string
     */
    public $transitRouterRouteEntryNextHopType;

    /**
     * @var string
     */
    public $transitRouterRouteTableId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'transitRouterRouteEntryDescription' => 'TransitRouterRouteEntryDescription',
        'transitRouterRouteEntryDestinationCidrBlock' => 'TransitRouterRouteEntryDestinationCidrBlock',
        'transitRouterRouteEntryName' => 'TransitRouterRouteEntryName',
        'transitRouterRouteEntryNextHopId' => 'TransitRouterRouteEntryNextHopId',
        'transitRouterRouteEntryNextHopType' => 'TransitRouterRouteEntryNextHopType',
        'transitRouterRouteTableId' => 'TransitRouterRouteTableId',
    ];

    public function validate()
    {
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

        if (null !== $this->transitRouterRouteEntryDescription) {
            $res['TransitRouterRouteEntryDescription'] = $this->transitRouterRouteEntryDescription;
        }

        if (null !== $this->transitRouterRouteEntryDestinationCidrBlock) {
            $res['TransitRouterRouteEntryDestinationCidrBlock'] = $this->transitRouterRouteEntryDestinationCidrBlock;
        }

        if (null !== $this->transitRouterRouteEntryName) {
            $res['TransitRouterRouteEntryName'] = $this->transitRouterRouteEntryName;
        }

        if (null !== $this->transitRouterRouteEntryNextHopId) {
            $res['TransitRouterRouteEntryNextHopId'] = $this->transitRouterRouteEntryNextHopId;
        }

        if (null !== $this->transitRouterRouteEntryNextHopType) {
            $res['TransitRouterRouteEntryNextHopType'] = $this->transitRouterRouteEntryNextHopType;
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

        if (isset($map['TransitRouterRouteEntryDescription'])) {
            $model->transitRouterRouteEntryDescription = $map['TransitRouterRouteEntryDescription'];
        }

        if (isset($map['TransitRouterRouteEntryDestinationCidrBlock'])) {
            $model->transitRouterRouteEntryDestinationCidrBlock = $map['TransitRouterRouteEntryDestinationCidrBlock'];
        }

        if (isset($map['TransitRouterRouteEntryName'])) {
            $model->transitRouterRouteEntryName = $map['TransitRouterRouteEntryName'];
        }

        if (isset($map['TransitRouterRouteEntryNextHopId'])) {
            $model->transitRouterRouteEntryNextHopId = $map['TransitRouterRouteEntryNextHopId'];
        }

        if (isset($map['TransitRouterRouteEntryNextHopType'])) {
            $model->transitRouterRouteEntryNextHopType = $map['TransitRouterRouteEntryNextHopType'];
        }

        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }

        return $model;
    }
}
