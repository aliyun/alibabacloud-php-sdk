<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesResponseBody\data\capacityType;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesResponseBody\data\commodity;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesResponseBody\data\cycleType;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesResponseBody\data\deductRegions;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesResponseBody\data\product;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesResponseBody\data\status;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesResponseBody\data\template;

class data extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $capacitiyTypeName;

    /**
     * @var capacityType
     */
    public $capacityType;

    /**
     * @var string
     */
    public $capacityTypeCode;

    /**
     * @var commodity
     */
    public $commodity;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var string
     */
    public $currCapacityBaseUnit;

    /**
     * @var string
     */
    public $currCapacityBaseValue;

    /**
     * @var string
     */
    public $currCapacityViewUnit;

    /**
     * @var string
     */
    public $currCapacityViewValue;

    /**
     * @var cycleType
     */
    public $cycleType;

    /**
     * @var string
     */
    public $cycleTypeCode;

    /**
     * @var string
     */
    public $cycleTypeName;

    /**
     * @var deductRegions[]
     */
    public $deductRegions;

    /**
     * @var bool
     */
    public $enableExchange;

    /**
     * @var bool
     */
    public $enableRenew;

    /**
     * @var bool
     */
    public $enableUpgrade;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $exchangeCommodityCode;

    /**
     * @var string
     */
    public $initCapacityBaseUnit;

    /**
     * @var string
     */
    public $initCapacityBaseValue;

    /**
     * @var string
     */
    public $initCapacityViewUnit;

    /**
     * @var string
     */
    public $initCapacityViewValue;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $periodCapacityViewUnit;

    /**
     * @var string
     */
    public $periodCapacityViewValue;

    /**
     * @var string
     */
    public $periodTime;

    /**
     * @var product
     */
    public $product;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var int
     */
    public $purchaseTime;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var status
     */
    public $status;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var template
     */
    public $template;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $periodCapacityBaseUnit;

    /**
     * @var string
     */
    public $periodCapacityBaseValue;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'capacitiyTypeName' => 'CapacitiyTypeName',
        'capacityType' => 'CapacityType',
        'capacityTypeCode' => 'CapacityTypeCode',
        'commodity' => 'Commodity',
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
        'currCapacityBaseUnit' => 'CurrCapacityBaseUnit',
        'currCapacityBaseValue' => 'CurrCapacityBaseValue',
        'currCapacityViewUnit' => 'CurrCapacityViewUnit',
        'currCapacityViewValue' => 'CurrCapacityViewValue',
        'cycleType' => 'CycleType',
        'cycleTypeCode' => 'CycleTypeCode',
        'cycleTypeName' => 'CycleTypeName',
        'deductRegions' => 'DeductRegions',
        'enableExchange' => 'EnableExchange',
        'enableRenew' => 'EnableRenew',
        'enableUpgrade' => 'EnableUpgrade',
        'endTime' => 'EndTime',
        'exchangeCommodityCode' => 'ExchangeCommodityCode',
        'initCapacityBaseUnit' => 'InitCapacityBaseUnit',
        'initCapacityBaseValue' => 'InitCapacityBaseValue',
        'initCapacityViewUnit' => 'InitCapacityViewUnit',
        'initCapacityViewValue' => 'InitCapacityViewValue',
        'instanceId' => 'InstanceId',
        'periodCapacityViewUnit' => 'PeriodCapacityViewUnit',
        'periodCapacityViewValue' => 'PeriodCapacityViewValue',
        'periodTime' => 'PeriodTime',
        'product' => 'Product',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
        'purchaseTime' => 'PurchaseTime',
        'region' => 'Region',
        'regionName' => 'RegionName',
        'spec' => 'Spec',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusCode' => 'StatusCode',
        'statusName' => 'StatusName',
        'template' => 'Template',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'periodCapacityBaseUnit' => 'periodCapacityBaseUnit',
        'periodCapacityBaseValue' => 'periodCapacityBaseValue',
    ];

    public function validate()
    {
        if (null !== $this->capacityType) {
            $this->capacityType->validate();
        }
        if (null !== $this->commodity) {
            $this->commodity->validate();
        }
        if (null !== $this->cycleType) {
            $this->cycleType->validate();
        }
        if (\is_array($this->deductRegions)) {
            Model::validateArray($this->deductRegions);
        }
        if (null !== $this->product) {
            $this->product->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        if (null !== $this->template) {
            $this->template->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->capacitiyTypeName) {
            $res['CapacitiyTypeName'] = $this->capacitiyTypeName;
        }

        if (null !== $this->capacityType) {
            $res['CapacityType'] = null !== $this->capacityType ? $this->capacityType->toArray($noStream) : $this->capacityType;
        }

        if (null !== $this->capacityTypeCode) {
            $res['CapacityTypeCode'] = $this->capacityTypeCode;
        }

        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toArray($noStream) : $this->commodity;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }

        if (null !== $this->currCapacityBaseUnit) {
            $res['CurrCapacityBaseUnit'] = $this->currCapacityBaseUnit;
        }

        if (null !== $this->currCapacityBaseValue) {
            $res['CurrCapacityBaseValue'] = $this->currCapacityBaseValue;
        }

        if (null !== $this->currCapacityViewUnit) {
            $res['CurrCapacityViewUnit'] = $this->currCapacityViewUnit;
        }

        if (null !== $this->currCapacityViewValue) {
            $res['CurrCapacityViewValue'] = $this->currCapacityViewValue;
        }

        if (null !== $this->cycleType) {
            $res['CycleType'] = null !== $this->cycleType ? $this->cycleType->toArray($noStream) : $this->cycleType;
        }

        if (null !== $this->cycleTypeCode) {
            $res['CycleTypeCode'] = $this->cycleTypeCode;
        }

        if (null !== $this->cycleTypeName) {
            $res['CycleTypeName'] = $this->cycleTypeName;
        }

        if (null !== $this->deductRegions) {
            if (\is_array($this->deductRegions)) {
                $res['DeductRegions'] = [];
                $n1 = 0;
                foreach ($this->deductRegions as $item1) {
                    $res['DeductRegions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableExchange) {
            $res['EnableExchange'] = $this->enableExchange;
        }

        if (null !== $this->enableRenew) {
            $res['EnableRenew'] = $this->enableRenew;
        }

        if (null !== $this->enableUpgrade) {
            $res['EnableUpgrade'] = $this->enableUpgrade;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->exchangeCommodityCode) {
            $res['ExchangeCommodityCode'] = $this->exchangeCommodityCode;
        }

        if (null !== $this->initCapacityBaseUnit) {
            $res['InitCapacityBaseUnit'] = $this->initCapacityBaseUnit;
        }

        if (null !== $this->initCapacityBaseValue) {
            $res['InitCapacityBaseValue'] = $this->initCapacityBaseValue;
        }

        if (null !== $this->initCapacityViewUnit) {
            $res['InitCapacityViewUnit'] = $this->initCapacityViewUnit;
        }

        if (null !== $this->initCapacityViewValue) {
            $res['InitCapacityViewValue'] = $this->initCapacityViewValue;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->periodCapacityViewUnit) {
            $res['PeriodCapacityViewUnit'] = $this->periodCapacityViewUnit;
        }

        if (null !== $this->periodCapacityViewValue) {
            $res['PeriodCapacityViewValue'] = $this->periodCapacityViewValue;
        }

        if (null !== $this->periodTime) {
            $res['PeriodTime'] = $this->periodTime;
        }

        if (null !== $this->product) {
            $res['Product'] = null !== $this->product ? $this->product->toArray($noStream) : $this->product;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->purchaseTime) {
            $res['PurchaseTime'] = $this->purchaseTime;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }

        if (null !== $this->template) {
            $res['Template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->periodCapacityBaseUnit) {
            $res['periodCapacityBaseUnit'] = $this->periodCapacityBaseUnit;
        }

        if (null !== $this->periodCapacityBaseValue) {
            $res['periodCapacityBaseValue'] = $this->periodCapacityBaseValue;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['CapacitiyTypeName'])) {
            $model->capacitiyTypeName = $map['CapacitiyTypeName'];
        }

        if (isset($map['CapacityType'])) {
            $model->capacityType = capacityType::fromMap($map['CapacityType']);
        }

        if (isset($map['CapacityTypeCode'])) {
            $model->capacityTypeCode = $map['CapacityTypeCode'];
        }

        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }

        if (isset($map['CurrCapacityBaseUnit'])) {
            $model->currCapacityBaseUnit = $map['CurrCapacityBaseUnit'];
        }

        if (isset($map['CurrCapacityBaseValue'])) {
            $model->currCapacityBaseValue = $map['CurrCapacityBaseValue'];
        }

        if (isset($map['CurrCapacityViewUnit'])) {
            $model->currCapacityViewUnit = $map['CurrCapacityViewUnit'];
        }

        if (isset($map['CurrCapacityViewValue'])) {
            $model->currCapacityViewValue = $map['CurrCapacityViewValue'];
        }

        if (isset($map['CycleType'])) {
            $model->cycleType = cycleType::fromMap($map['CycleType']);
        }

        if (isset($map['CycleTypeCode'])) {
            $model->cycleTypeCode = $map['CycleTypeCode'];
        }

        if (isset($map['CycleTypeName'])) {
            $model->cycleTypeName = $map['CycleTypeName'];
        }

        if (isset($map['DeductRegions'])) {
            if (!empty($map['DeductRegions'])) {
                $model->deductRegions = [];
                $n1 = 0;
                foreach ($map['DeductRegions'] as $item1) {
                    $model->deductRegions[$n1] = deductRegions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableExchange'])) {
            $model->enableExchange = $map['EnableExchange'];
        }

        if (isset($map['EnableRenew'])) {
            $model->enableRenew = $map['EnableRenew'];
        }

        if (isset($map['EnableUpgrade'])) {
            $model->enableUpgrade = $map['EnableUpgrade'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExchangeCommodityCode'])) {
            $model->exchangeCommodityCode = $map['ExchangeCommodityCode'];
        }

        if (isset($map['InitCapacityBaseUnit'])) {
            $model->initCapacityBaseUnit = $map['InitCapacityBaseUnit'];
        }

        if (isset($map['InitCapacityBaseValue'])) {
            $model->initCapacityBaseValue = $map['InitCapacityBaseValue'];
        }

        if (isset($map['InitCapacityViewUnit'])) {
            $model->initCapacityViewUnit = $map['InitCapacityViewUnit'];
        }

        if (isset($map['InitCapacityViewValue'])) {
            $model->initCapacityViewValue = $map['InitCapacityViewValue'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PeriodCapacityViewUnit'])) {
            $model->periodCapacityViewUnit = $map['PeriodCapacityViewUnit'];
        }

        if (isset($map['PeriodCapacityViewValue'])) {
            $model->periodCapacityViewValue = $map['PeriodCapacityViewValue'];
        }

        if (isset($map['PeriodTime'])) {
            $model->periodTime = $map['PeriodTime'];
        }

        if (isset($map['Product'])) {
            $model->product = product::fromMap($map['Product']);
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['PurchaseTime'])) {
            $model->purchaseTime = $map['PurchaseTime'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }

        if (isset($map['Template'])) {
            $model->template = template::fromMap($map['Template']);
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['periodCapacityBaseUnit'])) {
            $model->periodCapacityBaseUnit = $map['periodCapacityBaseUnit'];
        }

        if (isset($map['periodCapacityBaseValue'])) {
            $model->periodCapacityBaseValue = $map['periodCapacityBaseValue'];
        }

        return $model;
    }
}
