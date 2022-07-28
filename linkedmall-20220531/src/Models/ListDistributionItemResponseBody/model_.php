<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model\categoryChain;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model\lmAttributeModels;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model\skuList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var int
     */
    public $auctionStatus;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $bizTotalSaleNum;

    /**
     * @var string
     */
    public $category;

    /**
     * @var categoryChain[]
     */
    public $categoryChain;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $cumulativeSaleNum;

    /**
     * @var string
     */
    public $descOption;

    /**
     * @var string
     */
    public $discountRateScope;

    /**
     * @var string
     */
    public $disparityPriceScope;

    /**
     * @var string
     */
    public $distributionMallId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $icQuantity;

    /**
     * @var bool
     */
    public $isCanSell;

    /**
     * @var bool
     */
    public $isInventoryZero;

    /**
     * @var string
     */
    public $itemDesc;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemIdStr;

    /**
     * @var string[]
     */
    public $itemImages;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $linkRatio;

    /**
     * @var lmAttributeModels[]
     */
    public $lmAttributeModels;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $lmShopId;

    /**
     * @var int
     */
    public $mainBizStatus;

    /**
     * @var int
     */
    public $mainBizTotalSaleNum;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var string
     */
    public $mainPriceCentScope;

    /**
     * @var int
     */
    public $maxAllowedCount;

    /**
     * @var int
     */
    public $monthSaleNum;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $premiumRateScope;

    /**
     * @var string
     */
    public $priceCentScope;

    /**
     * @var string
     */
    public $propertiesJson;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $reservedPrice;

    /**
     * @var string
     */
    public $reservedPriceScope;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var int
     */
    public $sessionQuantity;

    /**
     * @var int
     */
    public $shopId;

    /**
     * @var skuList[]
     */
    public $skuList;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supplyPriceCentScope;

    /**
     * @var string
     */
    public $taoBaoCurrentPriceScope;

    /**
     * @var string
     */
    public $tbShopName;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var int
     */
    public $totalSoldQuantity;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $userCashPointsScope;
    protected $_name = [
        'auctionStatus'           => 'AuctionStatus',
        'bizId'                   => 'BizId',
        'bizTotalSaleNum'         => 'BizTotalSaleNum',
        'category'                => 'Category',
        'categoryChain'           => 'CategoryChain',
        'categoryId'              => 'CategoryId',
        'cumulativeSaleNum'       => 'CumulativeSaleNum',
        'descOption'              => 'DescOption',
        'discountRateScope'       => 'DiscountRateScope',
        'disparityPriceScope'     => 'DisparityPriceScope',
        'distributionMallId'      => 'DistributionMallId',
        'gmtCreate'               => 'GmtCreate',
        'gmtModified'             => 'GmtModified',
        'icQuantity'              => 'IcQuantity',
        'isCanSell'               => 'IsCanSell',
        'isInventoryZero'         => 'IsInventoryZero',
        'itemDesc'                => 'ItemDesc',
        'itemId'                  => 'ItemId',
        'itemIdStr'               => 'ItemIdStr',
        'itemImages'              => 'ItemImages',
        'itemName'                => 'ItemName',
        'itemTitle'               => 'ItemTitle',
        'linkRatio'               => 'LinkRatio',
        'lmAttributeModels'       => 'LmAttributeModels',
        'lmItemId'                => 'LmItemId',
        'lmShopId'                => 'LmShopId',
        'mainBizStatus'           => 'MainBizStatus',
        'mainBizTotalSaleNum'     => 'MainBizTotalSaleNum',
        'mainPicUrl'              => 'MainPicUrl',
        'mainPriceCentScope'      => 'MainPriceCentScope',
        'maxAllowedCount'         => 'MaxAllowedCount',
        'monthSaleNum'            => 'MonthSaleNum',
        'picUrl'                  => 'PicUrl',
        'premiumRateScope'        => 'PremiumRateScope',
        'priceCentScope'          => 'PriceCentScope',
        'propertiesJson'          => 'PropertiesJson',
        'quantity'                => 'Quantity',
        'reservedPrice'           => 'ReservedPrice',
        'reservedPriceScope'      => 'ReservedPriceScope',
        'sellerId'                => 'SellerId',
        'sessionQuantity'         => 'SessionQuantity',
        'shopId'                  => 'ShopId',
        'skuList'                 => 'SkuList',
        'status'                  => 'Status',
        'supplyPriceCentScope'    => 'SupplyPriceCentScope',
        'taoBaoCurrentPriceScope' => 'TaoBaoCurrentPriceScope',
        'tbShopName'              => 'TbShopName',
        'tips'                    => 'Tips',
        'totalSoldQuantity'       => 'TotalSoldQuantity',
        'type'                    => 'Type',
        'userCashPointsScope'     => 'UserCashPointsScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auctionStatus) {
            $res['AuctionStatus'] = $this->auctionStatus;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizTotalSaleNum) {
            $res['BizTotalSaleNum'] = $this->bizTotalSaleNum;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->categoryChain) {
            $res['CategoryChain'] = [];
            if (null !== $this->categoryChain && \is_array($this->categoryChain)) {
                $n = 0;
                foreach ($this->categoryChain as $item) {
                    $res['CategoryChain'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->cumulativeSaleNum) {
            $res['CumulativeSaleNum'] = $this->cumulativeSaleNum;
        }
        if (null !== $this->descOption) {
            $res['DescOption'] = $this->descOption;
        }
        if (null !== $this->discountRateScope) {
            $res['DiscountRateScope'] = $this->discountRateScope;
        }
        if (null !== $this->disparityPriceScope) {
            $res['DisparityPriceScope'] = $this->disparityPriceScope;
        }
        if (null !== $this->distributionMallId) {
            $res['DistributionMallId'] = $this->distributionMallId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->icQuantity) {
            $res['IcQuantity'] = $this->icQuantity;
        }
        if (null !== $this->isCanSell) {
            $res['IsCanSell'] = $this->isCanSell;
        }
        if (null !== $this->isInventoryZero) {
            $res['IsInventoryZero'] = $this->isInventoryZero;
        }
        if (null !== $this->itemDesc) {
            $res['ItemDesc'] = $this->itemDesc;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemIdStr) {
            $res['ItemIdStr'] = $this->itemIdStr;
        }
        if (null !== $this->itemImages) {
            $res['ItemImages'] = $this->itemImages;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->linkRatio) {
            $res['LinkRatio'] = $this->linkRatio;
        }
        if (null !== $this->lmAttributeModels) {
            $res['LmAttributeModels'] = [];
            if (null !== $this->lmAttributeModels && \is_array($this->lmAttributeModels)) {
                $n = 0;
                foreach ($this->lmAttributeModels as $item) {
                    $res['LmAttributeModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->lmShopId) {
            $res['LmShopId'] = $this->lmShopId;
        }
        if (null !== $this->mainBizStatus) {
            $res['MainBizStatus'] = $this->mainBizStatus;
        }
        if (null !== $this->mainBizTotalSaleNum) {
            $res['MainBizTotalSaleNum'] = $this->mainBizTotalSaleNum;
        }
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
        }
        if (null !== $this->mainPriceCentScope) {
            $res['MainPriceCentScope'] = $this->mainPriceCentScope;
        }
        if (null !== $this->maxAllowedCount) {
            $res['MaxAllowedCount'] = $this->maxAllowedCount;
        }
        if (null !== $this->monthSaleNum) {
            $res['MonthSaleNum'] = $this->monthSaleNum;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->premiumRateScope) {
            $res['PremiumRateScope'] = $this->premiumRateScope;
        }
        if (null !== $this->priceCentScope) {
            $res['PriceCentScope'] = $this->priceCentScope;
        }
        if (null !== $this->propertiesJson) {
            $res['PropertiesJson'] = $this->propertiesJson;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->reservedPrice) {
            $res['ReservedPrice'] = $this->reservedPrice;
        }
        if (null !== $this->reservedPriceScope) {
            $res['ReservedPriceScope'] = $this->reservedPriceScope;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->sessionQuantity) {
            $res['SessionQuantity'] = $this->sessionQuantity;
        }
        if (null !== $this->shopId) {
            $res['ShopId'] = $this->shopId;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplyPriceCentScope) {
            $res['SupplyPriceCentScope'] = $this->supplyPriceCentScope;
        }
        if (null !== $this->taoBaoCurrentPriceScope) {
            $res['TaoBaoCurrentPriceScope'] = $this->taoBaoCurrentPriceScope;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->totalSoldQuantity) {
            $res['TotalSoldQuantity'] = $this->totalSoldQuantity;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userCashPointsScope) {
            $res['UserCashPointsScope'] = $this->userCashPointsScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuctionStatus'])) {
            $model->auctionStatus = $map['AuctionStatus'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizTotalSaleNum'])) {
            $model->bizTotalSaleNum = $map['BizTotalSaleNum'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CategoryChain'])) {
            if (!empty($map['CategoryChain'])) {
                $model->categoryChain = [];
                $n                    = 0;
                foreach ($map['CategoryChain'] as $item) {
                    $model->categoryChain[$n++] = null !== $item ? categoryChain::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CumulativeSaleNum'])) {
            $model->cumulativeSaleNum = $map['CumulativeSaleNum'];
        }
        if (isset($map['DescOption'])) {
            $model->descOption = $map['DescOption'];
        }
        if (isset($map['DiscountRateScope'])) {
            $model->discountRateScope = $map['DiscountRateScope'];
        }
        if (isset($map['DisparityPriceScope'])) {
            $model->disparityPriceScope = $map['DisparityPriceScope'];
        }
        if (isset($map['DistributionMallId'])) {
            $model->distributionMallId = $map['DistributionMallId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IcQuantity'])) {
            $model->icQuantity = $map['IcQuantity'];
        }
        if (isset($map['IsCanSell'])) {
            $model->isCanSell = $map['IsCanSell'];
        }
        if (isset($map['IsInventoryZero'])) {
            $model->isInventoryZero = $map['IsInventoryZero'];
        }
        if (isset($map['ItemDesc'])) {
            $model->itemDesc = $map['ItemDesc'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemIdStr'])) {
            $model->itemIdStr = $map['ItemIdStr'];
        }
        if (isset($map['ItemImages'])) {
            if (!empty($map['ItemImages'])) {
                $model->itemImages = $map['ItemImages'];
            }
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['LinkRatio'])) {
            $model->linkRatio = $map['LinkRatio'];
        }
        if (isset($map['LmAttributeModels'])) {
            if (!empty($map['LmAttributeModels'])) {
                $model->lmAttributeModels = [];
                $n                        = 0;
                foreach ($map['LmAttributeModels'] as $item) {
                    $model->lmAttributeModels[$n++] = null !== $item ? lmAttributeModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['LmShopId'])) {
            $model->lmShopId = $map['LmShopId'];
        }
        if (isset($map['MainBizStatus'])) {
            $model->mainBizStatus = $map['MainBizStatus'];
        }
        if (isset($map['MainBizTotalSaleNum'])) {
            $model->mainBizTotalSaleNum = $map['MainBizTotalSaleNum'];
        }
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
        }
        if (isset($map['MainPriceCentScope'])) {
            $model->mainPriceCentScope = $map['MainPriceCentScope'];
        }
        if (isset($map['MaxAllowedCount'])) {
            $model->maxAllowedCount = $map['MaxAllowedCount'];
        }
        if (isset($map['MonthSaleNum'])) {
            $model->monthSaleNum = $map['MonthSaleNum'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['PremiumRateScope'])) {
            $model->premiumRateScope = $map['PremiumRateScope'];
        }
        if (isset($map['PriceCentScope'])) {
            $model->priceCentScope = $map['PriceCentScope'];
        }
        if (isset($map['PropertiesJson'])) {
            $model->propertiesJson = $map['PropertiesJson'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['ReservedPrice'])) {
            $model->reservedPrice = $map['ReservedPrice'];
        }
        if (isset($map['ReservedPriceScope'])) {
            $model->reservedPriceScope = $map['ReservedPriceScope'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['SessionQuantity'])) {
            $model->sessionQuantity = $map['SessionQuantity'];
        }
        if (isset($map['ShopId'])) {
            $model->shopId = $map['ShopId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplyPriceCentScope'])) {
            $model->supplyPriceCentScope = $map['SupplyPriceCentScope'];
        }
        if (isset($map['TaoBaoCurrentPriceScope'])) {
            $model->taoBaoCurrentPriceScope = $map['TaoBaoCurrentPriceScope'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['TotalSoldQuantity'])) {
            $model->totalSoldQuantity = $map['TotalSoldQuantity'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserCashPointsScope'])) {
            $model->userCashPointsScope = $map['UserCashPointsScope'];
        }

        return $model;
    }
}
