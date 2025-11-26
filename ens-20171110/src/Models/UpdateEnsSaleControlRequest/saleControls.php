<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlRequest\saleControls\conditionControls;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlRequest\saleControls\moduleValue;

class saleControls extends Model
{
    /**
     * @var conditionControls[]
     */
    public $conditionControls;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var moduleValue
     */
    public $moduleValue;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $orderType;
    protected $_name = [
        'conditionControls' => 'ConditionControls',
        'description' => 'Description',
        'moduleCode' => 'ModuleCode',
        'moduleValue' => 'ModuleValue',
        'operator' => 'Operator',
        'orderType' => 'OrderType',
    ];

    public function validate()
    {
        if (\is_array($this->conditionControls)) {
            Model::validateArray($this->conditionControls);
        }
        if (null !== $this->moduleValue) {
            $this->moduleValue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionControls) {
            if (\is_array($this->conditionControls)) {
                $res['ConditionControls'] = [];
                $n1 = 0;
                foreach ($this->conditionControls as $item1) {
                    $res['ConditionControls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->moduleValue) {
            $res['ModuleValue'] = null !== $this->moduleValue ? $this->moduleValue->toArray($noStream) : $this->moduleValue;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
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
        if (isset($map['ConditionControls'])) {
            if (!empty($map['ConditionControls'])) {
                $model->conditionControls = [];
                $n1 = 0;
                foreach ($map['ConditionControls'] as $item1) {
                    $model->conditionControls[$n1] = conditionControls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['ModuleValue'])) {
            $model->moduleValue = moduleValue::fromMap($map['ModuleValue']);
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
