<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList\subOrderList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderAndPaymentListResponseBody\lmOrderList\lmOrderList\subOrderList\subOrderList\itemPriceList;
use AlibabaCloud\Tea\Model;

class subOrderList extends Model
{
    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var itemPriceList
     */
    public $itemPriceList;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $itemPic;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var int
     */
    public $enableStatus;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $skuName;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var int
     */
    public $number;

    /**
     * @var int
     */
    public $tbOrderId;
    protected $_name = [
        'lmOrderId'     => 'LmOrderId',
        'itemTitle'     => 'ItemTitle',
        'itemPriceList' => 'ItemPriceList',
        'lmItemId'      => 'LmItemId',
        'itemPic'       => 'ItemPic',
        'itemId'        => 'ItemId',
        'enableStatus'  => 'EnableStatus',
        'orderStatus'   => 'OrderStatus',
        'skuName'       => 'SkuName',
        'skuId'         => 'SkuId',
        'number'        => 'Number',
        'tbOrderId'     => 'TbOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->itemPriceList) {
            $res['ItemPriceList'] = null !== $this->itemPriceList ? $this->itemPriceList->toMap() : null;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->itemPic) {
            $res['ItemPic'] = $this->itemPic;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['ItemPriceList'])) {
            $model->itemPriceList = itemPriceList::fromMap($map['ItemPriceList']);
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['ItemPic'])) {
            $model->itemPic = $map['ItemPic'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }

        return $model;
    }
}
