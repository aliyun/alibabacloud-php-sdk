<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInSubBizsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInSubBizsResponseBody\itemBizList\skuList;
use AlibabaCloud\Tea\Model;

class itemBizList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

    /**
     * @example 50444021
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example ""
     *
     * @var string
     */
    public $descOption;

    /**
     * @example 62503849****
     *
     * @var int
     */
    public $itemId;

    /**
     * @var string[]
     */
    public $itemImages;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @example 10006484-64668317****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example https://img.alicdn.com/imgextra/i3/22066070*****\/O1CN01jCtHkC1ZjO2Q8DWUk_!!0-item_pic.jpg
     *
     * @var string
     */
    public $mainPicUrl;

    /**
     * @example {}
     *
     * @var string
     */
    public $propertiesJson;

    /**
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 2990
     *
     * @var int
     */
    public $reservePrice;

    /**
     * @example 329488****
     *
     * @var int
     */
    public $sellerId;

    /**
     * @var skuList[]
     */
    public $skuList;

    /**
     * @example 9f65e0905a544924b3cda147f28b****
     *
     * @var string
     */
    public $subBizId;

    /**
     * @var string
     */
    public $tbShopName;
    protected $_name = [
        'canSell'        => 'CanSell',
        'categoryId'     => 'CategoryId',
        'descOption'     => 'DescOption',
        'itemId'         => 'ItemId',
        'itemImages'     => 'ItemImages',
        'itemTitle'      => 'ItemTitle',
        'lmItemId'       => 'LmItemId',
        'mainPicUrl'     => 'MainPicUrl',
        'propertiesJson' => 'PropertiesJson',
        'quantity'       => 'Quantity',
        'reservePrice'   => 'ReservePrice',
        'sellerId'       => 'SellerId',
        'skuList'        => 'SkuList',
        'subBizId'       => 'SubBizId',
        'tbShopName'     => 'TbShopName',
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
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->descOption) {
            $res['DescOption'] = $this->descOption;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemImages) {
            $res['ItemImages'] = $this->itemImages;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
        }
        if (null !== $this->propertiesJson) {
            $res['PropertiesJson'] = $this->propertiesJson;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
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
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
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
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['DescOption'])) {
            $model->descOption = $map['DescOption'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemImages'])) {
            if (!empty($map['ItemImages'])) {
                $model->itemImages = $map['ItemImages'];
            }
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
        }
        if (isset($map['PropertiesJson'])) {
            $model->propertiesJson = $map['PropertiesJson'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
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
        if (isset($map['SubBizId'])) {
            $model->subBizId = $map['SubBizId'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }

        return $model;
    }
}
