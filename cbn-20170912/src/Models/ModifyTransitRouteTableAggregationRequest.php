<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class ModifyTransitRouteTableAggregationRequest extends Model
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
     * @var string[]
     */
    public $transitRouteTableAggregationScopeList;
    /**
     * @var string
     */
    public $transitRouteTableId;
    protected $_name = [
        'clientToken'                             => 'ClientToken',
        'dryRun'                                  => 'DryRun',
        'ownerAccount'                            => 'OwnerAccount',
        'ownerId'                                 => 'OwnerId',
        'resourceOwnerAccount'                    => 'ResourceOwnerAccount',
        'resourceOwnerId'                         => 'ResourceOwnerId',
        'transitRouteTableAggregationCidr'        => 'TransitRouteTableAggregationCidr',
        'transitRouteTableAggregationDescription' => 'TransitRouteTableAggregationDescription',
        'transitRouteTableAggregationName'        => 'TransitRouteTableAggregationName',
        'transitRouteTableAggregationScope'       => 'TransitRouteTableAggregationScope',
        'transitRouteTableAggregationScopeList'   => 'TransitRouteTableAggregationScopeList',
        'transitRouteTableId'                     => 'TransitRouteTableId',
    ];

    public function validate()
    {
        if (\is_array($this->transitRouteTableAggregationScopeList)) {
            Model::validateArray($this->transitRouteTableAggregationScopeList);
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

        if (null !== $this->transitRouteTableAggregationScopeList) {
            if (\is_array($this->transitRouteTableAggregationScopeList)) {
                $res['TransitRouteTableAggregationScopeList'] = [];
                $n1                                           = 0;
                foreach ($this->transitRouteTableAggregationScopeList as $item1) {
                    $res['TransitRouteTableAggregationScopeList'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['TransitRouteTableAggregationScopeList'])) {
                $model->transitRouteTableAggregationScopeList = [];
                $n1                                           = 0;
                foreach ($map['TransitRouteTableAggregationScopeList'] as $item1) {
                    $model->transitRouteTableAggregationScopeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TransitRouteTableId'])) {
            $model->transitRouteTableId = $map['TransitRouteTableId'];
        }

        return $model;
    }
}
