<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailTeaResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailTeaResponseBody\item\iforestProps;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailTeaResponseBody\item\itemImages;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailTeaResponseBody\item\skus;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var bool
     */
    public $centerInventory;

    /**
     * @var mixed[]
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
    public $extJson;

    /**
     * @var iforestProps
     */
    public $iforestProps;

    /**
     * @var bool
     */
    public $isCanSell;

    /**
     * @var bool
     */
    public $isSellerPayPostfee;

    /**
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
    public $minPoints;

    /**
     * @var int
     */
    public $minPrice;

    /**
     * @var mixed[]
     */
    public $properties;

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
    public $sellerId;

    /**
     * @var bool
     */
    public $sellerPayPostfee;

    /**
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
     * @var int
     */
    public $totalSoldQuantity;

    /**
     * @var string
     */
    public $videoPicUrl;

    /**
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
            $res['IforestProps'] = null !== $this->iforestProps ? $this->iforestProps->toMap() : null;
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
            $model->iforestProps = iforestProps::fromMap($map['IforestProps']);
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
