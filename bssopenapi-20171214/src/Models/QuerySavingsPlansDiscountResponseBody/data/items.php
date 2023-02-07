<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansDiscountResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $commodityName;

    /**
     * @example 0.85
     *
     * @var string
     */
    public $contractDiscountRate;

    /**
     * @example 1:Year
     *
     * @var string
     */
    public $cycle;

    /**
     * @example 0.85
     *
     * @var string
     */
    public $discountRate;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @example total
     *
     * @var string
     */
    public $payMode;

    /**
     * @example cn-zhangjiakou-na62-a01
     *
     * @var string
     */
    public $region;

    /**
     * @example ecs.g6
     *
     * @var string
     */
    public $spec;

    /**
     * @example universal
     *
     * @var string
     */
    public $spnType;
    protected $_name = [
        'commodityName'        => 'CommodityName',
        'contractDiscountRate' => 'ContractDiscountRate',
        'cycle'                => 'Cycle',
        'discountRate'         => 'DiscountRate',
        'moduleName'           => 'ModuleName',
        'payMode'              => 'PayMode',
        'region'               => 'Region',
        'spec'                 => 'Spec',
        'spnType'              => 'SpnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }
        if (null !== $this->contractDiscountRate) {
            $res['ContractDiscountRate'] = $this->contractDiscountRate;
        }
        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }
        if (null !== $this->discountRate) {
            $res['DiscountRate'] = $this->discountRate;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->payMode) {
            $res['PayMode'] = $this->payMode;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->spnType) {
            $res['SpnType'] = $this->spnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }
        if (isset($map['ContractDiscountRate'])) {
            $model->contractDiscountRate = $map['ContractDiscountRate'];
        }
        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }
        if (isset($map['DiscountRate'])) {
            $model->discountRate = $map['DiscountRate'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['PayMode'])) {
            $model->payMode = $map['PayMode'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['SpnType'])) {
            $model->spnType = $map['SpnType'];
        }

        return $model;
    }
}
