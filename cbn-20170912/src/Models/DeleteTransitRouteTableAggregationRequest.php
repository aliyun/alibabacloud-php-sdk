<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DeleteTransitRouteTableAggregationRequest extends Model
{
    /**
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
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
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $transitRouteTableAggregationCidr;

    /**
     * @example vtb-6ehgc262hr170qgyc****
     *
     * @var string
     */
    public $transitRouteTableId;
    protected $_name = [
        'clientToken'                      => 'ClientToken',
        'dryRun'                           => 'DryRun',
        'ownerAccount'                     => 'OwnerAccount',
        'ownerId'                          => 'OwnerId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'transitRouteTableAggregationCidr' => 'TransitRouteTableAggregationCidr',
        'transitRouteTableId'              => 'TransitRouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->transitRouteTableId) {
            $res['TransitRouteTableId'] = $this->transitRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTransitRouteTableAggregationRequest
     */
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
        if (isset($map['TransitRouteTableId'])) {
            $model->transitRouteTableId = $map['TransitRouteTableId'];
        }

        return $model;
    }
}
