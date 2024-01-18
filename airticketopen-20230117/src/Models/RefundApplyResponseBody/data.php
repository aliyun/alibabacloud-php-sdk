<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyResponseBody;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyResponseBody\data\refundResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 4966***617111
     *
     * @var int
     */
    public $orderNum;

    /**
     * @var refundResults[]
     */
    public $refundResults;
    protected $_name = [
        'orderNum'      => 'order_num',
        'refundResults' => 'refund_results',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }
        if (null !== $this->refundResults) {
            $res['refund_results'] = [];
            if (null !== $this->refundResults && \is_array($this->refundResults)) {
                $n = 0;
                foreach ($this->refundResults as $item) {
                    $res['refund_results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }
        if (isset($map['refund_results'])) {
            if (!empty($map['refund_results'])) {
                $model->refundResults = [];
                $n                    = 0;
                foreach ($map['refund_results'] as $item) {
                    $model->refundResults[$n++] = null !== $item ? refundResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
