<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\multiRefundDetails\passengerMultiRefundDetails;
use AlibabaCloud\Tea\Model;

class multiRefundDetails extends Model
{
    /**
     * @example 498843***6950
     *
     * @var int
     */
    public $multiRefundOrderNum;

    /**
     * @example 498843***6950
     *
     * @var string
     */
    public $multiRefundTransactionNo;

    /**
     * @var passengerMultiRefundDetails[]
     */
    public $passengerMultiRefundDetails;
    protected $_name = [
        'multiRefundOrderNum'         => 'multi_refund_order_num',
        'multiRefundTransactionNo'    => 'multi_refund_transaction_no',
        'passengerMultiRefundDetails' => 'passenger_multi_refund_details',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multiRefundOrderNum) {
            $res['multi_refund_order_num'] = $this->multiRefundOrderNum;
        }
        if (null !== $this->multiRefundTransactionNo) {
            $res['multi_refund_transaction_no'] = $this->multiRefundTransactionNo;
        }
        if (null !== $this->passengerMultiRefundDetails) {
            $res['passenger_multi_refund_details'] = [];
            if (null !== $this->passengerMultiRefundDetails && \is_array($this->passengerMultiRefundDetails)) {
                $n = 0;
                foreach ($this->passengerMultiRefundDetails as $item) {
                    $res['passenger_multi_refund_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiRefundDetails
     */
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
                $n                                  = 0;
                foreach ($map['passenger_multi_refund_details'] as $item) {
                    $model->passengerMultiRefundDetails[$n++] = null !== $item ? passengerMultiRefundDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
