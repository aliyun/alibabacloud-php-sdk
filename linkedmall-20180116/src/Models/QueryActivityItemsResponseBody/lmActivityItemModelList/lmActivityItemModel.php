<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList\lmActivityItemModel\skuModelList;
use AlibabaCloud\Tea\Model;

class lmActivityItemModel extends Model
{
    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var int
     */
    public $tbSellerId;

    /**
     * @var int
     */
    public $sellableQuantity;

    /**
     * @var int
     */
    public $tbShopId;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $tbShopName;

    /**
     * @var int
     */
    public $itemActivityQuantity;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var string
     */
    public $lmShopId;

    /**
     * @var string
     */
    public $itemActivityStatus;

    /**
     * @var skuModelList
     */
    public $skuModelList;
    protected $_name = [
        'itemTitle'            => 'ItemTitle',
        'tbSellerId'           => 'TbSellerId',
        'sellableQuantity'     => 'SellableQuantity',
        'tbShopId'             => 'TbShopId',
        'lmItemId'             => 'LmItemId',
        'tbShopName'           => 'TbShopName',
        'itemActivityQuantity' => 'ItemActivityQuantity',
        'lmActivityId'         => 'LmActivityId',
        'canSell'              => 'CanSell',
        'itemId'               => 'ItemId',
        'mainPicUrl'           => 'MainPicUrl',
        'tips'                 => 'Tips',
        'lmShopId'             => 'LmShopId',
        'itemActivityStatus'   => 'ItemActivityStatus',
        'skuModelList'         => 'SkuModelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->tbSellerId) {
            $res['TbSellerId'] = $this->tbSellerId;
        }
        if (null !== $this->sellableQuantity) {
            $res['SellableQuantity'] = $this->sellableQuantity;
        }
        if (null !== $this->tbShopId) {
            $res['TbShopId'] = $this->tbShopId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->itemActivityQuantity) {
            $res['ItemActivityQuantity'] = $this->itemActivityQuantity;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->lmShopId) {
            $res['LmShopId'] = $this->lmShopId;
        }
        if (null !== $this->itemActivityStatus) {
            $res['ItemActivityStatus'] = $this->itemActivityStatus;
        }
        if (null !== $this->skuModelList) {
            $res['SkuModelList'] = null !== $this->skuModelList ? $this->skuModelList->toMap() : null;
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
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['TbSellerId'])) {
            $model->tbSellerId = $map['TbSellerId'];
        }
        if (isset($map['SellableQuantity'])) {
            $model->sellableQuantity = $map['SellableQuantity'];
        }
        if (isset($map['TbShopId'])) {
            $model->tbShopId = $map['TbShopId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['ItemActivityQuantity'])) {
            $model->itemActivityQuantity = $map['ItemActivityQuantity'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['LmShopId'])) {
            $model->lmShopId = $map['LmShopId'];
        }
        if (isset($map['ItemActivityStatus'])) {
            $model->itemActivityStatus = $map['ItemActivityStatus'];
        }
        if (isset($map['SkuModelList'])) {
            $model->skuModelList = skuModelList::fromMap($map['SkuModelList']);
        }

        return $model;
    }
}
