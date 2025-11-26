<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody\saleControl\saleControlItems\saleControlItem\basicSaleControl;

use AlibabaCloud\Dara\Model;

class moduleValue extends Model
{
    /**
     * @var string
     */
    public $moduleMaxValue;

    /**
     * @var string
     */
    public $moduleMinValue;

    /**
     * @var string[]
     */
    public $moduleValue;
    protected $_name = [
        'moduleMaxValue' => 'ModuleMaxValue',
        'moduleMinValue' => 'ModuleMinValue',
        'moduleValue' => 'ModuleValue',
    ];

    public function validate()
    {
        if (\is_array($this->moduleValue)) {
            Model::validateArray($this->moduleValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleMaxValue) {
            $res['ModuleMaxValue'] = $this->moduleMaxValue;
        }

        if (null !== $this->moduleMinValue) {
            $res['ModuleMinValue'] = $this->moduleMinValue;
        }

        if (null !== $this->moduleValue) {
            if (\is_array($this->moduleValue)) {
                $res['ModuleValue'] = [];
                $n1 = 0;
                foreach ($this->moduleValue as $item1) {
                    $res['ModuleValue'][$n1] = $item1;
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
        if (isset($map['ModuleMaxValue'])) {
            $model->moduleMaxValue = $map['ModuleMaxValue'];
        }

        if (isset($map['ModuleMinValue'])) {
            $model->moduleMinValue = $map['ModuleMinValue'];
        }

        if (isset($map['ModuleValue'])) {
            if (!empty($map['ModuleValue'])) {
                $model->moduleValue = [];
                $n1 = 0;
                foreach ($map['ModuleValue'] as $item1) {
                    $model->moduleValue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
