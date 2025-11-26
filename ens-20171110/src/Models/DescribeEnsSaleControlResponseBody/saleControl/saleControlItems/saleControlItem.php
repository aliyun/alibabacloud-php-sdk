<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody\saleControl\saleControlItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody\saleControl\saleControlItems\saleControlItem\basicSaleControl;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody\saleControl\saleControlItems\saleControlItem\conditionSaleControl;

class saleControlItem extends Model
{
    /**
     * @var basicSaleControl
     */
    public $basicSaleControl;

    /**
     * @var conditionSaleControl[]
     */
    public $conditionSaleControl;
    protected $_name = [
        'basicSaleControl' => 'BasicSaleControl',
        'conditionSaleControl' => 'ConditionSaleControl',
    ];

    public function validate()
    {
        if (null !== $this->basicSaleControl) {
            $this->basicSaleControl->validate();
        }
        if (\is_array($this->conditionSaleControl)) {
            Model::validateArray($this->conditionSaleControl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicSaleControl) {
            $res['BasicSaleControl'] = null !== $this->basicSaleControl ? $this->basicSaleControl->toArray($noStream) : $this->basicSaleControl;
        }

        if (null !== $this->conditionSaleControl) {
            if (\is_array($this->conditionSaleControl)) {
                $res['ConditionSaleControl'] = [];
                $n1 = 0;
                foreach ($this->conditionSaleControl as $item1) {
                    $res['ConditionSaleControl'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BasicSaleControl'])) {
            $model->basicSaleControl = basicSaleControl::fromMap($map['BasicSaleControl']);
        }

        if (isset($map['ConditionSaleControl'])) {
            if (!empty($map['ConditionSaleControl'])) {
                $model->conditionSaleControl = [];
                $n1 = 0;
                foreach ($map['ConditionSaleControl'] as $item1) {
                    $model->conditionSaleControl[$n1] = conditionSaleControl::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
