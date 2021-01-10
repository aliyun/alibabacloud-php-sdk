<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailResponseBody\item\itemImages;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailResponseBody\item\skus;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var int
     */
    public $minPoints;

    /**
     * @var string
     */
    public $descOption;

    /**
     * @var itemImages
     */
    public $itemImages;

    /**
     * @var string
     */
    public $extJson;

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
     * @var mixed[]
     */
    public $customizedAttributeMap;

    /**
     * @var string
     */
    public $iforestPropsJson;

    /**
     * @var string
     */
    public $propertiesJson;

    /**
     * @var string
     */
    public $iforestProps;

    /**
     * @var string
     */
    public $tbShopName;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var int
     */
    public $itemId;

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
    public $categoryId;

    /**
     * @var skus
     */
    public $skus;

    /**
     * @var string
     */
    public $descPath;

    /**
     * @var string
     */
    public $properties;
    protected $_name = [
        'itemTitle'              => 'ItemTitle',
        'minPoints'              => 'MinPoints',
        'descOption'             => 'DescOption',
        'itemImages'             => 'ItemImages',
        'extJson'                => 'ExtJson',
        'isSellerPayPostfee'     => 'IsSellerPayPostfee',
        'lmItemCategory'         => 'LmItemCategory',
        'sellerPayPostfee'       => 'SellerPayPostfee',
        'reservePrice'           => 'ReservePrice',
        'quantity'               => 'Quantity',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
        'iforestPropsJson'       => 'IforestPropsJson',
        'propertiesJson'         => 'PropertiesJson',
        'iforestProps'           => 'IforestProps',
        'tbShopName'             => 'TbShopName',
        'sellerId'               => 'SellerId',
        'lmItemId'               => 'LmItemId',
        'canSell'                => 'CanSell',
        'itemId'                 => 'ItemId',
        'centerInventory'        => 'CenterInventory',
        'totalSoldQuantity'      => 'TotalSoldQuantity',
        'mainPicUrl'             => 'MainPicUrl',
        'minPrice'               => 'MinPrice',
        'isCanSell'              => 'IsCanSell',
        'categoryId'             => 'CategoryId',
        'skus'                   => 'Skus',
        'descPath'               => 'DescPath',
        'properties'             => 'Properties',
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
        if (null !== $this->minPoints) {
            $res['MinPoints'] = $this->minPoints;
        }
        if (null !== $this->descOption) {
            $res['DescOption'] = $this->descOption;
        }
        if (null !== $this->itemImages) {
            $res['ItemImages'] = null !== $this->itemImages ? $this->itemImages->toMap() : null;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
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
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
        }
        if (null !== $this->iforestPropsJson) {
            $res['IforestPropsJson'] = $this->iforestPropsJson;
        }
        if (null !== $this->propertiesJson) {
            $res['PropertiesJson'] = $this->propertiesJson;
        }
        if (null !== $this->iforestProps) {
            $res['IforestProps'] = $this->iforestProps;
        }
        if (null !== $this->tbShopName) {
            $res['TbShopName'] = $this->tbShopName;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
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
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->skus) {
            $res['Skus'] = null !== $this->skus ? $this->skus->toMap() : null;
        }
        if (null !== $this->descPath) {
            $res['DescPath'] = $this->descPath;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
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
        if (isset($map['MinPoints'])) {
            $model->minPoints = $map['MinPoints'];
        }
        if (isset($map['DescOption'])) {
            $model->descOption = $map['DescOption'];
        }
        if (isset($map['ItemImages'])) {
            $model->itemImages = itemImages::fromMap($map['ItemImages']);
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
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
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }
        if (isset($map['IforestPropsJson'])) {
            $model->iforestPropsJson = $map['IforestPropsJson'];
        }
        if (isset($map['PropertiesJson'])) {
            $model->propertiesJson = $map['PropertiesJson'];
        }
        if (isset($map['IforestProps'])) {
            $model->iforestProps = $map['IforestProps'];
        }
        if (isset($map['TbShopName'])) {
            $model->tbShopName = $map['TbShopName'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Skus'])) {
            $model->skus = skus::fromMap($map['Skus']);
        }
        if (isset($map['DescPath'])) {
            $model->descPath = $map['DescPath'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        return $model;
    }
}
