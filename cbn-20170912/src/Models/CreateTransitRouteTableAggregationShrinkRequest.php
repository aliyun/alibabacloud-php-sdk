<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class CreateTransitRouteTableAggregationShrinkRequest extends Model
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
    public $transitRouteTableAggregationCidr;
    /**
     * @var string
     */
    public $transitRouteTableAggregationDescription;
    /**
     * @var string
     */
    public $transitRouteTableAggregationName;
    /**
     * @var string
     */
    public $transitRouteTableAggregationScope;
    /**
     * @var string
     */
    public $transitRouteTableAggregationScopeListShrink;
    /**
     * @var string
     */
    public $transitRouteTableId;
    protected $_name = [
        'clientToken'                                 => 'ClientToken',
        'dryRun'                                      => 'DryRun',
        'ownerAccount'                                => 'OwnerAccount',
        'ownerId'                                     => 'OwnerId',
        'resourceOwnerAccount'                        => 'ResourceOwnerAccount',
        'resourceOwnerId'                             => 'ResourceOwnerId',
        'transitRouteTableAggregationCidr'            => 'TransitRouteTableAggregationCidr',
        'transitRouteTableAggregationDescription'     => 'TransitRouteTableAggregationDescription',
        'transitRouteTableAggregationName'            => 'TransitRouteTableAggregationName',
        'transitRouteTableAggregationScope'           => 'TransitRouteTableAggregationScope',
        'transitRouteTableAggregationScopeListShrink' => 'TransitRouteTableAggregationScopeList',
        'transitRouteTableId'                         => 'TransitRouteTableId',
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

        if (null !== $this->transitRouteTableAggregationCidr) {
            $res['TransitRouteTableAggregationCidr'] = $this->transitRouteTableAggregationCidr;
        }

        if (null !== $this->transitRouteTableAggregationDescription) {
            $res['TransitRouteTableAggregationDescription'] = $this->transitRouteTableAggregationDescription;
        }

        if (null !== $this->transitRouteTableAggregationName) {
            $res['TransitRouteTableAggregationName'] = $this->transitRouteTableAggregationName;
        }

        if (null !== $this->transitRouteTableAggregationScope) {
            $res['TransitRouteTableAggregationScope'] = $this->transitRouteTableAggregationScope;
        }

        if (null !== $this->transitRouteTableAggregationScopeListShrink) {
            $res['TransitRouteTableAggregationScopeList'] = $this->transitRouteTableAggregationScopeListShrink;
        }

        if (null !== $this->transitRouteTableId) {
            $res['TransitRouteTableId'] = $this->transitRouteTableId;
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

        if (isset($map['TransitRouteTableAggregationCidr'])) {
            $model->transitRouteTableAggregationCidr = $map['TransitRouteTableAggregationCidr'];
        }

        if (isset($map['TransitRouteTableAggregationDescription'])) {
            $model->transitRouteTableAggregationDescription = $map['TransitRouteTableAggregationDescription'];
        }

        if (isset($map['TransitRouteTableAggregationName'])) {
            $model->transitRouteTableAggregationName = $map['TransitRouteTableAggregationName'];
        }

        if (isset($map['TransitRouteTableAggregationScope'])) {
            $model->transitRouteTableAggregationScope = $map['TransitRouteTableAggregationScope'];
        }

        if (isset($map['TransitRouteTableAggregationScopeList'])) {
            $model->transitRouteTableAggregationScopeListShrink = $map['TransitRouteTableAggregationScopeList'];
        }

        if (isset($map['TransitRouteTableId'])) {
            $model->transitRouteTableId = $map['TransitRouteTableId'];
        }

        return $model;
    }
}
