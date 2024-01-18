<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\multiRefundDetails;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\passengerRefundDetails;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\refundJourneys;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $containMultiRefund;

    /**
     * @var multiRefundDetails[]
     */
    public $multiRefundDetails;

    /**
     * @example 4966***617111
     *
     * @var int
     */
    public $orderNum;

    /**
     * @var passengerRefundDetails[]
     */
    public $passengerRefundDetails;

    /**
     * @example 1677229005000
     *
     * @var int
     */
    public $paySuccessUtcTime;

    /**
     * @example [zzz,yyy]
     *
     * @var string[]
     */
    public $refundAttachmentUrls;

    /**
     * @var refundJourneys[]
     */
    public $refundJourneys;

    /**
     * @example 4966***617654
     *
     * @var int
     */
    public $refundOrderNum;

    /**
     * @example desc reason
     *
     * @var string
     */
    public $refundReason;

    /**
     * @example 5
     *
     * @var int
     */
    public $refundType;

    /**
     * @example refuse reason
     *
     * @var string
     */
    public $refuseReason;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 1677229005000
     *
     * @var string
     */
    public $transactionNo;

    /**
     * @example 1677229002000
     *
     * @var int
     */
    public $utcCreateTime;
    protected $_name = [
        'containMultiRefund'     => 'contain_multi_refund',
        'multiRefundDetails'     => 'multi_refund_details',
        'orderNum'               => 'order_num',
        'passengerRefundDetails' => 'passenger_refund_details',
        'paySuccessUtcTime'      => 'pay_success_utc_time',
        'refundAttachmentUrls'   => 'refund_attachment_urls',
        'refundJourneys'         => 'refund_journeys',
        'refundOrderNum'         => 'refund_order_num',
        'refundReason'           => 'refund_reason',
        'refundType'             => 'refund_type',
        'refuseReason'           => 'refuse_reason',
        'status'                 => 'status',
        'transactionNo'          => 'transaction_no',
        'utcCreateTime'          => 'utc_create_time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containMultiRefund) {
            $res['contain_multi_refund'] = $this->containMultiRefund;
        }
        if (null !== $this->multiRefundDetails) {
            $res['multi_refund_details'] = [];
            if (null !== $this->multiRefundDetails && \is_array($this->multiRefundDetails)) {
                $n = 0;
                foreach ($this->multiRefundDetails as $item) {
                    $res['multi_refund_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }
        if (null !== $this->passengerRefundDetails) {
            $res['passenger_refund_details'] = [];
            if (null !== $this->passengerRefundDetails && \is_array($this->passengerRefundDetails)) {
                $n = 0;
                foreach ($this->passengerRefundDetails as $item) {
                    $res['passenger_refund_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->paySuccessUtcTime) {
            $res['pay_success_utc_time'] = $this->paySuccessUtcTime;
        }
        if (null !== $this->refundAttachmentUrls) {
            $res['refund_attachment_urls'] = $this->refundAttachmentUrls;
        }
        if (null !== $this->refundJourneys) {
            $res['refund_journeys'] = [];
            if (null !== $this->refundJourneys && \is_array($this->refundJourneys)) {
                $n = 0;
                foreach ($this->refundJourneys as $item) {
                    $res['refund_journeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->refundOrderNum) {
            $res['refund_order_num'] = $this->refundOrderNum;
        }
        if (null !== $this->refundReason) {
            $res['refund_reason'] = $this->refundReason;
        }
        if (null !== $this->refundType) {
            $res['refund_type'] = $this->refundType;
        }
        if (null !== $this->refuseReason) {
            $res['refuse_reason'] = $this->refuseReason;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->transactionNo) {
            $res['transaction_no'] = $this->transactionNo;
        }
        if (null !== $this->utcCreateTime) {
            $res['utc_create_time'] = $this->utcCreateTime;
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
        if (isset($map['contain_multi_refund'])) {
            $model->containMultiRefund = $map['contain_multi_refund'];
        }
        if (isset($map['multi_refund_details'])) {
            if (!empty($map['multi_refund_details'])) {
                $model->multiRefundDetails = [];
                $n                         = 0;
                foreach ($map['multi_refund_details'] as $item) {
                    $model->multiRefundDetails[$n++] = null !== $item ? multiRefundDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }
        if (isset($map['passenger_refund_details'])) {
            if (!empty($map['passenger_refund_details'])) {
                $model->passengerRefundDetails = [];
                $n                             = 0;
                foreach ($map['passenger_refund_details'] as $item) {
                    $model->passengerRefundDetails[$n++] = null !== $item ? passengerRefundDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pay_success_utc_time'])) {
            $model->paySuccessUtcTime = $map['pay_success_utc_time'];
        }
        if (isset($map['refund_attachment_urls'])) {
            if (!empty($map['refund_attachment_urls'])) {
                $model->refundAttachmentUrls = $map['refund_attachment_urls'];
            }
        }
        if (isset($map['refund_journeys'])) {
            if (!empty($map['refund_journeys'])) {
                $model->refundJourneys = [];
                $n                     = 0;
                foreach ($map['refund_journeys'] as $item) {
                    $model->refundJourneys[$n++] = null !== $item ? refundJourneys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['refund_order_num'])) {
            $model->refundOrderNum = $map['refund_order_num'];
        }
        if (isset($map['refund_reason'])) {
            $model->refundReason = $map['refund_reason'];
        }
        if (isset($map['refund_type'])) {
            $model->refundType = $map['refund_type'];
        }
        if (isset($map['refuse_reason'])) {
            $model->refuseReason = $map['refuse_reason'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['transaction_no'])) {
            $model->transactionNo = $map['transaction_no'];
        }
        if (isset($map['utc_create_time'])) {
            $model->utcCreateTime = $map['utc_create_time'];
        }

        return $model;
    }
}
