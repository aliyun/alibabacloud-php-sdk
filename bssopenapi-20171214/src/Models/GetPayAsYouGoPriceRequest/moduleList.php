<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceRequest;

use AlibabaCloud\Tea\Model;

class moduleList extends Model
{
    /**
     * @description The configuration of the Nth pricing module. Valid values of N: 1 to 50. Format: AA:aa,BB:bb. The values of AA and BB are the property IDs of the pricing module. The values of aa and bb are the property values of the pricing module.
     *
     * >  You can call the [DescribePricingModule](~~96469~~) operation to obtain the configuration parameters of the pricing module.
     * @example InstanceType:ecs.g5.xlarge,IoOptimized:IoOptimized,ImageOs:linux
     *
     * @var string
     */
    public $config;

    /**
     * @description The code of the Nth pricing module.
     *
     * >  You can call the [DescribePricingModule](~~96469~~) operation to obtain the module code.
     * @example InstanceType
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description The price type of the Nth pricing module. Valid values:
     *
     *   Hour: hourly price
     *   Usage: usage price
     *   Month: monthly price
     *   Year: annual price
     *
     * >  You can call the [DescribePricingModule](~~96469~~) operation to obtain the configuration parameters of the pricing module.
     * @example Hour
     *
     * @var string
     */
    public $priceType;
    protected $_name = [
        'config'     => 'Config',
        'moduleCode' => 'ModuleCode',
        'priceType'  => 'PriceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }

        return $model;
    }
}
