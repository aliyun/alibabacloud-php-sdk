<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntryRequest\nextHopList;

class CreateRouteEntryRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var nextHopList[]
     */
    public $nextHopList;

    /**
     * @var string
     */
    public $nextHopType;

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
    public $regionId;

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
    public $routeEntryName;

    /**
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'dryRun' => 'DryRun',
        'nextHopId' => 'NextHopId',
        'nextHopList' => 'NextHopList',
        'nextHopType' => 'NextHopType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'routeEntryName' => 'RouteEntryName',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
        if (\is_array($this->nextHopList)) {
            Model::validateArray($this->nextHopList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }

        if (null !== $this->nextHopList) {
            if (\is_array($this->nextHopList)) {
                $res['NextHopList'] = [];
                $n1 = 0;
                foreach ($this->nextHopList as $item1) {
                    $res['NextHopList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }

        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }

        if (isset($map['NextHopList'])) {
            if (!empty($map['NextHopList'])) {
                $model->nextHopList = [];
                $n1 = 0;
                foreach ($map['NextHopList'] as $item1) {
                    $model->nextHopList[$n1] = nextHopList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }

        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
