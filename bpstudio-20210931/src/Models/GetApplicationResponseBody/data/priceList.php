<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data;

use AlibabaCloud\Dara\Model;

class priceList extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var float
     */
    public $onePrice;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var int
     */
    public $period;

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceCode;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'count' => 'Count',
        'instanceName' => 'InstanceName',
        'lifecycle' => 'Lifecycle',
        'onePrice' => 'OnePrice',
        'originalPrice' => 'OriginalPrice',
        'period' => 'Period',
        'price' => 'Price',
        'priceUnit' => 'PriceUnit',
        'region' => 'Region',
        'remark' => 'Remark',
        'resourceCode' => 'ResourceCode',
        'specification' => 'Specification',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }

        if (null !== $this->onePrice) {
            $res['OnePrice'] = $this->onePrice;
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceCode) {
            $res['ResourceCode'] = $this->resourceCode;
        }

        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }

        if (isset($map['OnePrice'])) {
            $model->onePrice = $map['OnePrice'];
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceCode'])) {
            $model->resourceCode = $map['ResourceCode'];
        }

        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
