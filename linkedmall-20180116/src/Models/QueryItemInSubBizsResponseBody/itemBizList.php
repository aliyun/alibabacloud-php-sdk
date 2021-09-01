<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInSubBizsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInSubBizsResponseBody\itemBizList\skuList;
use AlibabaCloud\Tea\Model;

class itemBizList extends Model
{
    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $propertiesJson;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $tbShopName;

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
    public $descOption;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $subBizId;

    /**
     * @var int
     */
    public $reservePrice;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var skuList[]
     */
    public $skuList;

    /**
     * @var string[]
     */
    public $itemImages;
    protected $_name = [
        'itemTitle'      => 'ItemTitle',
        'propertiesJson' => 'PropertiesJson',
        'lmItemId'       => 'LmItemId',
        'sellerId'       => 'SellerId',
        'tbShopName'     => 'TbShopName',
        'canSell'        => 'CanSell',
        'itemId'         => 'ItemId',
        'descOption'     => 'DescOption',
        'mainPicUrl'     => 'MainPicUrl',
        'categoryId'     => 'CategoryId',
        'subBizId'       => 'SubBizId',
        'reservePrice'   => 'ReservePrice',
        'quantity'       => 'Quantity',
        'skuList'        => 'SkuList',
        'itemImages'     => 'ItemImages',
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
        if (null !== $this->propertiesJson) {
            $res['PropertiesJson'] = $this->propertiesJson;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->descOption) {
            $res['DescOption'] = $this->descOption;
        }
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->skuList) {
            $res['SkuList'] = [];
            if (null !== $this->skuList && \is_array($this->skuList)) {
                $n = 0;
                foreach ($this->skuList as $item) {
                    $res['SkuList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itemImages) {
            $res['ItemImages'] = $this->itemImages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemBizList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['PropertiesJson'])) {
            $model->propertiesJson = $map['PropertiesJson'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['DescOption'])) {
            $model->descOption = $map['DescOption'];
        }
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['SubBizId'])) {
            $model->subBizId = $map['SubBizId'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['SkuList'])) {
            if (!empty($map['SkuList'])) {
                $model->skuList = [];
                $n              = 0;
                foreach ($map['SkuList'] as $item) {
                    $model->skuList[$n++] = null !== $item ? skuList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ItemImages'])) {
            if (!empty($map['ItemImages'])) {
                $model->itemImages = $map['ItemImages'];
            }
        }

        return $model;
    }
}
