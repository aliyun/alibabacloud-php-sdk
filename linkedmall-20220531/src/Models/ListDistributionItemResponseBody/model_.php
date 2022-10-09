<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model\categoryChain;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model\skuList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
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
     * @var string
     */
    public $descOption;

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
     * @var bool
     */
    public $hasQuantity;

    /**
     * @var bool
     */
    public $isCanSell;

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
    public $lmItemId;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var string
     */
    public $picUrl;

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
     * @var string
     */
    public $simpleQuantity;

    /**
     * @var string
     */
    public $simpleTotalSoldQuantity;

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
    public $tips;

    /**
     * @var int
     */
    public $totalSoldQuantity;
    protected $_name = [
        'category'                => 'Category',
        'categoryChain'           => 'CategoryChain',
        'categoryId'              => 'CategoryId',
        'descOption'              => 'DescOption',
        'distributionMallId'      => 'DistributionMallId',
        'gmtCreate'               => 'GmtCreate',
        'gmtModified'             => 'GmtModified',
        'hasQuantity'             => 'HasQuantity',
        'isCanSell'               => 'IsCanSell',
        'itemDesc'                => 'ItemDesc',
        'itemId'                  => 'ItemId',
        'itemIdStr'               => 'ItemIdStr',
        'itemImages'              => 'ItemImages',
        'itemName'                => 'ItemName',
        'itemTitle'               => 'ItemTitle',
        'lmItemId'                => 'LmItemId',
        'mainPicUrl'              => 'MainPicUrl',
        'picUrl'                  => 'PicUrl',
        'priceCentScope'          => 'PriceCentScope',
        'propertiesJson'          => 'PropertiesJson',
        'quantity'                => 'Quantity',
        'reservedPrice'           => 'ReservedPrice',
        'reservedPriceScope'      => 'ReservedPriceScope',
        'simpleQuantity'          => 'SimpleQuantity',
        'simpleTotalSoldQuantity' => 'SimpleTotalSoldQuantity',
        'skuList'                 => 'SkuList',
        'status'                  => 'Status',
        'tips'                    => 'Tips',
        'totalSoldQuantity'       => 'TotalSoldQuantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->descOption) {
            $res['DescOption'] = $this->descOption;
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
        if (null !== $this->hasQuantity) {
            $res['HasQuantity'] = $this->hasQuantity;
        }
        if (null !== $this->isCanSell) {
            $res['IsCanSell'] = $this->isCanSell;
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
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
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
        if (null !== $this->simpleQuantity) {
            $res['SimpleQuantity'] = $this->simpleQuantity;
        }
        if (null !== $this->simpleTotalSoldQuantity) {
            $res['SimpleTotalSoldQuantity'] = $this->simpleTotalSoldQuantity;
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
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->totalSoldQuantity) {
            $res['TotalSoldQuantity'] = $this->totalSoldQuantity;
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
        if (isset($map['DescOption'])) {
            $model->descOption = $map['DescOption'];
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
        if (isset($map['HasQuantity'])) {
            $model->hasQuantity = $map['HasQuantity'];
        }
        if (isset($map['IsCanSell'])) {
            $model->isCanSell = $map['IsCanSell'];
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
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
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
        if (isset($map['SimpleQuantity'])) {
            $model->simpleQuantity = $map['SimpleQuantity'];
        }
        if (isset($map['SimpleTotalSoldQuantity'])) {
            $model->simpleTotalSoldQuantity = $map['SimpleTotalSoldQuantity'];
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
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['TotalSoldQuantity'])) {
            $model->totalSoldQuantity = $map['TotalSoldQuantity'];
        }

        return $model;
    }
}
