<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model\skuList\lmAttributeModels;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model\skuList\stepPrices;
use AlibabaCloud\Tea\Model;

class skuList extends Model
{
    /**
     * @var int
     */
    public $adminStatus;

    /**
     * @var int
     */
    public $aliyunPriceCent;

    /**
     * @var string
     */
    public $benefitId;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var int
     */
    public $customerStatus;

    /**
     * @var string[]
     */
    public $customizedAttributeMap;

    /**
     * @var float
     */
    public $discountRate;

    /**
     * @var int
     */
    public $disparityPrice;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $icStatus;

    /**
     * @var int
     */
    public $itemId;

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
    public $mainPriceCent;

    /**
     * @var int
     */
    public $maxAllowedCount;

    /**
     * @var int
     */
    public $originalPriceCent;

    /**
     * @var int
     */
    public $pointPrice;

    /**
     * @var int
     */
    public $points;

    /**
     * @var int
     */
    public $pointsAmount;

    /**
     * @var string
     */
    public $pointsInfo;

    /**
     * @var string
     */
    public $pointsKey;

    /**
     * @var float
     */
    public $premiumRate;

    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $reservePrice;

    /**
     * @var string
     */
    public $skuDesc;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuPicUrl;

    /**
     * @var string[]
     */
    public $skuProperties;

    /**
     * @var string
     */
    public $skuPropertiesJson;

    /**
     * @var string
     */
    public $skuTitle;

    /**
     * @var int
     */
    public $status;

    /**
     * @var stepPrices[]
     */
    public $stepPrices;

    /**
     * @var int
     */
    public $supplierStatus;

    /**
     * @var int
     */
    public $supplyPriceCent;

    /**
     * @var int
     */
    public $taoBaoCurrentPrice;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var string[]
     */
    public $userLabel;
    protected $_name = [
        'adminStatus'            => 'AdminStatus',
        'aliyunPriceCent'        => 'AliyunPriceCent',
        'benefitId'              => 'BenefitId',
        'canSell'                => 'CanSell',
        'customerStatus'         => 'CustomerStatus',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
        'discountRate'           => 'DiscountRate',
        'disparityPrice'         => 'DisparityPrice',
        'extInfo'                => 'ExtInfo',
        'gmtModified'            => 'GmtModified',
        'icStatus'               => 'IcStatus',
        'itemId'                 => 'ItemId',
        'lmAttributeModels'      => 'LmAttributeModels',
        'lmItemId'               => 'LmItemId',
        'mainPriceCent'          => 'MainPriceCent',
        'maxAllowedCount'        => 'MaxAllowedCount',
        'originalPriceCent'      => 'OriginalPriceCent',
        'pointPrice'             => 'PointPrice',
        'points'                 => 'Points',
        'pointsAmount'           => 'PointsAmount',
        'pointsInfo'             => 'PointsInfo',
        'pointsKey'              => 'PointsKey',
        'premiumRate'            => 'PremiumRate',
        'priceCent'              => 'PriceCent',
        'quantity'               => 'Quantity',
        'reservePrice'           => 'ReservePrice',
        'skuDesc'                => 'SkuDesc',
        'skuId'                  => 'SkuId',
        'skuPicUrl'              => 'SkuPicUrl',
        'skuProperties'          => 'SkuProperties',
        'skuPropertiesJson'      => 'SkuPropertiesJson',
        'skuTitle'               => 'SkuTitle',
        'status'                 => 'Status',
        'stepPrices'             => 'StepPrices',
        'supplierStatus'         => 'SupplierStatus',
        'supplyPriceCent'        => 'SupplyPriceCent',
        'taoBaoCurrentPrice'     => 'TaoBaoCurrentPrice',
        'tips'                   => 'Tips',
        'userLabel'              => 'UserLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminStatus) {
            $res['AdminStatus'] = $this->adminStatus;
        }
        if (null !== $this->aliyunPriceCent) {
            $res['AliyunPriceCent'] = $this->aliyunPriceCent;
        }
        if (null !== $this->benefitId) {
            $res['BenefitId'] = $this->benefitId;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->customerStatus) {
            $res['CustomerStatus'] = $this->customerStatus;
        }
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
        }
        if (null !== $this->discountRate) {
            $res['DiscountRate'] = $this->discountRate;
        }
        if (null !== $this->disparityPrice) {
            $res['DisparityPrice'] = $this->disparityPrice;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->icStatus) {
            $res['IcStatus'] = $this->icStatus;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
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
        if (null !== $this->mainPriceCent) {
            $res['MainPriceCent'] = $this->mainPriceCent;
        }
        if (null !== $this->maxAllowedCount) {
            $res['MaxAllowedCount'] = $this->maxAllowedCount;
        }
        if (null !== $this->originalPriceCent) {
            $res['OriginalPriceCent'] = $this->originalPriceCent;
        }
        if (null !== $this->pointPrice) {
            $res['PointPrice'] = $this->pointPrice;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->pointsInfo) {
            $res['PointsInfo'] = $this->pointsInfo;
        }
        if (null !== $this->pointsKey) {
            $res['PointsKey'] = $this->pointsKey;
        }
        if (null !== $this->premiumRate) {
            $res['PremiumRate'] = $this->premiumRate;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->skuDesc) {
            $res['SkuDesc'] = $this->skuDesc;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuPicUrl) {
            $res['SkuPicUrl'] = $this->skuPicUrl;
        }
        if (null !== $this->skuProperties) {
            $res['SkuProperties'] = $this->skuProperties;
        }
        if (null !== $this->skuPropertiesJson) {
            $res['SkuPropertiesJson'] = $this->skuPropertiesJson;
        }
        if (null !== $this->skuTitle) {
            $res['SkuTitle'] = $this->skuTitle;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stepPrices) {
            $res['StepPrices'] = [];
            if (null !== $this->stepPrices && \is_array($this->stepPrices)) {
                $n = 0;
                foreach ($this->stepPrices as $item) {
                    $res['StepPrices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supplierStatus) {
            $res['SupplierStatus'] = $this->supplierStatus;
        }
        if (null !== $this->supplyPriceCent) {
            $res['SupplyPriceCent'] = $this->supplyPriceCent;
        }
        if (null !== $this->taoBaoCurrentPrice) {
            $res['TaoBaoCurrentPrice'] = $this->taoBaoCurrentPrice;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->userLabel) {
            $res['UserLabel'] = $this->userLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminStatus'])) {
            $model->adminStatus = $map['AdminStatus'];
        }
        if (isset($map['AliyunPriceCent'])) {
            $model->aliyunPriceCent = $map['AliyunPriceCent'];
        }
        if (isset($map['BenefitId'])) {
            $model->benefitId = $map['BenefitId'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['CustomerStatus'])) {
            $model->customerStatus = $map['CustomerStatus'];
        }
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }
        if (isset($map['DiscountRate'])) {
            $model->discountRate = $map['DiscountRate'];
        }
        if (isset($map['DisparityPrice'])) {
            $model->disparityPrice = $map['DisparityPrice'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IcStatus'])) {
            $model->icStatus = $map['IcStatus'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
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
        if (isset($map['MainPriceCent'])) {
            $model->mainPriceCent = $map['MainPriceCent'];
        }
        if (isset($map['MaxAllowedCount'])) {
            $model->maxAllowedCount = $map['MaxAllowedCount'];
        }
        if (isset($map['OriginalPriceCent'])) {
            $model->originalPriceCent = $map['OriginalPriceCent'];
        }
        if (isset($map['PointPrice'])) {
            $model->pointPrice = $map['PointPrice'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['PointsInfo'])) {
            $model->pointsInfo = $map['PointsInfo'];
        }
        if (isset($map['PointsKey'])) {
            $model->pointsKey = $map['PointsKey'];
        }
        if (isset($map['PremiumRate'])) {
            $model->premiumRate = $map['PremiumRate'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['SkuDesc'])) {
            $model->skuDesc = $map['SkuDesc'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuPicUrl'])) {
            $model->skuPicUrl = $map['SkuPicUrl'];
        }
        if (isset($map['SkuProperties'])) {
            $model->skuProperties = $map['SkuProperties'];
        }
        if (isset($map['SkuPropertiesJson'])) {
            $model->skuPropertiesJson = $map['SkuPropertiesJson'];
        }
        if (isset($map['SkuTitle'])) {
            $model->skuTitle = $map['SkuTitle'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StepPrices'])) {
            if (!empty($map['StepPrices'])) {
                $model->stepPrices = [];
                $n                 = 0;
                foreach ($map['StepPrices'] as $item) {
                    $model->stepPrices[$n++] = null !== $item ? stepPrices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupplierStatus'])) {
            $model->supplierStatus = $map['SupplierStatus'];
        }
        if (isset($map['SupplyPriceCent'])) {
            $model->supplyPriceCent = $map['SupplyPriceCent'];
        }
        if (isset($map['TaoBaoCurrentPrice'])) {
            $model->taoBaoCurrentPrice = $map['TaoBaoCurrentPrice'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['UserLabel'])) {
            if (!empty($map['UserLabel'])) {
                $model->userLabel = $map['UserLabel'];
            }
        }

        return $model;
    }
}
