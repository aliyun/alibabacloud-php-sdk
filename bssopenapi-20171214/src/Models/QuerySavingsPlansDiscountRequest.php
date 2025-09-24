<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class QuerySavingsPlansDiscountRequest extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $cycle;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $payMode;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $spnCommodityCode;

    /**
     * @var string
     */
    public $spnType;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'cycle' => 'Cycle',
        'locale' => 'Locale',
        'moduleCode' => 'ModuleCode',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'payMode' => 'PayMode',
        'region' => 'Region',
        'spec' => 'Spec',
        'spnCommodityCode' => 'SpnCommodityCode',
        'spnType' => 'SpnType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->spnCommodityCode) {
            $res['SpnCommodityCode'] = $this->spnCommodityCode;
        }

        if (null !== $this->spnType) {
            $res['SpnType'] = $this->spnType;
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

        if (isset($map['SpnCommodityCode'])) {
            $model->spnCommodityCode = $map['SpnCommodityCode'];
        }

        if (isset($map['SpnType'])) {
            $model->spnType = $map['SpnType'];
        }

        return $model;
    }
}
