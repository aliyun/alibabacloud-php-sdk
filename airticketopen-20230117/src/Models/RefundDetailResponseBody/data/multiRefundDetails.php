<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\multiRefundDetails\passengerMultiRefundDetails;

class multiRefundDetails extends Model
{
    /**
     * @var int
     */
    public $multiRefundOrderNum;

    /**
     * @var string
     */
    public $multiRefundTransactionNo;

    /**
     * @var passengerMultiRefundDetails[]
     */
    public $passengerMultiRefundDetails;
    protected $_name = [
        'multiRefundOrderNum' => 'multi_refund_order_num',
        'multiRefundTransactionNo' => 'multi_refund_transaction_no',
        'passengerMultiRefundDetails' => 'passenger_multi_refund_details',
    ];

    public function validate()
    {
        if (\is_array($this->passengerMultiRefundDetails)) {
            Model::validateArray($this->passengerMultiRefundDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->multiRefundOrderNum) {
            $res['multi_refund_order_num'] = $this->multiRefundOrderNum;
        }

        if (null !== $this->multiRefundTransactionNo) {
            $res['multi_refund_transaction_no'] = $this->multiRefundTransactionNo;
        }

        if (null !== $this->passengerMultiRefundDetails) {
            if (\is_array($this->passengerMultiRefundDetails)) {
                $res['passenger_multi_refund_details'] = [];
                $n1 = 0;
                foreach ($this->passengerMultiRefundDetails as $item1) {
                    $res['passenger_multi_refund_details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['multi_refund_order_num'])) {
            $model->multiRefundOrderNum = $map['multi_refund_order_num'];
        }

        if (isset($map['multi_refund_transaction_no'])) {
            $model->multiRefundTransactionNo = $map['multi_refund_transaction_no'];
        }

        if (isset($map['passenger_multi_refund_details'])) {
            if (!empty($map['passenger_multi_refund_details'])) {
                $model->passengerMultiRefundDetails = [];
                $n1 = 0;
                foreach ($map['passenger_multi_refund_details'] as $item1) {
                    $model->passengerMultiRefundDetails[$n1] = passengerMultiRefundDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
