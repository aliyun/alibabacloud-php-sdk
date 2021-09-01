<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\subItemOrderList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\subItemOrderList\subItemOrder\itemPriceList;
use AlibabaCloud\Tea\Model;

class subItemOrder extends Model
{
    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var string
     */
    public $itemPriceInfo;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var int
     */
    public $tbSubOrderId;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $totalPaymentInfo;

    /**
     * @var string
     */
    public $itemPic;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $channelCode;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var string
     */
    public $skuName;

    /**
     * @var int
     */
    public $number;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var itemPriceList
     */
    public $itemPriceList;
    protected $_name = [
        'lmOrderId'        => 'LmOrderId',
        'itemPriceInfo'    => 'ItemPriceInfo',
        'itemTitle'        => 'ItemTitle',
        'tbSubOrderId'     => 'TbSubOrderId',
        'lmItemId'         => 'LmItemId',
        'totalPaymentInfo' => 'TotalPaymentInfo',
        'itemPic'          => 'ItemPic',
        'itemId'           => 'ItemId',
        'channelCode'      => 'ChannelCode',
        'payStatus'        => 'PayStatus',
        'skuName'          => 'SkuName',
        'number'           => 'Number',
        'skuId'            => 'SkuId',
        'itemPriceList'    => 'ItemPriceList',
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
        if (null !== $this->itemPriceInfo) {
            $res['ItemPriceInfo'] = $this->itemPriceInfo;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->tbSubOrderId) {
            $res['TbSubOrderId'] = $this->tbSubOrderId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->totalPaymentInfo) {
            $res['TotalPaymentInfo'] = $this->totalPaymentInfo;
        }
        if (null !== $this->itemPic) {
            $res['ItemPic'] = $this->itemPic;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->payStatus) {
            $res['PayStatus'] = $this->payStatus;
        }
        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->itemPriceList) {
            $res['ItemPriceList'] = null !== $this->itemPriceList ? $this->itemPriceList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subItemOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['ItemPriceInfo'])) {
            $model->itemPriceInfo = $map['ItemPriceInfo'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['TbSubOrderId'])) {
            $model->tbSubOrderId = $map['TbSubOrderId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['TotalPaymentInfo'])) {
            $model->totalPaymentInfo = $map['TotalPaymentInfo'];
        }
        if (isset($map['ItemPic'])) {
            $model->itemPic = $map['ItemPic'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['PayStatus'])) {
            $model->payStatus = $map['PayStatus'];
        }
        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['ItemPriceList'])) {
            $model->itemPriceList = itemPriceList::fromMap($map['ItemPriceList']);
        }

        return $model;
    }
}
