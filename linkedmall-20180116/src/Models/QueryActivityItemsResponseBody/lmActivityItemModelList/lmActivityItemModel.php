<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList\lmActivityItemModel\skuModelList;
use AlibabaCloud\Tea\Model;

class lmActivityItemModel extends Model
{
    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var int
     */
    public $itemActivityQuantity;

    /**
     * @var string
     */
    public $itemActivityStatus;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $lmShopId;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var int
     */
    public $sellableQuantity;

    /**
     * @var skuModelList
     */
    public $skuModelList;

    /**
     * @var int
     */
    public $tbSellerId;

    /**
     * @var int
     */
    public $tbShopId;

    /**
     * @var string
     */
    public $tbShopName;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'canSell'              => 'CanSell',
        'itemActivityQuantity' => 'ItemActivityQuantity',
        'itemActivityStatus'   => 'ItemActivityStatus',
        'itemId'               => 'ItemId',
        'itemTitle'            => 'ItemTitle',
        'lmActivityId'         => 'LmActivityId',
        'lmItemId'             => 'LmItemId',
        'lmShopId'             => 'LmShopId',
        'mainPicUrl'           => 'MainPicUrl',
        'sellableQuantity'     => 'SellableQuantity',
        'skuModelList'         => 'SkuModelList',
        'tbSellerId'           => 'TbSellerId',
        'tbShopId'             => 'TbShopId',
        'tbShopName'           => 'TbShopName',
        'tips'                 => 'Tips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->itemActivityQuantity) {
            $res['ItemActivityQuantity'] = $this->itemActivityQuantity;
        }
        if (null !== $this->itemActivityStatus) {
            $res['ItemActivityStatus'] = $this->itemActivityStatus;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->lmShopId) {
            $res['LmShopId'] = $this->lmShopId;
        }
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
        }
        if (null !== $this->sellableQuantity) {
            $res['SellableQuantity'] = $this->sellableQuantity;
        }
        if (null !== $this->skuModelList) {
            $res['SkuModelList'] = null !== $this->skuModelList ? $this->skuModelList->toMap() : null;
        }
        if (null !== $this->tbSellerId) {
            $res['TbSellerId'] = $this->tbSellerId;
        }
        if (null !== $this->tbShopId) {
            $res['TbShopId'] = $this->tbShopId;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmActivityItemModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['ItemActivityQuantity'])) {
            $model->itemActivityQuantity = $map['ItemActivityQuantity'];
        }
        if (isset($map['ItemActivityStatus'])) {
            $model->itemActivityStatus = $map['ItemActivityStatus'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['LmShopId'])) {
            $model->lmShopId = $map['LmShopId'];
        }
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
        }
        if (isset($map['SellableQuantity'])) {
            $model->sellableQuantity = $map['SellableQuantity'];
        }
        if (isset($map['SkuModelList'])) {
            $model->skuModelList = skuModelList::fromMap($map['SkuModelList']);
        }
        if (isset($map['TbSellerId'])) {
            $model->tbSellerId = $map['TbSellerId'];
        }
        if (isset($map['TbShopId'])) {
            $model->tbShopId = $map['TbShopId'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
