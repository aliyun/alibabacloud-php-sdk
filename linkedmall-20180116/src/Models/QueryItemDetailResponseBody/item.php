<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailResponseBody\item\itemImages;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailResponseBody\item\skus;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

    /**
     * @example 5001****
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example true
     *
     * @var bool
     */
    public $centerInventory;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $customizedAttributeMap;

    /**
     * @example "<p><img align=\"absmiddle\" src=\"https://img.alicdn.com/imgextra/i1/174226****\/O1CN01j0oO3L1SnK7EwwXP4_!!1742262291.jpg\" style=\"max-width: none;width: 750.0px;\">"
     *
     * @var string
     */
    public $descOption;

    /**
     * @example https://img.alicdn.com/imgextra/i3/22066070*****\/O1CN01jCtHkC1ZjO2Q8DWUk_!!0-item_pic.jpg
     *
     * @var string
     */
    public $descPath;

    /**
     * @example {}
     *
     * @var string
     */
    public $extJson;

    /**
     * @example []
     *
     * @var string
     */
    public $iforestProps;

    /**
     * @example {}
     *
     * @var string
     */
    public $iforestPropsJson;

    /**
     * @example true
     *
     * @var bool
     */
    public $isCanSell;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSellerPayPostfee;

    /**
     * @example 64407904****
     *
     * @var int
     */
    public $itemId;

    /**
     * @var itemImages
     */
    public $itemImages;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @example entity
     *
     * @var string
     */
    public $lmItemCategory;

    /**
     * @example 10000043-64818014****
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
     * @example 2990
     *
     * @var int
     */
    public $minPoints;

    /**
     * @example 2990
     *
     * @var int
     */
    public $minPrice;

    /**
     * @example {}
     *
     * @var string
     */
    public $properties;

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
     * @example 4990
     *
     * @var int
     */
    public $reservePrice;

    /**
     * @example 424414****
     *
     * @var int
     */
    public $sellerId;

    /**
     * @example true
     *
     * @var bool
     */
    public $sellerPayPostfee;

    /**
     * @example 0
     *
     * @var int
     */
    public $sellerType;

    /**
     * @var skus
     */
    public $skus;

    /**
     * @var string
     */
    public $tbShopName;

    /**
     * @example 199
     *
     * @var int
     */
    public $totalSoldQuantity;

    /**
     * @example https://img.alicdn.com/imgextra/i3/22066070*****\/O1CN01jCtHkC1ZjO2Q8DWUk_!!0-item_pic.jpg
     *
     * @var string
     */
    public $videoPicUrl;

    /**
     * @example https://img.alicdn.com/imgextra/i3/22066070*****\/O1CN01jCtHkC1ZjO2Q8DWUk_!!0-item_pic.jpg
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'canSell'                => 'CanSell',
        'categoryId'             => 'CategoryId',
        'centerInventory'        => 'CenterInventory',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
        'descOption'             => 'DescOption',
        'descPath'               => 'DescPath',
        'extJson'                => 'ExtJson',
        'iforestProps'           => 'IforestProps',
        'iforestPropsJson'       => 'IforestPropsJson',
        'isCanSell'              => 'IsCanSell',
        'isSellerPayPostfee'     => 'IsSellerPayPostfee',
        'itemId'                 => 'ItemId',
        'itemImages'             => 'ItemImages',
        'itemTitle'              => 'ItemTitle',
        'lmItemCategory'         => 'LmItemCategory',
        'lmItemId'               => 'LmItemId',
        'mainPicUrl'             => 'MainPicUrl',
        'minPoints'              => 'MinPoints',
        'minPrice'               => 'MinPrice',
        'properties'             => 'Properties',
        'propertiesJson'         => 'PropertiesJson',
        'quantity'               => 'Quantity',
        'reservePrice'           => 'ReservePrice',
        'sellerId'               => 'SellerId',
        'sellerPayPostfee'       => 'SellerPayPostfee',
        'sellerType'             => 'SellerType',
        'skus'                   => 'Skus',
        'tbShopName'             => 'TbShopName',
        'totalSoldQuantity'      => 'TotalSoldQuantity',
        'videoPicUrl'            => 'VideoPicUrl',
        'videoUrl'               => 'VideoUrl',
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
        if (null !== $this->centerInventory) {
            $res['CenterInventory'] = $this->centerInventory;
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
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->iforestProps) {
            $res['IforestProps'] = $this->iforestProps;
        }
        if (null !== $this->iforestPropsJson) {
            $res['IforestPropsJson'] = $this->iforestPropsJson;
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
            $res['ItemImages'] = null !== $this->itemImages ? $this->itemImages->toMap() : null;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
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
        if (null !== $this->minPoints) {
            $res['MinPoints'] = $this->minPoints;
        }
        if (null !== $this->minPrice) {
            $res['MinPrice'] = $this->minPrice;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
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
        if (null !== $this->sellerPayPostfee) {
            $res['SellerPayPostfee'] = $this->sellerPayPostfee;
        }
        if (null !== $this->sellerType) {
            $res['SellerType'] = $this->sellerType;
        }
        if (null !== $this->skus) {
            $res['Skus'] = null !== $this->skus ? $this->skus->toMap() : null;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->totalSoldQuantity) {
            $res['TotalSoldQuantity'] = $this->totalSoldQuantity;
        }
        if (null !== $this->videoPicUrl) {
            $res['VideoPicUrl'] = $this->videoPicUrl;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CenterInventory'])) {
            $model->centerInventory = $map['CenterInventory'];
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
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['IforestProps'])) {
            $model->iforestProps = $map['IforestProps'];
        }
        if (isset($map['IforestPropsJson'])) {
            $model->iforestPropsJson = $map['IforestPropsJson'];
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
            $model->itemImages = itemImages::fromMap($map['ItemImages']);
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
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
        if (isset($map['MinPoints'])) {
            $model->minPoints = $map['MinPoints'];
        }
        if (isset($map['MinPrice'])) {
            $model->minPrice = $map['MinPrice'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
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
        if (isset($map['SellerPayPostfee'])) {
            $model->sellerPayPostfee = $map['SellerPayPostfee'];
        }
        if (isset($map['SellerType'])) {
            $model->sellerType = $map['SellerType'];
        }
        if (isset($map['Skus'])) {
            $model->skus = skus::fromMap($map['Skus']);
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['TotalSoldQuantity'])) {
            $model->totalSoldQuantity = $map['TotalSoldQuantity'];
        }
        if (isset($map['VideoPicUrl'])) {
            $model->videoPicUrl = $map['VideoPicUrl'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
