<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var order
     */
    public $order;
    protected $_name = [
        'order' => 'order',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['order'] = null !== $this->order ? $this->order->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['order'])) {
            $model->order = order::fromMap($map['order']);
        }

        return $model;
    }
}
