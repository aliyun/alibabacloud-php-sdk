<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\UnicomOrderConfirmRequest\orderItem;
use AlibabaCloud\Tea\Model;

class UnicomOrderConfirmRequest extends Model
{
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
    public $ownerUserId;

    /**
     * @var string
     */
    public $tradeId;

    /**
     * @var string
     */
    public $tmsCode;

    /**
     * @var string
     */
    public $tmsOrderCode;

    /**
     * @var int
     */
    public $orderPostFee;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var orderItem[]
     */
    public $orderItem;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerUserId'          => 'OwnerUserId',
        'tradeId'              => 'TradeId',
        'tmsCode'              => 'TmsCode',
        'tmsOrderCode'         => 'TmsOrderCode',
        'orderPostFee'         => 'OrderPostFee',
        'regionId'             => 'RegionId',
        'orderItem'            => 'OrderItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->tradeId) {
            $res['TradeId'] = $this->tradeId;
        }
        if (null !== $this->tmsCode) {
            $res['TmsCode'] = $this->tmsCode;
        }
        if (null !== $this->tmsOrderCode) {
            $res['TmsOrderCode'] = $this->tmsOrderCode;
        }
        if (null !== $this->orderPostFee) {
            $res['OrderPostFee'] = $this->orderPostFee;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->orderItem) {
            $res['OrderItem'] = [];
            if (null !== $this->orderItem && \is_array($this->orderItem)) {
                $n = 0;
                foreach ($this->orderItem as $item) {
                    $res['OrderItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnicomOrderConfirmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['TradeId'])) {
            $model->tradeId = $map['TradeId'];
        }
        if (isset($map['TmsCode'])) {
            $model->tmsCode = $map['TmsCode'];
        }
        if (isset($map['TmsOrderCode'])) {
            $model->tmsOrderCode = $map['TmsOrderCode'];
        }
        if (isset($map['OrderPostFee'])) {
            $model->orderPostFee = $map['OrderPostFee'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OrderItem'])) {
            if (!empty($map['OrderItem'])) {
                $model->orderItem = [];
                $n                = 0;
                foreach ($map['OrderItem'] as $item) {
                    $model->orderItem[$n++] = null !== $item ? orderItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
