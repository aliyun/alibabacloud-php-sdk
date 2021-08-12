<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\moduleList;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\moduleList\module\configList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $priceType;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var configList
     */
    public $configList;
    protected $_name = [
        'moduleName' => 'ModuleName',
        'priceType'  => 'PriceType',
        'currency'   => 'Currency',
        'moduleCode' => 'ModuleCode',
        'configList' => 'ConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->configList) {
            $res['ConfigList'] = null !== $this->configList ? $this->configList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['ConfigList'])) {
            $model->configList = configList::fromMap($map['ConfigList']);
        }

        return $model;
    }
}
