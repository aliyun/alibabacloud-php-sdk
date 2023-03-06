<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model\unsellableRenderOrderInfos\shopPromInstVOS;

use AlibabaCloud\Tea\Model;

class availableItems extends Model
{
    /**
     * @example 661***792
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 100***66-633***108
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 100***92
     *
     * @var int
     */
    public $lmShopId;

    /**
     * @example 1
     *
     * @var int
     */
    public $number;

    /**
     * @example 0
     *
     * @var int
     */
    public $points;

    /**
     * @example 0
     *
     * @var int
     */
    public $pointsAmount;

    /**
     * @example 1000
     *
     * @var int
     */
    public $priceCent;

    /**
     * @example true
     *
     * @var bool
     */
    public $removed;

    /**
     * @example 502***2291
     *
     * @var int
     */
    public $skuId;

    /**
     * @example 3432***42
     *
     * @var int
     */
    public $tbSellerId;

    /**
     * @example 500
     *
     * @var int
     */
    public $userPayFee;
    protected $_name = [
        'itemId'       => 'ItemId',
        'lmItemId'     => 'LmItemId',
        'lmShopId'     => 'LmShopId',
        'number'       => 'Number',
        'points'       => 'Points',
        'pointsAmount' => 'PointsAmount',
        'priceCent'    => 'PriceCent',
        'removed'      => 'Removed',
        'skuId'        => 'SkuId',
        'tbSellerId'   => 'TbSellerId',
        'userPayFee'   => 'UserPayFee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->lmShopId) {
            $res['LmShopId'] = $this->lmShopId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->removed) {
            $res['Removed'] = $this->removed;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->tbSellerId) {
            $res['TbSellerId'] = $this->tbSellerId;
        }
        if (null !== $this->userPayFee) {
            $res['UserPayFee'] = $this->userPayFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['LmShopId'])) {
            $model->lmShopId = $map['LmShopId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['Removed'])) {
            $model->removed = $map['Removed'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['TbSellerId'])) {
            $model->tbSellerId = $map['TbSellerId'];
        }
        if (isset($map['UserPayFee'])) {
            $model->userPayFee = $map['UserPayFee'];
        }

        return $model;
    }
}
