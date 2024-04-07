<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data;

use AlibabaCloud\Tea\Model;

class priceList extends Model
{
    /**
     * @description The billing method.
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The quantity.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the instance.
     *
     * @example ecs
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Resource Fill Labels.
     *
     * @example Create
     *
     * @var string
     */
    public $lifecycle;

    /**
     * @description The unit price of the instance.
     *
     * @example 0.01
     *
     * @var float
     */
    public $onePrice;

    /**
     * @description The original price of the instance.
     *
     * @example 3.570
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @description The service duration.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The total price.
     *
     * @example 0.01
     *
     * @var float
     */
    public $price;

    /**
     * @description Unit: USD per hour
     *
     * @example The service duration.
     *
     * @var string
     */
    public $priceUnit;

    /**
     * @description The region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The error message that is returned when a price query fails.
     *
     * @example ecs.e3.large
     *
     * @var string
     */
    public $remark;

    /**
     * @description Product code
     *
     * @example ecs
     *
     * @var string
     */
    public $resourceCode;

    /**
     * @description The instance type. This parameter indicates the information about the instance type. For example, 192.168.0.0/16 may be returned for a Virtual Private Cloud (VPC) instance, ecs.g5.large may be returned for an Elastic Compute Service (ECS) instance, and slb.s1.small may be returned for a Server Load Balancer (SLB) instance. If the resource does not have a specific type, an empty value is returned.
     *
     * @example The billing method.
     *
     * @var string
     */
    public $specification;

    /**
     * @description The creation mode. Valid values:\
     * 2: imports an instance.
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'chargeType'    => 'ChargeType',
        'count'         => 'Count',
        'instanceName'  => 'InstanceName',
        'lifecycle'     => 'Lifecycle',
        'onePrice'      => 'OnePrice',
        'originalPrice' => 'OriginalPrice',
        'period'        => 'Period',
        'price'         => 'Price',
        'priceUnit'     => 'PriceUnit',
        'region'        => 'Region',
        'remark'        => 'Remark',
        'resourceCode'  => 'ResourceCode',
        'specification' => 'Specification',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return priceList
     */
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
