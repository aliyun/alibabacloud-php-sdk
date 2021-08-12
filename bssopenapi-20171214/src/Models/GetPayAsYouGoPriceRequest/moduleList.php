<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceRequest;

use AlibabaCloud\Tea\Model;

class moduleList extends Model
{
    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $priceType;

    /**
     * @var string
     */
    public $config;
    protected $_name = [
        'moduleCode' => 'ModuleCode',
        'priceType'  => 'PriceType',
        'config'     => 'Config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
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
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        return $model;
    }
}
