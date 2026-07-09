<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsResponseBody\data\billingCommodity;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsResponseBody\data\billingPriceField;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsResponseBody\data\capacityType;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsResponseBody\data\commodity;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsResponseBody\data\cycleType;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsResponseBody\data\product;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsResponseBody\data\template;

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
     * @var billingCommodity
     */
    public $billingCommodity;

    /**
     * @var string
     */
    public $billingCommodityCode;

    /**
     * @var string
     */
    public $billingCommodityName;

    /**
     * @var int
     */
    public $billingEndTime;

    /**
     * @var string
     */
    public $billingInstanceId;

    /**
     * @var billingPriceField
     */
    public $billingPriceField;

    /**
     * @var string
     */
    public $billingPriceFieldCode;

    /**
     * @var string
     */
    public $billingPriceFieldName;

    /**
     * @var int
     */
    public $billingStartTime;

    /**
     * @var string
     */
    public $capacityAfterDeductViewUnit;

    /**
     * @var string
     */
    public $capacityAfterDeductViewValue;

    /**
     * @var string
     */
    public $capacityBeforeDeductViewUnit;

    /**
     * @var string
     */
    public $capacityBeforeDeductViewValue;

    /**
     * @var string
     */
    public $capacityDeductedViewUnit;

    /**
     * @var string
     */
    public $capacityDeductedViewValue;

    /**
     * @var capacityType
     */
    public $capacityType;

    /**
     * @var string
     */
    public $capacityTypeCode;

    /**
     * @var string
     */
    public $capacityTypeName;

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
     * @var int
     */
    public $deductTime;

    /**
     * @var string
     */
    public $factor;

    /**
     * @var int
     */
    public $instanceBelongAccountId;

    /**
     * @var string
     */
    public $instanceBelongAccountName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $measureAfterDeductViewUnit;

    /**
     * @var string
     */
    public $measureAfterDeductViewValue;

    /**
     * @var string
     */
    public $measureBeforeDeductViewUnit;

    /**
     * @var string
     */
    public $measureBeforeDeductViewValue;

    /**
     * @var string
     */
    public $measureDeductedViewUnit;

    /**
     * @var string
     */
    public $measureDeductedViewValue;

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
    public $relationAccountId;

    /**
     * @var string
     */
    public $relationAccountName;

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
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'billingCommodity' => 'BillingCommodity',
        'billingCommodityCode' => 'BillingCommodityCode',
        'billingCommodityName' => 'BillingCommodityName',
        'billingEndTime' => 'BillingEndTime',
        'billingInstanceId' => 'BillingInstanceId',
        'billingPriceField' => 'BillingPriceField',
        'billingPriceFieldCode' => 'BillingPriceFieldCode',
        'billingPriceFieldName' => 'BillingPriceFieldName',
        'billingStartTime' => 'BillingStartTime',
        'capacityAfterDeductViewUnit' => 'CapacityAfterDeductViewUnit',
        'capacityAfterDeductViewValue' => 'CapacityAfterDeductViewValue',
        'capacityBeforeDeductViewUnit' => 'CapacityBeforeDeductViewUnit',
        'capacityBeforeDeductViewValue' => 'CapacityBeforeDeductViewValue',
        'capacityDeductedViewUnit' => 'CapacityDeductedViewUnit',
        'capacityDeductedViewValue' => 'CapacityDeductedViewValue',
        'capacityType' => 'CapacityType',
        'capacityTypeCode' => 'CapacityTypeCode',
        'capacityTypeName' => 'CapacityTypeName',
        'commodity' => 'Commodity',
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
        'cycleType' => 'CycleType',
        'cycleTypeCode' => 'CycleTypeCode',
        'cycleTypeName' => 'CycleTypeName',
        'deductTime' => 'DeductTime',
        'factor' => 'Factor',
        'instanceBelongAccountId' => 'InstanceBelongAccountId',
        'instanceBelongAccountName' => 'InstanceBelongAccountName',
        'instanceId' => 'InstanceId',
        'measureAfterDeductViewUnit' => 'MeasureAfterDeductViewUnit',
        'measureAfterDeductViewValue' => 'MeasureAfterDeductViewValue',
        'measureBeforeDeductViewUnit' => 'MeasureBeforeDeductViewUnit',
        'measureBeforeDeductViewValue' => 'MeasureBeforeDeductViewValue',
        'measureDeductedViewUnit' => 'MeasureDeductedViewUnit',
        'measureDeductedViewValue' => 'MeasureDeductedViewValue',
        'product' => 'Product',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
        'relationAccountId' => 'RelationAccountId',
        'relationAccountName' => 'RelationAccountName',
        'template' => 'Template',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        if (null !== $this->billingCommodity) {
            $this->billingCommodity->validate();
        }
        if (null !== $this->billingPriceField) {
            $this->billingPriceField->validate();
        }
        if (null !== $this->capacityType) {
            $this->capacityType->validate();
        }
        if (null !== $this->commodity) {
            $this->commodity->validate();
        }
        if (null !== $this->cycleType) {
            $this->cycleType->validate();
        }
        if (null !== $this->product) {
            $this->product->validate();
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

        if (null !== $this->billingCommodity) {
            $res['BillingCommodity'] = null !== $this->billingCommodity ? $this->billingCommodity->toArray($noStream) : $this->billingCommodity;
        }

        if (null !== $this->billingCommodityCode) {
            $res['BillingCommodityCode'] = $this->billingCommodityCode;
        }

        if (null !== $this->billingCommodityName) {
            $res['BillingCommodityName'] = $this->billingCommodityName;
        }

        if (null !== $this->billingEndTime) {
            $res['BillingEndTime'] = $this->billingEndTime;
        }

        if (null !== $this->billingInstanceId) {
            $res['BillingInstanceId'] = $this->billingInstanceId;
        }

        if (null !== $this->billingPriceField) {
            $res['BillingPriceField'] = null !== $this->billingPriceField ? $this->billingPriceField->toArray($noStream) : $this->billingPriceField;
        }

        if (null !== $this->billingPriceFieldCode) {
            $res['BillingPriceFieldCode'] = $this->billingPriceFieldCode;
        }

        if (null !== $this->billingPriceFieldName) {
            $res['BillingPriceFieldName'] = $this->billingPriceFieldName;
        }

        if (null !== $this->billingStartTime) {
            $res['BillingStartTime'] = $this->billingStartTime;
        }

        if (null !== $this->capacityAfterDeductViewUnit) {
            $res['CapacityAfterDeductViewUnit'] = $this->capacityAfterDeductViewUnit;
        }

        if (null !== $this->capacityAfterDeductViewValue) {
            $res['CapacityAfterDeductViewValue'] = $this->capacityAfterDeductViewValue;
        }

        if (null !== $this->capacityBeforeDeductViewUnit) {
            $res['CapacityBeforeDeductViewUnit'] = $this->capacityBeforeDeductViewUnit;
        }

        if (null !== $this->capacityBeforeDeductViewValue) {
            $res['CapacityBeforeDeductViewValue'] = $this->capacityBeforeDeductViewValue;
        }

        if (null !== $this->capacityDeductedViewUnit) {
            $res['CapacityDeductedViewUnit'] = $this->capacityDeductedViewUnit;
        }

        if (null !== $this->capacityDeductedViewValue) {
            $res['CapacityDeductedViewValue'] = $this->capacityDeductedViewValue;
        }

        if (null !== $this->capacityType) {
            $res['CapacityType'] = null !== $this->capacityType ? $this->capacityType->toArray($noStream) : $this->capacityType;
        }

        if (null !== $this->capacityTypeCode) {
            $res['CapacityTypeCode'] = $this->capacityTypeCode;
        }

        if (null !== $this->capacityTypeName) {
            $res['CapacityTypeName'] = $this->capacityTypeName;
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

        if (null !== $this->cycleType) {
            $res['CycleType'] = null !== $this->cycleType ? $this->cycleType->toArray($noStream) : $this->cycleType;
        }

        if (null !== $this->cycleTypeCode) {
            $res['CycleTypeCode'] = $this->cycleTypeCode;
        }

        if (null !== $this->cycleTypeName) {
            $res['CycleTypeName'] = $this->cycleTypeName;
        }

        if (null !== $this->deductTime) {
            $res['DeductTime'] = $this->deductTime;
        }

        if (null !== $this->factor) {
            $res['Factor'] = $this->factor;
        }

        if (null !== $this->instanceBelongAccountId) {
            $res['InstanceBelongAccountId'] = $this->instanceBelongAccountId;
        }

        if (null !== $this->instanceBelongAccountName) {
            $res['InstanceBelongAccountName'] = $this->instanceBelongAccountName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->measureAfterDeductViewUnit) {
            $res['MeasureAfterDeductViewUnit'] = $this->measureAfterDeductViewUnit;
        }

        if (null !== $this->measureAfterDeductViewValue) {
            $res['MeasureAfterDeductViewValue'] = $this->measureAfterDeductViewValue;
        }

        if (null !== $this->measureBeforeDeductViewUnit) {
            $res['MeasureBeforeDeductViewUnit'] = $this->measureBeforeDeductViewUnit;
        }

        if (null !== $this->measureBeforeDeductViewValue) {
            $res['MeasureBeforeDeductViewValue'] = $this->measureBeforeDeductViewValue;
        }

        if (null !== $this->measureDeductedViewUnit) {
            $res['MeasureDeductedViewUnit'] = $this->measureDeductedViewUnit;
        }

        if (null !== $this->measureDeductedViewValue) {
            $res['MeasureDeductedViewValue'] = $this->measureDeductedViewValue;
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

        if (null !== $this->relationAccountId) {
            $res['RelationAccountId'] = $this->relationAccountId;
        }

        if (null !== $this->relationAccountName) {
            $res['RelationAccountName'] = $this->relationAccountName;
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

        if (isset($map['BillingCommodity'])) {
            $model->billingCommodity = billingCommodity::fromMap($map['BillingCommodity']);
        }

        if (isset($map['BillingCommodityCode'])) {
            $model->billingCommodityCode = $map['BillingCommodityCode'];
        }

        if (isset($map['BillingCommodityName'])) {
            $model->billingCommodityName = $map['BillingCommodityName'];
        }

        if (isset($map['BillingEndTime'])) {
            $model->billingEndTime = $map['BillingEndTime'];
        }

        if (isset($map['BillingInstanceId'])) {
            $model->billingInstanceId = $map['BillingInstanceId'];
        }

        if (isset($map['BillingPriceField'])) {
            $model->billingPriceField = billingPriceField::fromMap($map['BillingPriceField']);
        }

        if (isset($map['BillingPriceFieldCode'])) {
            $model->billingPriceFieldCode = $map['BillingPriceFieldCode'];
        }

        if (isset($map['BillingPriceFieldName'])) {
            $model->billingPriceFieldName = $map['BillingPriceFieldName'];
        }

        if (isset($map['BillingStartTime'])) {
            $model->billingStartTime = $map['BillingStartTime'];
        }

        if (isset($map['CapacityAfterDeductViewUnit'])) {
            $model->capacityAfterDeductViewUnit = $map['CapacityAfterDeductViewUnit'];
        }

        if (isset($map['CapacityAfterDeductViewValue'])) {
            $model->capacityAfterDeductViewValue = $map['CapacityAfterDeductViewValue'];
        }

        if (isset($map['CapacityBeforeDeductViewUnit'])) {
            $model->capacityBeforeDeductViewUnit = $map['CapacityBeforeDeductViewUnit'];
        }

        if (isset($map['CapacityBeforeDeductViewValue'])) {
            $model->capacityBeforeDeductViewValue = $map['CapacityBeforeDeductViewValue'];
        }

        if (isset($map['CapacityDeductedViewUnit'])) {
            $model->capacityDeductedViewUnit = $map['CapacityDeductedViewUnit'];
        }

        if (isset($map['CapacityDeductedViewValue'])) {
            $model->capacityDeductedViewValue = $map['CapacityDeductedViewValue'];
        }

        if (isset($map['CapacityType'])) {
            $model->capacityType = capacityType::fromMap($map['CapacityType']);
        }

        if (isset($map['CapacityTypeCode'])) {
            $model->capacityTypeCode = $map['CapacityTypeCode'];
        }

        if (isset($map['CapacityTypeName'])) {
            $model->capacityTypeName = $map['CapacityTypeName'];
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

        if (isset($map['CycleType'])) {
            $model->cycleType = cycleType::fromMap($map['CycleType']);
        }

        if (isset($map['CycleTypeCode'])) {
            $model->cycleTypeCode = $map['CycleTypeCode'];
        }

        if (isset($map['CycleTypeName'])) {
            $model->cycleTypeName = $map['CycleTypeName'];
        }

        if (isset($map['DeductTime'])) {
            $model->deductTime = $map['DeductTime'];
        }

        if (isset($map['Factor'])) {
            $model->factor = $map['Factor'];
        }

        if (isset($map['InstanceBelongAccountId'])) {
            $model->instanceBelongAccountId = $map['InstanceBelongAccountId'];
        }

        if (isset($map['InstanceBelongAccountName'])) {
            $model->instanceBelongAccountName = $map['InstanceBelongAccountName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MeasureAfterDeductViewUnit'])) {
            $model->measureAfterDeductViewUnit = $map['MeasureAfterDeductViewUnit'];
        }

        if (isset($map['MeasureAfterDeductViewValue'])) {
            $model->measureAfterDeductViewValue = $map['MeasureAfterDeductViewValue'];
        }

        if (isset($map['MeasureBeforeDeductViewUnit'])) {
            $model->measureBeforeDeductViewUnit = $map['MeasureBeforeDeductViewUnit'];
        }

        if (isset($map['MeasureBeforeDeductViewValue'])) {
            $model->measureBeforeDeductViewValue = $map['MeasureBeforeDeductViewValue'];
        }

        if (isset($map['MeasureDeductedViewUnit'])) {
            $model->measureDeductedViewUnit = $map['MeasureDeductedViewUnit'];
        }

        if (isset($map['MeasureDeductedViewValue'])) {
            $model->measureDeductedViewValue = $map['MeasureDeductedViewValue'];
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

        if (isset($map['RelationAccountId'])) {
            $model->relationAccountId = $map['RelationAccountId'];
        }

        if (isset($map['RelationAccountName'])) {
            $model->relationAccountName = $map['RelationAccountName'];
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

        return $model;
    }
}
