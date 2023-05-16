<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody\saleControl\saleControlItems;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody\saleControl\saleControlItems\saleControlItem\basicSaleControl;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponseBody\saleControl\saleControlItems\saleControlItem\conditionSaleControl;
use AlibabaCloud\Tea\Model;

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
        'basicSaleControl'     => 'BasicSaleControl',
        'conditionSaleControl' => 'ConditionSaleControl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicSaleControl) {
            $res['BasicSaleControl'] = null !== $this->basicSaleControl ? $this->basicSaleControl->toMap() : null;
        }
        if (null !== $this->conditionSaleControl) {
            $res['ConditionSaleControl'] = [];
            if (null !== $this->conditionSaleControl && \is_array($this->conditionSaleControl)) {
                $n = 0;
                foreach ($this->conditionSaleControl as $item) {
                    $res['ConditionSaleControl'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saleControlItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicSaleControl'])) {
            $model->basicSaleControl = basicSaleControl::fromMap($map['BasicSaleControl']);
        }
        if (isset($map['ConditionSaleControl'])) {
            if (!empty($map['ConditionSaleControl'])) {
                $model->conditionSaleControl = [];
                $n                           = 0;
                foreach ($map['ConditionSaleControl'] as $item) {
                    $model->conditionSaleControl[$n++] = null !== $item ? conditionSaleControl::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
