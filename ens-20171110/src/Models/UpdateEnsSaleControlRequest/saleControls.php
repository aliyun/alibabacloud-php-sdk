<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlRequest;

use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlRequest\saleControls\conditionControls;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlRequest\saleControls\moduleValue;
use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description This parameter is required.
     *
     * @var moduleValue
     */
    public $moduleValue;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $operator;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'conditionControls' => 'ConditionControls',
        'description'       => 'Description',
        'moduleCode'        => 'ModuleCode',
        'moduleValue'       => 'ModuleValue',
        'operator'          => 'Operator',
        'orderType'         => 'OrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionControls) {
            $res['ConditionControls'] = [];
            if (null !== $this->conditionControls && \is_array($this->conditionControls)) {
                $n = 0;
                foreach ($this->conditionControls as $item) {
                    $res['ConditionControls'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['ModuleValue'] = null !== $this->moduleValue ? $this->moduleValue->toMap() : null;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saleControls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionControls'])) {
            if (!empty($map['ConditionControls'])) {
                $model->conditionControls = [];
                $n                        = 0;
                foreach ($map['ConditionControls'] as $item) {
                    $model->conditionControls[$n++] = null !== $item ? conditionControls::fromMap($item) : $item;
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
