<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\attributeList;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\moduleList;

class data extends Model
{
    /**
     * @var attributeList
     */
    public $attributeList;

    /**
     * @var moduleList
     */
    public $moduleList;
    protected $_name = [
        'attributeList' => 'AttributeList',
        'moduleList' => 'ModuleList',
    ];

    public function validate()
    {
        if (null !== $this->attributeList) {
            $this->attributeList->validate();
        }
        if (null !== $this->moduleList) {
            $this->moduleList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeList) {
            $res['AttributeList'] = null !== $this->attributeList ? $this->attributeList->toArray($noStream) : $this->attributeList;
        }

        if (null !== $this->moduleList) {
            $res['ModuleList'] = null !== $this->moduleList ? $this->moduleList->toArray($noStream) : $this->moduleList;
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
        if (isset($map['AttributeList'])) {
            $model->attributeList = attributeList::fromMap($map['AttributeList']);
        }

        if (isset($map['ModuleList'])) {
            $model->moduleList = moduleList::fromMap($map['ModuleList']);
        }

        return $model;
    }
}
