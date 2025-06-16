<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyResponseBody\data\refundResults\refundPassengers;

class refundResults extends Model
{
    /**
     * @var string
     */
    public $failReason;

    /**
     * @var int
     */
    public $refundOrderNum;

    /**
     * @var refundPassengers[]
     */
    public $refundPassengers;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'failReason' => 'fail_reason',
        'refundOrderNum' => 'refund_order_num',
        'refundPassengers' => 'refund_passengers',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->refundPassengers)) {
            Model::validateArray($this->refundPassengers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failReason) {
            $res['fail_reason'] = $this->failReason;
        }

        if (null !== $this->refundOrderNum) {
            $res['refund_order_num'] = $this->refundOrderNum;
        }

        if (null !== $this->refundPassengers) {
            if (\is_array($this->refundPassengers)) {
                $res['refund_passengers'] = [];
                $n1 = 0;
                foreach ($this->refundPassengers as $item1) {
                    $res['refund_passengers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['fail_reason'])) {
            $model->failReason = $map['fail_reason'];
        }

        if (isset($map['refund_order_num'])) {
            $model->refundOrderNum = $map['refund_order_num'];
        }

        if (isset($map['refund_passengers'])) {
            if (!empty($map['refund_passengers'])) {
                $model->refundPassengers = [];
                $n1 = 0;
                foreach ($map['refund_passengers'] as $item1) {
                    $model->refundPassengers[$n1] = refundPassengers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
