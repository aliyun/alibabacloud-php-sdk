<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\attributeList;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\moduleList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The module attributes.
     *
     * @var attributeList
     */
    public $attributeList;

    /**
     * @description The pricing information of modules.
     *
     * @var moduleList
     */
    public $moduleList;
    protected $_name = [
        'attributeList' => 'AttributeList',
        'moduleList'    => 'ModuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeList) {
            $res['AttributeList'] = null !== $this->attributeList ? $this->attributeList->toMap() : null;
        }
        if (null !== $this->moduleList) {
            $res['ModuleList'] = null !== $this->moduleList ? $this->moduleList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeList'])) {
            $model->attributeList = attributeList::fromMap($map['AttributeList']);
        }
        if (isset($map['ModuleList'])) {
            $model->moduleList = moduleList::fromMap($map['ModuleList']);
        }

        return $model;
    }
}
