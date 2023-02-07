<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QuerySavingsPlansDiscountRequest extends Model
{
    /**
     * @example ecs
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 1:Year
     *
     * @var string
     */
    public $cycle;

    /**
     * @example ZH
     *
     * @var string
     */
    public $locale;

    /**
     * @example instance_type
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example total
     *
     * @var string
     */
    public $payMode;

    /**
     * @example cn-hangzhou
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
        'commodityCode' => 'CommodityCode',
        'cycle'         => 'Cycle',
        'locale'        => 'Locale',
        'moduleCode'    => 'ModuleCode',
        'pageNum'       => 'PageNum',
        'pageSize'      => 'PageSize',
        'payMode'       => 'PayMode',
        'region'        => 'Region',
        'spec'          => 'Spec',
        'spnType'       => 'SpnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return QuerySavingsPlansDiscountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
