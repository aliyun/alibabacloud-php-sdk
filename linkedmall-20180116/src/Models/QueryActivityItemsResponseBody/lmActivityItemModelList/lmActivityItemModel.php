<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList\lmActivityItemModel\skuModelList;
use AlibabaCloud\Tea\Model;

class lmActivityItemModel extends Model
{
    /**
     * @var int
     */
    public $tbSellerId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var int
     */
    public $sellableQuantity;

    /**
     * @var int
     */
    public $tbShopId;

    /**
     * @var int
     */
    public $itemActivityQuantity;

    /**
     * @var string
     */
    public $tbShopName;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var bool
     */
    public $canSell;

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
     * @var skuModelList
     */
    public $skuModelList;

    /**
     * @var string
     */
    public $itemActivityStatus;
    protected $_name = [
        'tbSellerId'           => 'TbSellerId',
        'itemTitle'            => 'ItemTitle',
        'sellableQuantity'     => 'SellableQuantity',
        'tbShopId'             => 'TbShopId',
        'itemActivityQuantity' => 'ItemActivityQuantity',
        'tbShopName'           => 'TbShopName',
        'lmItemId'             => 'LmItemId',
        'lmActivityId'         => 'LmActivityId',
        'itemId'               => 'ItemId',
        'canSell'              => 'CanSell',
        'mainPicUrl'           => 'MainPicUrl',
        'tips'                 => 'Tips',
        'lmShopId'             => 'LmShopId',
        'skuModelList'         => 'SkuModelList',
        'itemActivityStatus'   => 'ItemActivityStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tbSellerId) {
            $res['TbSellerId'] = $this->tbSellerId;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->sellableQuantity) {
            $res['SellableQuantity'] = $this->sellableQuantity;
        }
        if (null !== $this->tbShopId) {
            $res['TbShopId'] = $this->tbShopId;
        }
        if (null !== $this->itemActivityQuantity) {
            $res['ItemActivityQuantity'] = $this->itemActivityQuantity;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
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
        if (null !== $this->skuModelList) {
            $res['SkuModelList'] = null !== $this->skuModelList ? $this->skuModelList->toMap() : null;
        }
        if (null !== $this->itemActivityStatus) {
            $res['ItemActivityStatus'] = $this->itemActivityStatus;
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
        if (isset($map['TbSellerId'])) {
            $model->tbSellerId = $map['TbSellerId'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['SellableQuantity'])) {
            $model->sellableQuantity = $map['SellableQuantity'];
        }
        if (isset($map['TbShopId'])) {
            $model->tbShopId = $map['TbShopId'];
        }
        if (isset($map['ItemActivityQuantity'])) {
            $model->itemActivityQuantity = $map['ItemActivityQuantity'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
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
        if (isset($map['SkuModelList'])) {
            $model->skuModelList = skuModelList::fromMap($map['SkuModelList']);
        }
        if (isset($map['ItemActivityStatus'])) {
            $model->itemActivityStatus = $map['ItemActivityStatus'];
        }

        return $model;
    }
}
