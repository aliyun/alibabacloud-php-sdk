<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\BatchInsertItemsRequest;

use AlibabaCloud\Tea\Model;

class itemInfo extends Model
{
    /**
     * @var int
     */
    public $actionPrice;

    /**
     * @var bool
     */
    public $bePromotion;

    /**
     * @var bool
     */
    public $beSourceCode;

    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $companyId;

    /**
     * @var string
     */
    public $customizeFeatureA;

    /**
     * @var string
     */
    public $customizeFeatureB;

    /**
     * @var string
     */
    public $customizeFeatureC;

    /**
     * @var string
     */
    public $customizeFeatureD;

    /**
     * @var string
     */
    public $customizeFeatureE;

    /**
     * @var string
     */
    public $customizeFeatureF;

    /**
     * @var string
     */
    public $customizeFeatureG;

    /**
     * @var string
     */
    public $customizeFeatureH;

    /**
     * @var string
     */
    public $customizeFeatureI;

    /**
     * @var string
     */
    public $customizeFeatureJ;

    /**
     * @var string
     */
    public $energyEfficiency;

    /**
     * @var string
     */
    public $extraAttribute;

    /**
     * @var string
     */
    public $forestFirstId;

    /**
     * @var string
     */
    public $forestSecondId;

    /**
     * @var string
     */
    public $itemBarCode;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var int
     */
    public $itemInfoIndex;

    /**
     * @var string
     */
    public $itemQrCode;

    /**
     * @var string
     */
    public $itemShortTitle;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var int
     */
    public $memberPrice;

    /**
     * @var string
     */
    public $modelNumber;

    /**
     * @var string
     */
    public $optionGroups;

    /**
     * @var int
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var string
     */
    public $productionPlace;

    /**
     * @var string
     */
    public $promotionEnd;

    /**
     * @var string
     */
    public $promotionReason;

    /**
     * @var string
     */
    public $promotionStart;

    /**
     * @var string
     */
    public $promotionText;

    /**
     * @var string
     */
    public $rank;

    /**
     * @var string
     */
    public $saleSpec;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $storeId;

    /**
     * @var int
     */
    public $suggestPrice;
    protected $_name = [
        'actionPrice'       => 'ActionPrice',
        'bePromotion'       => 'BePromotion',
        'beSourceCode'      => 'BeSourceCode',
        'brandName'         => 'BrandName',
        'categoryName'      => 'CategoryName',
        'companyId'         => 'CompanyId',
        'customizeFeatureA' => 'CustomizeFeatureA',
        'customizeFeatureB' => 'CustomizeFeatureB',
        'customizeFeatureC' => 'CustomizeFeatureC',
        'customizeFeatureD' => 'CustomizeFeatureD',
        'customizeFeatureE' => 'CustomizeFeatureE',
        'customizeFeatureF' => 'CustomizeFeatureF',
        'customizeFeatureG' => 'CustomizeFeatureG',
        'customizeFeatureH' => 'CustomizeFeatureH',
        'customizeFeatureI' => 'CustomizeFeatureI',
        'customizeFeatureJ' => 'CustomizeFeatureJ',
        'energyEfficiency'  => 'EnergyEfficiency',
        'extraAttribute'    => 'ExtraAttribute',
        'forestFirstId'     => 'ForestFirstId',
        'forestSecondId'    => 'ForestSecondId',
        'itemBarCode'       => 'ItemBarCode',
        'itemId'            => 'ItemId',
        'itemInfoIndex'     => 'ItemInfoIndex',
        'itemQrCode'        => 'ItemQrCode',
        'itemShortTitle'    => 'ItemShortTitle',
        'itemTitle'         => 'ItemTitle',
        'memberPrice'       => 'MemberPrice',
        'modelNumber'       => 'ModelNumber',
        'optionGroups'      => 'OptionGroups',
        'originalPrice'     => 'OriginalPrice',
        'priceUnit'         => 'PriceUnit',
        'productionPlace'   => 'ProductionPlace',
        'promotionEnd'      => 'PromotionEnd',
        'promotionReason'   => 'PromotionReason',
        'promotionStart'    => 'PromotionStart',
        'promotionText'     => 'PromotionText',
        'rank'              => 'Rank',
        'saleSpec'          => 'SaleSpec',
        'skuId'             => 'SkuId',
        'sourceCode'        => 'SourceCode',
        'storeId'           => 'StoreId',
        'suggestPrice'      => 'SuggestPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionPrice) {
            $res['ActionPrice'] = $this->actionPrice;
        }
        if (null !== $this->bePromotion) {
            $res['BePromotion'] = $this->bePromotion;
        }
        if (null !== $this->beSourceCode) {
            $res['BeSourceCode'] = $this->beSourceCode;
        }
        if (null !== $this->brandName) {
            $res['BrandName'] = $this->brandName;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }
        if (null !== $this->customizeFeatureA) {
            $res['CustomizeFeatureA'] = $this->customizeFeatureA;
        }
        if (null !== $this->customizeFeatureB) {
            $res['CustomizeFeatureB'] = $this->customizeFeatureB;
        }
        if (null !== $this->customizeFeatureC) {
            $res['CustomizeFeatureC'] = $this->customizeFeatureC;
        }
        if (null !== $this->customizeFeatureD) {
            $res['CustomizeFeatureD'] = $this->customizeFeatureD;
        }
        if (null !== $this->customizeFeatureE) {
            $res['CustomizeFeatureE'] = $this->customizeFeatureE;
        }
        if (null !== $this->customizeFeatureF) {
            $res['CustomizeFeatureF'] = $this->customizeFeatureF;
        }
        if (null !== $this->customizeFeatureG) {
            $res['CustomizeFeatureG'] = $this->customizeFeatureG;
        }
        if (null !== $this->customizeFeatureH) {
            $res['CustomizeFeatureH'] = $this->customizeFeatureH;
        }
        if (null !== $this->customizeFeatureI) {
            $res['CustomizeFeatureI'] = $this->customizeFeatureI;
        }
        if (null !== $this->customizeFeatureJ) {
            $res['CustomizeFeatureJ'] = $this->customizeFeatureJ;
        }
        if (null !== $this->energyEfficiency) {
            $res['EnergyEfficiency'] = $this->energyEfficiency;
        }
        if (null !== $this->extraAttribute) {
            $res['ExtraAttribute'] = $this->extraAttribute;
        }
        if (null !== $this->forestFirstId) {
            $res['ForestFirstId'] = $this->forestFirstId;
        }
        if (null !== $this->forestSecondId) {
            $res['ForestSecondId'] = $this->forestSecondId;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemInfoIndex) {
            $res['ItemInfoIndex'] = $this->itemInfoIndex;
        }
        if (null !== $this->itemQrCode) {
            $res['ItemQrCode'] = $this->itemQrCode;
        }
        if (null !== $this->itemShortTitle) {
            $res['ItemShortTitle'] = $this->itemShortTitle;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->memberPrice) {
            $res['MemberPrice'] = $this->memberPrice;
        }
        if (null !== $this->modelNumber) {
            $res['ModelNumber'] = $this->modelNumber;
        }
        if (null !== $this->optionGroups) {
            $res['OptionGroups'] = $this->optionGroups;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->productionPlace) {
            $res['ProductionPlace'] = $this->productionPlace;
        }
        if (null !== $this->promotionEnd) {
            $res['PromotionEnd'] = $this->promotionEnd;
        }
        if (null !== $this->promotionReason) {
            $res['PromotionReason'] = $this->promotionReason;
        }
        if (null !== $this->promotionStart) {
            $res['PromotionStart'] = $this->promotionStart;
        }
        if (null !== $this->promotionText) {
            $res['PromotionText'] = $this->promotionText;
        }
        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }
        if (null !== $this->saleSpec) {
            $res['SaleSpec'] = $this->saleSpec;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->suggestPrice) {
            $res['SuggestPrice'] = $this->suggestPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionPrice'])) {
            $model->actionPrice = $map['ActionPrice'];
        }
        if (isset($map['BePromotion'])) {
            $model->bePromotion = $map['BePromotion'];
        }
        if (isset($map['BeSourceCode'])) {
            $model->beSourceCode = $map['BeSourceCode'];
        }
        if (isset($map['BrandName'])) {
            $model->brandName = $map['BrandName'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }
        if (isset($map['CustomizeFeatureA'])) {
            $model->customizeFeatureA = $map['CustomizeFeatureA'];
        }
        if (isset($map['CustomizeFeatureB'])) {
            $model->customizeFeatureB = $map['CustomizeFeatureB'];
        }
        if (isset($map['CustomizeFeatureC'])) {
            $model->customizeFeatureC = $map['CustomizeFeatureC'];
        }
        if (isset($map['CustomizeFeatureD'])) {
            $model->customizeFeatureD = $map['CustomizeFeatureD'];
        }
        if (isset($map['CustomizeFeatureE'])) {
            $model->customizeFeatureE = $map['CustomizeFeatureE'];
        }
        if (isset($map['CustomizeFeatureF'])) {
            $model->customizeFeatureF = $map['CustomizeFeatureF'];
        }
        if (isset($map['CustomizeFeatureG'])) {
            $model->customizeFeatureG = $map['CustomizeFeatureG'];
        }
        if (isset($map['CustomizeFeatureH'])) {
            $model->customizeFeatureH = $map['CustomizeFeatureH'];
        }
        if (isset($map['CustomizeFeatureI'])) {
            $model->customizeFeatureI = $map['CustomizeFeatureI'];
        }
        if (isset($map['CustomizeFeatureJ'])) {
            $model->customizeFeatureJ = $map['CustomizeFeatureJ'];
        }
        if (isset($map['EnergyEfficiency'])) {
            $model->energyEfficiency = $map['EnergyEfficiency'];
        }
        if (isset($map['ExtraAttribute'])) {
            $model->extraAttribute = $map['ExtraAttribute'];
        }
        if (isset($map['ForestFirstId'])) {
            $model->forestFirstId = $map['ForestFirstId'];
        }
        if (isset($map['ForestSecondId'])) {
            $model->forestSecondId = $map['ForestSecondId'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemInfoIndex'])) {
            $model->itemInfoIndex = $map['ItemInfoIndex'];
        }
        if (isset($map['ItemQrCode'])) {
            $model->itemQrCode = $map['ItemQrCode'];
        }
        if (isset($map['ItemShortTitle'])) {
            $model->itemShortTitle = $map['ItemShortTitle'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['MemberPrice'])) {
            $model->memberPrice = $map['MemberPrice'];
        }
        if (isset($map['ModelNumber'])) {
            $model->modelNumber = $map['ModelNumber'];
        }
        if (isset($map['OptionGroups'])) {
            $model->optionGroups = $map['OptionGroups'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['ProductionPlace'])) {
            $model->productionPlace = $map['ProductionPlace'];
        }
        if (isset($map['PromotionEnd'])) {
            $model->promotionEnd = $map['PromotionEnd'];
        }
        if (isset($map['PromotionReason'])) {
            $model->promotionReason = $map['PromotionReason'];
        }
        if (isset($map['PromotionStart'])) {
            $model->promotionStart = $map['PromotionStart'];
        }
        if (isset($map['PromotionText'])) {
            $model->promotionText = $map['PromotionText'];
        }
        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }
        if (isset($map['SaleSpec'])) {
            $model->saleSpec = $map['SaleSpec'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['SuggestPrice'])) {
            $model->suggestPrice = $map['SuggestPrice'];
        }

        return $model;
    }
}
