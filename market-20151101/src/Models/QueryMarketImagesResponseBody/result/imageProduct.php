<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponseBody\result;

use AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponseBody\result\imageProduct\images;
use AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponseBody\result\imageProduct\priceInfo;
use AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponseBody\result\imageProduct\quota;
use AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponseBody\result\imageProduct\skuCodes;
use AlibabaCloud\Tea\Model;

class imageProduct extends Model
{
    /**
     * @var string
     */
    public $agreementUrl;

    /**
     * @var string
     */
    public $baseSystem;

    /**
     * @var string
     */
    public $buyUrl;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var int
     */
    public $createdOn;

    /**
     * @var string
     */
    public $detailUrl;

    /**
     * @var string
     */
    public $imageProductCode;

    /**
     * @var images
     */
    public $images;

    /**
     * @var int
     */
    public $osBit;

    /**
     * @var string
     */
    public $osKind;

    /**
     * @var string
     */
    public $pictureUrl;

    /**
     * @var priceInfo
     */
    public $priceInfo;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var quota
     */
    public $quota;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $shortDescription;

    /**
     * @var skuCodes
     */
    public $skuCodes;

    /**
     * @var string
     */
    public $smallPicUrl;

    /**
     * @var string
     */
    public $storeUrl;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var bool
     */
    public $supportIO;

    /**
     * @var int
     */
    public $userCount;
    protected $_name = [
        'agreementUrl'     => 'AgreementUrl',
        'baseSystem'       => 'BaseSystem',
        'buyUrl'           => 'BuyUrl',
        'categoryName'     => 'CategoryName',
        'createdOn'        => 'CreatedOn',
        'detailUrl'        => 'DetailUrl',
        'imageProductCode' => 'ImageProductCode',
        'images'           => 'Images',
        'osBit'            => 'OsBit',
        'osKind'           => 'OsKind',
        'pictureUrl'       => 'PictureUrl',
        'priceInfo'        => 'PriceInfo',
        'productName'      => 'ProductName',
        'quota'            => 'Quota',
        'score'            => 'Score',
        'shortDescription' => 'ShortDescription',
        'skuCodes'         => 'SkuCodes',
        'smallPicUrl'      => 'SmallPicUrl',
        'storeUrl'         => 'StoreUrl',
        'supplierName'     => 'SupplierName',
        'supportIO'        => 'SupportIO',
        'userCount'        => 'UserCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementUrl) {
            $res['AgreementUrl'] = $this->agreementUrl;
        }
        if (null !== $this->baseSystem) {
            $res['BaseSystem'] = $this->baseSystem;
        }
        if (null !== $this->buyUrl) {
            $res['BuyUrl'] = $this->buyUrl;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->createdOn) {
            $res['CreatedOn'] = $this->createdOn;
        }
        if (null !== $this->detailUrl) {
            $res['DetailUrl'] = $this->detailUrl;
        }
        if (null !== $this->imageProductCode) {
            $res['ImageProductCode'] = $this->imageProductCode;
        }
        if (null !== $this->images) {
            $res['Images'] = null !== $this->images ? $this->images->toMap() : null;
        }
        if (null !== $this->osBit) {
            $res['OsBit'] = $this->osBit;
        }
        if (null !== $this->osKind) {
            $res['OsKind'] = $this->osKind;
        }
        if (null !== $this->pictureUrl) {
            $res['PictureUrl'] = $this->pictureUrl;
        }
        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = null !== $this->priceInfo ? $this->priceInfo->toMap() : null;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->shortDescription) {
            $res['ShortDescription'] = $this->shortDescription;
        }
        if (null !== $this->skuCodes) {
            $res['SkuCodes'] = null !== $this->skuCodes ? $this->skuCodes->toMap() : null;
        }
        if (null !== $this->smallPicUrl) {
            $res['SmallPicUrl'] = $this->smallPicUrl;
        }
        if (null !== $this->storeUrl) {
            $res['StoreUrl'] = $this->storeUrl;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->supportIO) {
            $res['SupportIO'] = $this->supportIO;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageProduct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementUrl'])) {
            $model->agreementUrl = $map['AgreementUrl'];
        }
        if (isset($map['BaseSystem'])) {
            $model->baseSystem = $map['BaseSystem'];
        }
        if (isset($map['BuyUrl'])) {
            $model->buyUrl = $map['BuyUrl'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CreatedOn'])) {
            $model->createdOn = $map['CreatedOn'];
        }
        if (isset($map['DetailUrl'])) {
            $model->detailUrl = $map['DetailUrl'];
        }
        if (isset($map['ImageProductCode'])) {
            $model->imageProductCode = $map['ImageProductCode'];
        }
        if (isset($map['Images'])) {
            $model->images = images::fromMap($map['Images']);
        }
        if (isset($map['OsBit'])) {
            $model->osBit = $map['OsBit'];
        }
        if (isset($map['OsKind'])) {
            $model->osKind = $map['OsKind'];
        }
        if (isset($map['PictureUrl'])) {
            $model->pictureUrl = $map['PictureUrl'];
        }
        if (isset($map['PriceInfo'])) {
            $model->priceInfo = priceInfo::fromMap($map['PriceInfo']);
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ShortDescription'])) {
            $model->shortDescription = $map['ShortDescription'];
        }
        if (isset($map['SkuCodes'])) {
            $model->skuCodes = skuCodes::fromMap($map['SkuCodes']);
        }
        if (isset($map['SmallPicUrl'])) {
            $model->smallPicUrl = $map['SmallPicUrl'];
        }
        if (isset($map['StoreUrl'])) {
            $model->storeUrl = $map['StoreUrl'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['SupportIO'])) {
            $model->supportIO = $map['SupportIO'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        return $model;
    }
}
