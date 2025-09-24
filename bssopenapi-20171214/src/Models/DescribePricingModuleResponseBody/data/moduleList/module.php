<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\moduleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\moduleList\module\configList;

class module extends Model
{
    /**
     * @var configList
     */
    public $configList;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $priceType;
    protected $_name = [
        'configList' => 'ConfigList',
        'currency' => 'Currency',
        'moduleCode' => 'ModuleCode',
        'moduleName' => 'ModuleName',
        'priceType' => 'PriceType',
    ];

    public function validate()
    {
        if (null !== $this->configList) {
            $this->configList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configList) {
            $res['ConfigList'] = null !== $this->configList ? $this->configList->toArray($noStream) : $this->configList;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
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
        if (isset($map['ConfigList'])) {
            $model->configList = configList::fromMap($map['ConfigList']);
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }

        return $model;
    }
}
