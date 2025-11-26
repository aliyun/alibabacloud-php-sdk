<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl\saleControlItems\saleControlItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl\saleControlItems\saleControlItem\conditionSaleControl\conditionControl;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl\saleControlItems\saleControlItem\conditionSaleControl\moduleValue;

class conditionSaleControl extends Model
{
    /**
     * @var conditionControl
     */
    public $conditionControl;

    /**
     * @var moduleValue
     */
    public $moduleValue;

    /**
     * @var string
     */
    public $stockValue;
    protected $_name = [
        'conditionControl' => 'ConditionControl',
        'moduleValue' => 'ModuleValue',
        'stockValue' => 'StockValue',
    ];

    public function validate()
    {
        if (null !== $this->conditionControl) {
            $this->conditionControl->validate();
        }
        if (null !== $this->moduleValue) {
            $this->moduleValue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionControl) {
            $res['ConditionControl'] = null !== $this->conditionControl ? $this->conditionControl->toArray($noStream) : $this->conditionControl;
        }

        if (null !== $this->moduleValue) {
            $res['ModuleValue'] = null !== $this->moduleValue ? $this->moduleValue->toArray($noStream) : $this->moduleValue;
        }

        if (null !== $this->stockValue) {
            $res['StockValue'] = $this->stockValue;
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
        if (isset($map['ConditionControl'])) {
            $model->conditionControl = conditionControl::fromMap($map['ConditionControl']);
        }

        if (isset($map['ModuleValue'])) {
            $model->moduleValue = moduleValue::fromMap($map['ModuleValue']);
        }

        if (isset($map['StockValue'])) {
            $model->stockValue = $map['StockValue'];
        }

        return $model;
    }
}
