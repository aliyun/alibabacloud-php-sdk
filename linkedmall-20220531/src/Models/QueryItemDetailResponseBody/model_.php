<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailResponseBody\model\skuModels;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailResponseBody\model\skuPropertys;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $canNotBeSoldCode;

    /**
     * @var string
     */
    public $canNotBeSoldMessage;

    /**
     * @example 50011982
     *
     * @var int
     */
    public $categoryId;

    /**
     * @var int[]
     */
    public $categoryIds;

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
     * @example {}
     *
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
     * @example http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/pic/edf8d848fa80b1cac055c94652f*****.jpg
     *
     * @var string
     */
    public $firstPicUrl;

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
     * @example 65******0310
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
     * @example entity
     *
     * @var string
     */
    public $lmItemCategory;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $mainPicUrl;

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
    public $reservedPrice;

    /**
     * @var string
     */
    public $simpleQuantity;

    /**
     * @description sku list
     *
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
     * @example http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/pic/edf8d848fa80b1cac055c94652*****.jpg
     *
     * @var string
     */
    public $videoPicUrl;

    /**
     * @example http://yicaivodcache.oss-cn-shanghai.aliyuncs.com/vms-test/vms3/video/edf8d848fa80b1cac055c94652******.mp4
     *
     * @var string
     */
    public $videoUrl;

    /**
     * @var string
     */
    public $virtualItemType;
    protected $_name = [
        'canNotBeSoldCode'       => 'CanNotBeSoldCode',
        'canNotBeSoldMessage'    => 'CanNotBeSoldMessage',
        'categoryId'             => 'CategoryId',
        'categoryIds'            => 'CategoryIds',
        'city'                   => 'City',
        'current'                => 'Current',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
        'descOption'             => 'DescOption',
        'descPath'               => 'DescPath',
        'distributionMallId'     => 'DistributionMallId',
        'features'               => 'Features',
        'firstPicUrl'            => 'FirstPicUrl',
        'hasQuantity'            => 'HasQuantity',
        'iforestProps'           => 'IforestProps',
        'invoiceType'            => 'InvoiceType',
        'isCanSell'              => 'IsCanSell',
        'isSellerPayPostfee'     => 'IsSellerPayPostfee',
        'itemId'                 => 'ItemId',
        'itemImages'             => 'ItemImages',
        'itemTitle'              => 'ItemTitle',
        'itemTotalSimpleValue'   => 'ItemTotalSimpleValue',
        'itemTotalValue'         => 'ItemTotalValue',
        'lmItemAttributeMap'     => 'LmItemAttributeMap',
        'lmItemCategory'         => 'LmItemCategory',
        'lmItemId'               => 'LmItemId',
        'mainPicUrl'             => 'MainPicUrl',
        'minPrice'               => 'MinPrice',
        'properties'             => 'Properties',
        'prov'                   => 'Prov',
        'quantity'               => 'Quantity',
        'reservedPrice'          => 'ReservedPrice',
        'simpleQuantity'         => 'SimpleQuantity',
        'skuModels'              => 'SkuModels',
        'skuPropertys'           => 'SkuPropertys',
        'thirdPartyItemId'       => 'ThirdPartyItemId',
        'thirdPartyName'         => 'ThirdPartyName',
        'videoPicUrl'            => 'VideoPicUrl',
        'videoUrl'               => 'VideoUrl',
        'virtualItemType'        => 'VirtualItemType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canNotBeSoldCode) {
            $res['CanNotBeSoldCode'] = $this->canNotBeSoldCode;
        }
        if (null !== $this->canNotBeSoldMessage) {
            $res['CanNotBeSoldMessage'] = $this->canNotBeSoldMessage;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryIds) {
            $res['CategoryIds'] = $this->categoryIds;
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
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemImages) {
            $res['ItemImages'] = $this->itemImages;
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
        if (null !== $this->mainPicUrl) {
            $res['MainPicUrl'] = $this->mainPicUrl;
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
        if (null !== $this->reservedPrice) {
            $res['ReservedPrice'] = $this->reservedPrice;
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
        if (isset($map['CanNotBeSoldCode'])) {
            $model->canNotBeSoldCode = $map['CanNotBeSoldCode'];
        }
        if (isset($map['CanNotBeSoldMessage'])) {
            $model->canNotBeSoldMessage = $map['CanNotBeSoldMessage'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryIds'])) {
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = $map['CategoryIds'];
            }
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
        if (isset($map['MainPicUrl'])) {
            $model->mainPicUrl = $map['MainPicUrl'];
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
        if (isset($map['ReservedPrice'])) {
            $model->reservedPrice = $map['ReservedPrice'];
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
