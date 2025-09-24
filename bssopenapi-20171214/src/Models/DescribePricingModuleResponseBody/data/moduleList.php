<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\moduleList\module;

class moduleList extends Model
{
    /**
     * @var module[]
     */
    public $module;
    protected $_name = [
        'module' => 'Module',
    ];

    public function validate()
    {
        if (\is_array($this->module)) {
            Model::validateArray($this->module);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->module) {
            if (\is_array($this->module)) {
                $res['Module'] = [];
                $n1 = 0;
                foreach ($this->module as $item1) {
                    $res['Module'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Module'])) {
            if (!empty($map['Module'])) {
                $model->module = [];
                $n1 = 0;
                foreach ($map['Module'] as $item1) {
                    $model->module[$n1] = module::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
