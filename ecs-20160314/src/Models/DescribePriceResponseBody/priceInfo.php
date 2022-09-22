<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\order;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\orderParams;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\priceWarning;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\rules;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @var order
     */
    public $order;

    /**
     * @var orderParams
     */
    public $orderParams;

    /**
     * @var priceWarning
     */
    public $priceWarning;

    /**
     * @var rules
     */
    public $rules;
    protected $_name = [
        'order'        => 'Order',
        'orderParams'  => 'OrderParams',
        'priceWarning' => 'PriceWarning',
        'rules'        => 'Rules',
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
        if (null !== $this->orderParams) {
            $res['OrderParams'] = null !== $this->orderParams ? $this->orderParams->toMap() : null;
        }
        if (null !== $this->priceWarning) {
            $res['PriceWarning'] = null !== $this->priceWarning ? $this->priceWarning->toMap() : null;
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
        if (isset($map['OrderParams'])) {
            $model->orderParams = orderParams::fromMap($map['OrderParams']);
        }
        if (isset($map['PriceWarning'])) {
            $model->priceWarning = priceWarning::fromMap($map['PriceWarning']);
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        return $model;
    }
}
