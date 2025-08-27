<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundDetailResponseBody\module\passengeRefundFeeDetailList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundDetailResponseBody\module\passengerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundDetailResponseBody\module\refundOrderInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundDetailResponseBody\module\segmentList;

class module extends Model
{
    /**
     * @var passengeRefundFeeDetailList[]
     */
    public $passengeRefundFeeDetailList;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @var refundOrderInfo
     */
    public $refundOrderInfo;

    /**
     * @var segmentList[]
     */
    public $segmentList;
    protected $_name = [
        'passengeRefundFeeDetailList' => 'passenge_refund_fee_detail_list',
        'passengerList' => 'passenger_list',
        'refundOrderInfo' => 'refund_order_info',
        'segmentList' => 'segment_list',
    ];

    public function validate()
    {
        if (\is_array($this->passengeRefundFeeDetailList)) {
            Model::validateArray($this->passengeRefundFeeDetailList);
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        if (null !== $this->refundOrderInfo) {
            $this->refundOrderInfo->validate();
        }
        if (\is_array($this->segmentList)) {
            Model::validateArray($this->segmentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengeRefundFeeDetailList) {
            if (\is_array($this->passengeRefundFeeDetailList)) {
                $res['passenge_refund_fee_detail_list'] = [];
                $n1 = 0;
                foreach ($this->passengeRefundFeeDetailList as $item1) {
                    $res['passenge_refund_fee_detail_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passengerList) {
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundOrderInfo) {
            $res['refund_order_info'] = null !== $this->refundOrderInfo ? $this->refundOrderInfo->toArray($noStream) : $this->refundOrderInfo;
        }

        if (null !== $this->segmentList) {
            if (\is_array($this->segmentList)) {
                $res['segment_list'] = [];
                $n1 = 0;
                foreach ($this->segmentList as $item1) {
                    $res['segment_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['passenge_refund_fee_detail_list'])) {
            if (!empty($map['passenge_refund_fee_detail_list'])) {
                $model->passengeRefundFeeDetailList = [];
                $n1 = 0;
                foreach ($map['passenge_refund_fee_detail_list'] as $item1) {
                    $model->passengeRefundFeeDetailList[$n1] = passengeRefundFeeDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1] = passengerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['refund_order_info'])) {
            $model->refundOrderInfo = refundOrderInfo::fromMap($map['refund_order_info']);
        }

        if (isset($map['segment_list'])) {
            if (!empty($map['segment_list'])) {
                $model->segmentList = [];
                $n1 = 0;
                foreach ($map['segment_list'] as $item1) {
                    $model->segmentList[$n1] = segmentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
