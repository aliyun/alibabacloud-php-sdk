<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyResponseBody\data\refundResults;

class data extends Model
{
    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var refundResults[]
     */
    public $refundResults;
    protected $_name = [
        'orderNum' => 'order_num',
        'refundResults' => 'refund_results',
    ];

    public function validate()
    {
        if (\is_array($this->refundResults)) {
            Model::validateArray($this->refundResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        if (null !== $this->refundResults) {
            if (\is_array($this->refundResults)) {
                $res['refund_results'] = [];
                $n1 = 0;
                foreach ($this->refundResults as $item1) {
                    $res['refund_results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        if (isset($map['refund_results'])) {
            if (!empty($map['refund_results'])) {
                $model->refundResults = [];
                $n1 = 0;
                foreach ($map['refund_results'] as $item1) {
                    $model->refundResults[$n1] = refundResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
