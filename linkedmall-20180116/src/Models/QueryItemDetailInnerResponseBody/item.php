<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailInnerResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailInnerResponseBody\item\skuPropertys;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailInnerResponseBody\item\skus;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $city;

    /**
     * @var int
     */
    public $minPoints;

    /**
     * @var string
     */
    public $descOption;

    /**
     * @var bool
     */
    public $isSellerPayPostfee;

    /**
     * @var string
     */
    public $lmItemCategory;

    /**
     * @var bool
     */
    public $sellerPayPostfee;

    /**
     * @var int
     */
    public $reservePrice;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $tbShopName;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var bool
     */
    public $centerInventory;

    /**
     * @var int
     */
    public $totalSoldQuantity;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var int
     */
    public $minPrice;

    /**
     * @var bool
     */
    public $isCanSell;

    /**
     * @var int
     */
    public $lmShopId;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $sellerNick;

    /**
     * @var string
     */
    public $descPath;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string
     */
    public $province;

    /**
     * @var skus[]
     */
    public $skus;

    /**
     * @var skuPropertys[]
     */
    public $skuPropertys;

    /**
     * @var int[]
     */
    public $categoryIds;

    /**
     * @var mixed[][]
     */
    public $iforestProps;

    /**
     * @var string[]
     */
    public $itemImages;
    protected $_name = [
        'itemTitle'          => 'ItemTitle',
        'city'               => 'City',
        'minPoints'          => 'MinPoints',
        'descOption'         => 'DescOption',
        'isSellerPayPostfee' => 'IsSellerPayPostfee',
        'lmItemCategory'     => 'LmItemCategory',
        'sellerPayPostfee'   => 'SellerPayPostfee',
        'reservePrice'       => 'ReservePrice',
        'quantity'           => 'Quantity',
        'sellerId'           => 'SellerId',
        'tbShopName'         => 'TbShopName',
        'itemId'             => 'ItemId',
        'canSell'            => 'CanSell',
        'centerInventory'    => 'CenterInventory',
        'totalSoldQuantity'  => 'TotalSoldQuantity',
        'mainPicUrl'         => 'MainPicUrl',
        'minPrice'           => 'MinPrice',
        'isCanSell'          => 'IsCanSell',
        'lmShopId'           => 'LmShopId',
        'categoryId'         => 'CategoryId',
        'sellerNick'         => 'SellerNick',
        'descPath'           => 'DescPath',
        'properties'         => 'Properties',
        'province'           => 'Province',
        'skus'               => 'Skus',
        'skuPropertys'       => 'SkuPropertys',
        'categoryIds'        => 'CategoryIds',
        'iforestProps'       => 'IforestProps',
        'itemImages'         => 'ItemImages',
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
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->minPoints) {
            $res['MinPoints'] = $this->minPoints;
        }
        if (null !== $this->descOption) {
            $res['DescOption'] = $this->descOption;
        }
        if (null !== $this->isSellerPayPostfee) {
            $res['IsSellerPayPostfee'] = $this->isSellerPayPostfee;
        }
        if (null !== $this->lmItemCategory) {
            $res['LmItemCategory'] = $this->lmItemCategory;
        }
        if (null !== $this->sellerPayPostfee) {
            $res['SellerPayPostfee'] = $this->sellerPayPostfee;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->centerInventory) {
            $res['CenterInventory'] = $this->centerInventory;
        }
        if (null !== $this->totalSoldQuantity) {
            $res['TotalSoldQuantity'] = $this->totalSoldQuantity;
        }
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
        }
        if (null !== $this->minPrice) {
            $res['MinPrice'] = $this->minPrice;
        }
        if (null !== $this->isCanSell) {
            $res['IsCanSell'] = $this->isCanSell;
        }
        if (null !== $this->lmShopId) {
            $res['LmShopId'] = $this->lmShopId;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->sellerNick) {
            $res['SellerNick'] = $this->sellerNick;
        }
        if (null !== $this->descPath) {
            $res['DescPath'] = $this->descPath;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->skus) {
            $res['Skus'] = [];
            if (null !== $this->skus && \is_array($this->skus)) {
                $n = 0;
                foreach ($this->skus as $item) {
                    $res['Skus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->skuPropertys) {
            $res['SkuPropertys'] = [];
            if (null !== $this->skuPropertys && \is_array($this->skuPropertys)) {
                $n = 0;
                foreach ($this->skuPropertys as $item) {
                    $res['SkuPropertys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->categoryIds) {
            $res['CategoryIds'] = $this->categoryIds;
        }
        if (null !== $this->iforestProps) {
            $res['IforestProps'] = $this->iforestProps;
        }
        if (null !== $this->itemImages) {
            $res['ItemImages'] = $this->itemImages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['MinPoints'])) {
            $model->minPoints = $map['MinPoints'];
        }
        if (isset($map['DescOption'])) {
            $model->descOption = $map['DescOption'];
        }
        if (isset($map['IsSellerPayPostfee'])) {
            $model->isSellerPayPostfee = $map['IsSellerPayPostfee'];
        }
        if (isset($map['LmItemCategory'])) {
            $model->lmItemCategory = $map['LmItemCategory'];
        }
        if (isset($map['SellerPayPostfee'])) {
            $model->sellerPayPostfee = $map['SellerPayPostfee'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['CenterInventory'])) {
            $model->centerInventory = $map['CenterInventory'];
        }
        if (isset($map['TotalSoldQuantity'])) {
            $model->totalSoldQuantity = $map['TotalSoldQuantity'];
        }
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
        }
        if (isset($map['MinPrice'])) {
            $model->minPrice = $map['MinPrice'];
        }
        if (isset($map['IsCanSell'])) {
            $model->isCanSell = $map['IsCanSell'];
        }
        if (isset($map['LmShopId'])) {
            $model->lmShopId = $map['LmShopId'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['SellerNick'])) {
            $model->sellerNick = $map['SellerNick'];
        }
        if (isset($map['DescPath'])) {
            $model->descPath = $map['DescPath'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Skus'])) {
            if (!empty($map['Skus'])) {
                $model->skus = [];
                $n           = 0;
                foreach ($map['Skus'] as $item) {
                    $model->skus[$n++] = null !== $item ? skus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SkuPropertys'])) {
            if (!empty($map['SkuPropertys'])) {
                $model->skuPropertys = [];
                $n                   = 0;
                foreach ($map['SkuPropertys'] as $item) {
                    $model->skuPropertys[$n++] = null !== $item ? skuPropertys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CategoryIds'])) {
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = $map['CategoryIds'];
            }
        }
        if (isset($map['IforestProps'])) {
            if (!empty($map['IforestProps'])) {
                $model->iforestProps = $map['IforestProps'];
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
