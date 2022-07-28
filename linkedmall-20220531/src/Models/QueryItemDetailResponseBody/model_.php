<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ModelItemExtendedPropModelMapValue;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailResponseBody\model\skuModels;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailResponseBody\model\skuPropertys;
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
    public $canNotBeSoldCode;

    /**
     * @var string
     */
    public $canNotBeSoldMassage;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int[]
     */
    public $categoryIds;

    /**
     * @var bool
     */
    public $centerInventory;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $current;

    /**
     * @var string[]
     */
    public $customizedAttributeMap;

    /**
     * @var string
     */
    public $descOption;

    /**
     * @var string
     */
    public $descPath;

    /**
     * @var string
     */
    public $distributionMallId;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var string
     */
    public $firstPicUrl;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasQuantity;

    /**
     * @var string[][]
     */
    public $iforestProps;

    /**
     * @var int
     */
    public $invoiceType;

    /**
     * @var bool
     */
    public $isCanSell;

    /**
     * @var bool
     */
    public $isSellerPayPostfee;

    /**
     * @var string
     */
    public $itemDesc;

    /**
     * @var ModelItemExtendedPropModelMapValue[]
     */
    public $itemExtendedPropModelMap;

    /**
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
    public $itemName;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $itemTotalSimpleValue;

    /**
     * @var int
     */
    public $itemTotalValue;

    /**
     * @var string[]
     */
    public $lmItemAttributeMap;

    /**
     * @var string
     */
    public $lmItemCategory;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $lmShopId;

    /**
     * @var string
     */
    public $mainPicUrl;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $minPoints;

    /**
     * @var int
     */
    public $minPrice;

    /**
     * @var string[][]
     */
    public $properties;

    /**
     * @var string
     */
    public $prov;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $reservePrice;

    /**
     * @var int
     */
    public $securedTransactions;

    /**
     * @var string
     */
    public $simpleQuantity;

    /**
     * @var skuModels[]
     */
    public $skuModels;

    /**
     * @var skuPropertys[]
     */
    public $skuPropertys;

    /**
     * @var string
     */
    public $thirdPartyItemId;

    /**
     * @var string
     */
    public $thirdPartyName;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $userType;

    /**
     * @var string
     */
    public $videoPicUrl;

    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var string
     */
    public $virtualItemType;
    protected $_name = [
        'auctionStatus'            => 'AuctionStatus',
        'canNotBeSoldCode'         => 'CanNotBeSoldCode',
        'canNotBeSoldMassage'      => 'CanNotBeSoldMassage',
        'categoryId'               => 'CategoryId',
        'categoryIds'              => 'CategoryIds',
        'centerInventory'          => 'CenterInventory',
        'city'                     => 'City',
        'current'                  => 'Current',
        'customizedAttributeMap'   => 'CustomizedAttributeMap',
        'descOption'               => 'DescOption',
        'descPath'                 => 'DescPath',
        'distributionMallId'       => 'DistributionMallId',
        'features'                 => 'Features',
        'firstPicUrl'              => 'FirstPicUrl',
        'gmtModified'              => 'GmtModified',
        'hasQuantity'              => 'HasQuantity',
        'iforestProps'             => 'IforestProps',
        'invoiceType'              => 'InvoiceType',
        'isCanSell'                => 'IsCanSell',
        'isSellerPayPostfee'       => 'IsSellerPayPostfee',
        'itemDesc'                 => 'ItemDesc',
        'itemExtendedPropModelMap' => 'ItemExtendedPropModelMap',
        'itemId'                   => 'ItemId',
        'itemImages'               => 'ItemImages',
        'itemName'                 => 'ItemName',
        'itemTitle'                => 'ItemTitle',
        'itemTotalSimpleValue'     => 'ItemTotalSimpleValue',
        'itemTotalValue'           => 'ItemTotalValue',
        'lmItemAttributeMap'       => 'LmItemAttributeMap',
        'lmItemCategory'           => 'LmItemCategory',
        'lmItemId'                 => 'LmItemId',
        'lmShopId'                 => 'LmShopId',
        'mainPicUrl'               => 'MainPicUrl',
        'message'                  => 'Message',
        'minPoints'                => 'MinPoints',
        'minPrice'                 => 'MinPrice',
        'properties'               => 'Properties',
        'prov'                     => 'Prov',
        'quantity'                 => 'Quantity',
        'reservePrice'             => 'ReservePrice',
        'securedTransactions'      => 'SecuredTransactions',
        'simpleQuantity'           => 'SimpleQuantity',
        'skuModels'                => 'SkuModels',
        'skuPropertys'             => 'SkuPropertys',
        'thirdPartyItemId'         => 'ThirdPartyItemId',
        'thirdPartyName'           => 'ThirdPartyName',
        'type'                     => 'Type',
        'userType'                 => 'UserType',
        'videoPicUrl'              => 'VideoPicUrl',
        'videoUrl'                 => 'VideoUrl',
        'virtualItemType'          => 'VirtualItemType',
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
        if (null !== $this->canNotBeSoldCode) {
            $res['CanNotBeSoldCode'] = $this->canNotBeSoldCode;
        }
        if (null !== $this->canNotBeSoldMassage) {
            $res['CanNotBeSoldMassage'] = $this->canNotBeSoldMassage;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryIds) {
            $res['CategoryIds'] = $this->categoryIds;
        }
        if (null !== $this->centerInventory) {
            $res['CenterInventory'] = $this->centerInventory;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
        }
        if (null !== $this->descOption) {
            $res['DescOption'] = $this->descOption;
        }
        if (null !== $this->descPath) {
            $res['DescPath'] = $this->descPath;
        }
        if (null !== $this->distributionMallId) {
            $res['DistributionMallId'] = $this->distributionMallId;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->firstPicUrl) {
            $res['FirstPicUrl'] = $this->firstPicUrl;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hasQuantity) {
            $res['HasQuantity'] = $this->hasQuantity;
        }
        if (null !== $this->iforestProps) {
            $res['IforestProps'] = $this->iforestProps;
        }
        if (null !== $this->invoiceType) {
            $res['InvoiceType'] = $this->invoiceType;
        }
        if (null !== $this->isCanSell) {
            $res['IsCanSell'] = $this->isCanSell;
        }
        if (null !== $this->isSellerPayPostfee) {
            $res['IsSellerPayPostfee'] = $this->isSellerPayPostfee;
        }
        if (null !== $this->itemDesc) {
            $res['ItemDesc'] = $this->itemDesc;
        }
        if (null !== $this->itemExtendedPropModelMap) {
            $res['ItemExtendedPropModelMap'] = [];
            if (null !== $this->itemExtendedPropModelMap && \is_array($this->itemExtendedPropModelMap)) {
                foreach ($this->itemExtendedPropModelMap as $key => $val) {
                    $res['ItemExtendedPropModelMap'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
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
        if (null !== $this->itemTotalSimpleValue) {
            $res['ItemTotalSimpleValue'] = $this->itemTotalSimpleValue;
        }
        if (null !== $this->itemTotalValue) {
            $res['ItemTotalValue'] = $this->itemTotalValue;
        }
        if (null !== $this->lmItemAttributeMap) {
            $res['LmItemAttributeMap'] = $this->lmItemAttributeMap;
        }
        if (null !== $this->lmItemCategory) {
            $res['LmItemCategory'] = $this->lmItemCategory;
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->minPoints) {
            $res['MinPoints'] = $this->minPoints;
        }
        if (null !== $this->minPrice) {
            $res['MinPrice'] = $this->minPrice;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->prov) {
            $res['Prov'] = $this->prov;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->securedTransactions) {
            $res['SecuredTransactions'] = $this->securedTransactions;
        }
        if (null !== $this->simpleQuantity) {
            $res['SimpleQuantity'] = $this->simpleQuantity;
        }
        if (null !== $this->skuModels) {
            $res['SkuModels'] = [];
            if (null !== $this->skuModels && \is_array($this->skuModels)) {
                $n = 0;
                foreach ($this->skuModels as $item) {
                    $res['SkuModels'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->thirdPartyItemId) {
            $res['ThirdPartyItemId'] = $this->thirdPartyItemId;
        }
        if (null !== $this->thirdPartyName) {
            $res['ThirdPartyName'] = $this->thirdPartyName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->videoPicUrl) {
            $res['VideoPicUrl'] = $this->videoPicUrl;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->virtualItemType) {
            $res['VirtualItemType'] = $this->virtualItemType;
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
        if (isset($map['CanNotBeSoldCode'])) {
            $model->canNotBeSoldCode = $map['CanNotBeSoldCode'];
        }
        if (isset($map['CanNotBeSoldMassage'])) {
            $model->canNotBeSoldMassage = $map['CanNotBeSoldMassage'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryIds'])) {
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = $map['CategoryIds'];
            }
        }
        if (isset($map['CenterInventory'])) {
            $model->centerInventory = $map['CenterInventory'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }
        if (isset($map['DescOption'])) {
            $model->descOption = $map['DescOption'];
        }
        if (isset($map['DescPath'])) {
            $model->descPath = $map['DescPath'];
        }
        if (isset($map['DistributionMallId'])) {
            $model->distributionMallId = $map['DistributionMallId'];
        }
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }
        if (isset($map['FirstPicUrl'])) {
            $model->firstPicUrl = $map['FirstPicUrl'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HasQuantity'])) {
            $model->hasQuantity = $map['HasQuantity'];
        }
        if (isset($map['IforestProps'])) {
            if (!empty($map['IforestProps'])) {
                $model->iforestProps = $map['IforestProps'];
            }
        }
        if (isset($map['InvoiceType'])) {
            $model->invoiceType = $map['InvoiceType'];
        }
        if (isset($map['IsCanSell'])) {
            $model->isCanSell = $map['IsCanSell'];
        }
        if (isset($map['IsSellerPayPostfee'])) {
            $model->isSellerPayPostfee = $map['IsSellerPayPostfee'];
        }
        if (isset($map['ItemDesc'])) {
            $model->itemDesc = $map['ItemDesc'];
        }
        if (isset($map['ItemExtendedPropModelMap'])) {
            $model->itemExtendedPropModelMap = $map['ItemExtendedPropModelMap'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
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
        if (isset($map['ItemTotalSimpleValue'])) {
            $model->itemTotalSimpleValue = $map['ItemTotalSimpleValue'];
        }
        if (isset($map['ItemTotalValue'])) {
            $model->itemTotalValue = $map['ItemTotalValue'];
        }
        if (isset($map['LmItemAttributeMap'])) {
            $model->lmItemAttributeMap = $map['LmItemAttributeMap'];
        }
        if (isset($map['LmItemCategory'])) {
            $model->lmItemCategory = $map['LmItemCategory'];
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MinPoints'])) {
            $model->minPoints = $map['MinPoints'];
        }
        if (isset($map['MinPrice'])) {
            $model->minPrice = $map['MinPrice'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Prov'])) {
            $model->prov = $map['Prov'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['SecuredTransactions'])) {
            $model->securedTransactions = $map['SecuredTransactions'];
        }
        if (isset($map['SimpleQuantity'])) {
            $model->simpleQuantity = $map['SimpleQuantity'];
        }
        if (isset($map['SkuModels'])) {
            if (!empty($map['SkuModels'])) {
                $model->skuModels = [];
                $n                = 0;
                foreach ($map['SkuModels'] as $item) {
                    $model->skuModels[$n++] = null !== $item ? skuModels::fromMap($item) : $item;
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
        if (isset($map['ThirdPartyItemId'])) {
            $model->thirdPartyItemId = $map['ThirdPartyItemId'];
        }
        if (isset($map['ThirdPartyName'])) {
            $model->thirdPartyName = $map['ThirdPartyName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['VideoPicUrl'])) {
            $model->videoPicUrl = $map['VideoPicUrl'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['VirtualItemType'])) {
            $model->virtualItemType = $map['VirtualItemType'];
        }

        return $model;
    }
}
