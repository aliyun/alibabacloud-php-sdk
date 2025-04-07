<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\trafficPrice\order;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\trafficPrice\rules;
use AlibabaCloud\Tea\Model;

class trafficPrice extends Model
{
    /**
     * @description The information about pricing.
     *
     * @var order
     */
    public $order;

    /**
     * @description The discount rule.
     *
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'order' => 'Order',
        'rules' => 'Rules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toMap() : null;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficPrice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Order'])) {
            $model->order = order::fromMap($map['Order']);
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
