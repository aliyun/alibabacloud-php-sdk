<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeBandwidthPriceResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeBandwidthPriceResponseBody\priceInfo\order;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeBandwidthPriceResponseBody\priceInfo\rules;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @var order
     */
    public $order;

    /**
     * @var rules
     */
    public $rules;
    protected $_name = [
        'order' => 'Order',
        'rules' => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = null !== $this->order ? $this->order->toMap() : null;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Order'])) {
            $model->order = order::fromMap($map['Order']);
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        return $model;
    }
}
