<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\BatchInsertItemsRequest;

use AlibabaCloud\Tea\Model;

class itemInfo extends Model
{
    /**
     * @example 500
     *
     * @var int
     */
    public $actionPrice;

    /**
     * @example false
     *
     * @var bool
     */
    public $beClearance;

    /**
     * @example true
     *
     * @var bool
     */
    public $beMember;

    /**
     * @example true
     *
     * @var bool
     */
    public $bePromotion;

    /**
     * @example true
     *
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
    public $customizeFeatureK;

    /**
     * @var string
     */
    public $customizeFeatureL;

    /**
     * @var string
     */
    public $customizeFeatureM;

    /**
     * @var string
     */
    public $customizeFeatureN;

    /**
     * @var string
     */
    public $customizeFeatureO;

    /**
     * @var string
     */
    public $customizeFeatureP;

    /**
     * @var string
     */
    public $customizeFeatureQ;

    /**
     * @var string
     */
    public $customizeFeatureR;

    /**
     * @var string
     */
    public $customizeFeatureS;

    /**
     * @var string
     */
    public $customizeFeatureT;

    /**
     * @var string
     */
    public $customizeFeatureU;

    /**
     * @var string
     */
    public $customizeFeatureV;

    /**
     * @var string
     */
    public $customizeFeatureW;

    /**
     * @example 345678
     *
     * @var string
     */
    public $customizeFeatureX;

    /**
     * @example YYY
     *
     * @var string
     */
    public $customizeFeatureY;

    /**
     * @example ZZZZ
     *
     * @var string
     */
    public $customizeFeatureZ;

    /**
     * @var string
     */
    public $energyEfficiency;

    /**
     * @var string
     */
    public $forestFirstId;

    /**
     * @var string
     */
    public $forestSecondId;

    /**
     * @example OUT_OF_STOCK
     *
     * @var string
     */
    public $inventoryStatus;

    /**
     * @example 690560583****
     *
     * @var string
     */
    public $itemBarCode;

    /**
     * @example 1234567
     *
     * @var string
     */
    public $itemId;

    /**
     * @example 1
     *
     * @var int
     */
    public $itemInfoIndex;

    /**
     * @example http://m.taobao.com/xxx.html
     *
     * @var string
     */
    public $itemPicUrl;

    /**
     * @example http://m.taobao.com/xxx.html
     *
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
     * @var string
     */
    public $manufacturer;

    /**
     * @var string
     */
    public $material;

    /**
     * @example 800
     *
     * @var int
     */
    public $memberPrice;

    /**
     * @example 330
     *
     * @var string
     */
    public $modelNumber;

    /**
     * @example 1000
     *
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
     * @example 2020-02-01T00:00:00Z
     *
     * @var string
     */
    public $promotionEnd;

    /**
     * @var string
     */
    public $promotionReason;

    /**
     * @example 2020-02-10T00:00:00Z
     *
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
     * @example 1000
     *
     * @var int
     */
    public $salesPrice;

    /**
     * @example 1234567
     *
     * @var string
     */
    public $skuId;

    /**
     * @example 1234567
     *
     * @var string
     */
    public $sourceCode;

    /**
     * @example 600
     *
     * @var int
     */
    public $suggestPrice;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var string
     */
    public $taxFee;

    /**
     * @example 23452
     *
     * @var string
     */
    public $templateSceneId;
    protected $_name = [
        'actionPrice'       => 'ActionPrice',
        'beClearance'       => 'BeClearance',
        'beMember'          => 'BeMember',
        'bePromotion'       => 'BePromotion',
        'beSourceCode'      => 'BeSourceCode',
        'brandName'         => 'BrandName',
        'categoryName'      => 'CategoryName',
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
        'customizeFeatureK' => 'CustomizeFeatureK',
        'customizeFeatureL' => 'CustomizeFeatureL',
        'customizeFeatureM' => 'CustomizeFeatureM',
        'customizeFeatureN' => 'CustomizeFeatureN',
        'customizeFeatureO' => 'CustomizeFeatureO',
        'customizeFeatureP' => 'CustomizeFeatureP',
        'customizeFeatureQ' => 'CustomizeFeatureQ',
        'customizeFeatureR' => 'CustomizeFeatureR',
        'customizeFeatureS' => 'CustomizeFeatureS',
        'customizeFeatureT' => 'CustomizeFeatureT',
        'customizeFeatureU' => 'CustomizeFeatureU',
        'customizeFeatureV' => 'CustomizeFeatureV',
        'customizeFeatureW' => 'CustomizeFeatureW',
        'customizeFeatureX' => 'CustomizeFeatureX',
        'customizeFeatureY' => 'CustomizeFeatureY',
        'customizeFeatureZ' => 'CustomizeFeatureZ',
        'energyEfficiency'  => 'EnergyEfficiency',
        'forestFirstId'     => 'ForestFirstId',
        'forestSecondId'    => 'ForestSecondId',
        'inventoryStatus'   => 'InventoryStatus',
        'itemBarCode'       => 'ItemBarCode',
        'itemId'            => 'ItemId',
        'itemInfoIndex'     => 'ItemInfoIndex',
        'itemPicUrl'        => 'ItemPicUrl',
        'itemQrCode'        => 'ItemQrCode',
        'itemShortTitle'    => 'ItemShortTitle',
        'itemTitle'         => 'ItemTitle',
        'manufacturer'      => 'Manufacturer',
        'material'          => 'Material',
        'memberPrice'       => 'MemberPrice',
        'modelNumber'       => 'ModelNumber',
        'originalPrice'     => 'OriginalPrice',
        'priceUnit'         => 'PriceUnit',
        'productionPlace'   => 'ProductionPlace',
        'promotionEnd'      => 'PromotionEnd',
        'promotionReason'   => 'PromotionReason',
        'promotionStart'    => 'PromotionStart',
        'promotionText'     => 'PromotionText',
        'rank'              => 'Rank',
        'saleSpec'          => 'SaleSpec',
        'salesPrice'        => 'SalesPrice',
        'skuId'             => 'SkuId',
        'sourceCode'        => 'SourceCode',
        'suggestPrice'      => 'SuggestPrice',
        'supplierName'      => 'SupplierName',
        'taxFee'            => 'TaxFee',
        'templateSceneId'   => 'TemplateSceneId',
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
        if (null !== $this->beClearance) {
            $res['BeClearance'] = $this->beClearance;
        }
        if (null !== $this->beMember) {
            $res['BeMember'] = $this->beMember;
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
        if (null !== $this->customizeFeatureK) {
            $res['CustomizeFeatureK'] = $this->customizeFeatureK;
        }
        if (null !== $this->customizeFeatureL) {
            $res['CustomizeFeatureL'] = $this->customizeFeatureL;
        }
        if (null !== $this->customizeFeatureM) {
            $res['CustomizeFeatureM'] = $this->customizeFeatureM;
        }
        if (null !== $this->customizeFeatureN) {
            $res['CustomizeFeatureN'] = $this->customizeFeatureN;
        }
        if (null !== $this->customizeFeatureO) {
            $res['CustomizeFeatureO'] = $this->customizeFeatureO;
        }
        if (null !== $this->customizeFeatureP) {
            $res['CustomizeFeatureP'] = $this->customizeFeatureP;
        }
        if (null !== $this->customizeFeatureQ) {
            $res['CustomizeFeatureQ'] = $this->customizeFeatureQ;
        }
        if (null !== $this->customizeFeatureR) {
            $res['CustomizeFeatureR'] = $this->customizeFeatureR;
        }
        if (null !== $this->customizeFeatureS) {
            $res['CustomizeFeatureS'] = $this->customizeFeatureS;
        }
        if (null !== $this->customizeFeatureT) {
            $res['CustomizeFeatureT'] = $this->customizeFeatureT;
        }
        if (null !== $this->customizeFeatureU) {
            $res['CustomizeFeatureU'] = $this->customizeFeatureU;
        }
        if (null !== $this->customizeFeatureV) {
            $res['CustomizeFeatureV'] = $this->customizeFeatureV;
        }
        if (null !== $this->customizeFeatureW) {
            $res['CustomizeFeatureW'] = $this->customizeFeatureW;
        }
        if (null !== $this->customizeFeatureX) {
            $res['CustomizeFeatureX'] = $this->customizeFeatureX;
        }
        if (null !== $this->customizeFeatureY) {
            $res['CustomizeFeatureY'] = $this->customizeFeatureY;
        }
        if (null !== $this->customizeFeatureZ) {
            $res['CustomizeFeatureZ'] = $this->customizeFeatureZ;
        }
        if (null !== $this->energyEfficiency) {
            $res['EnergyEfficiency'] = $this->energyEfficiency;
        }
        if (null !== $this->forestFirstId) {
            $res['ForestFirstId'] = $this->forestFirstId;
        }
        if (null !== $this->forestSecondId) {
            $res['ForestSecondId'] = $this->forestSecondId;
        }
        if (null !== $this->inventoryStatus) {
            $res['InventoryStatus'] = $this->inventoryStatus;
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
        if (null !== $this->itemPicUrl) {
            $res['ItemPicUrl'] = $this->itemPicUrl;
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
        if (null !== $this->manufacturer) {
            $res['Manufacturer'] = $this->manufacturer;
        }
        if (null !== $this->material) {
            $res['Material'] = $this->material;
        }
        if (null !== $this->memberPrice) {
            $res['MemberPrice'] = $this->memberPrice;
        }
        if (null !== $this->modelNumber) {
            $res['ModelNumber'] = $this->modelNumber;
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
        if (null !== $this->salesPrice) {
            $res['SalesPrice'] = $this->salesPrice;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }
        if (null !== $this->suggestPrice) {
            $res['SuggestPrice'] = $this->suggestPrice;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->taxFee) {
            $res['TaxFee'] = $this->taxFee;
        }
        if (null !== $this->templateSceneId) {
            $res['TemplateSceneId'] = $this->templateSceneId;
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
        if (isset($map['BeClearance'])) {
            $model->beClearance = $map['BeClearance'];
        }
        if (isset($map['BeMember'])) {
            $model->beMember = $map['BeMember'];
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
        if (isset($map['CustomizeFeatureK'])) {
            $model->customizeFeatureK = $map['CustomizeFeatureK'];
        }
        if (isset($map['CustomizeFeatureL'])) {
            $model->customizeFeatureL = $map['CustomizeFeatureL'];
        }
        if (isset($map['CustomizeFeatureM'])) {
            $model->customizeFeatureM = $map['CustomizeFeatureM'];
        }
        if (isset($map['CustomizeFeatureN'])) {
            $model->customizeFeatureN = $map['CustomizeFeatureN'];
        }
        if (isset($map['CustomizeFeatureO'])) {
            $model->customizeFeatureO = $map['CustomizeFeatureO'];
        }
        if (isset($map['CustomizeFeatureP'])) {
            $model->customizeFeatureP = $map['CustomizeFeatureP'];
        }
        if (isset($map['CustomizeFeatureQ'])) {
            $model->customizeFeatureQ = $map['CustomizeFeatureQ'];
        }
        if (isset($map['CustomizeFeatureR'])) {
            $model->customizeFeatureR = $map['CustomizeFeatureR'];
        }
        if (isset($map['CustomizeFeatureS'])) {
            $model->customizeFeatureS = $map['CustomizeFeatureS'];
        }
        if (isset($map['CustomizeFeatureT'])) {
            $model->customizeFeatureT = $map['CustomizeFeatureT'];
        }
        if (isset($map['CustomizeFeatureU'])) {
            $model->customizeFeatureU = $map['CustomizeFeatureU'];
        }
        if (isset($map['CustomizeFeatureV'])) {
            $model->customizeFeatureV = $map['CustomizeFeatureV'];
        }
        if (isset($map['CustomizeFeatureW'])) {
            $model->customizeFeatureW = $map['CustomizeFeatureW'];
        }
        if (isset($map['CustomizeFeatureX'])) {
            $model->customizeFeatureX = $map['CustomizeFeatureX'];
        }
        if (isset($map['CustomizeFeatureY'])) {
            $model->customizeFeatureY = $map['CustomizeFeatureY'];
        }
        if (isset($map['CustomizeFeatureZ'])) {
            $model->customizeFeatureZ = $map['CustomizeFeatureZ'];
        }
        if (isset($map['EnergyEfficiency'])) {
            $model->energyEfficiency = $map['EnergyEfficiency'];
        }
        if (isset($map['ForestFirstId'])) {
            $model->forestFirstId = $map['ForestFirstId'];
        }
        if (isset($map['ForestSecondId'])) {
            $model->forestSecondId = $map['ForestSecondId'];
        }
        if (isset($map['InventoryStatus'])) {
            $model->inventoryStatus = $map['InventoryStatus'];
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
        if (isset($map['ItemPicUrl'])) {
            $model->itemPicUrl = $map['ItemPicUrl'];
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
        if (isset($map['Manufacturer'])) {
            $model->manufacturer = $map['Manufacturer'];
        }
        if (isset($map['Material'])) {
            $model->material = $map['Material'];
        }
        if (isset($map['MemberPrice'])) {
            $model->memberPrice = $map['MemberPrice'];
        }
        if (isset($map['ModelNumber'])) {
            $model->modelNumber = $map['ModelNumber'];
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
        if (isset($map['SalesPrice'])) {
            $model->salesPrice = $map['SalesPrice'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }
        if (isset($map['SuggestPrice'])) {
            $model->suggestPrice = $map['SuggestPrice'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['TaxFee'])) {
            $model->taxFee = $map['TaxFee'];
        }
        if (isset($map['TemplateSceneId'])) {
            $model->templateSceneId = $map['TemplateSceneId'];
        }

        return $model;
    }
}
