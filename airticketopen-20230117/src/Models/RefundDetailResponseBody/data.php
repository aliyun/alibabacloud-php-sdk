<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\multiRefundDetails;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\passengerRefundDetails;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundDetailResponseBody\data\refundJourneys;

class data extends Model
{
    /**
     * @var bool
     */
    public $containMultiRefund;

    /**
     * @var multiRefundDetails[]
     */
    public $multiRefundDetails;

    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var passengerRefundDetails[]
     */
    public $passengerRefundDetails;

    /**
     * @var int
     */
    public $paySuccessUtcTime;

    /**
     * @var string[]
     */
    public $refundAttachmentUrls;

    /**
     * @var refundJourneys[]
     */
    public $refundJourneys;

    /**
     * @var int
     */
    public $refundOrderNum;

    /**
     * @var string
     */
    public $refundReason;

    /**
     * @var int
     */
    public $refundType;

    /**
     * @var string
     */
    public $refuseReason;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $transactionNo;

    /**
     * @var int
     */
    public $utcCreateTime;
    protected $_name = [
        'containMultiRefund' => 'contain_multi_refund',
        'multiRefundDetails' => 'multi_refund_details',
        'orderNum' => 'order_num',
        'passengerRefundDetails' => 'passenger_refund_details',
        'paySuccessUtcTime' => 'pay_success_utc_time',
        'refundAttachmentUrls' => 'refund_attachment_urls',
        'refundJourneys' => 'refund_journeys',
        'refundOrderNum' => 'refund_order_num',
        'refundReason' => 'refund_reason',
        'refundType' => 'refund_type',
        'refuseReason' => 'refuse_reason',
        'status' => 'status',
        'transactionNo' => 'transaction_no',
        'utcCreateTime' => 'utc_create_time',
    ];

    public function validate()
    {
        if (\is_array($this->multiRefundDetails)) {
            Model::validateArray($this->multiRefundDetails);
        }
        if (\is_array($this->passengerRefundDetails)) {
            Model::validateArray($this->passengerRefundDetails);
        }
        if (\is_array($this->refundAttachmentUrls)) {
            Model::validateArray($this->refundAttachmentUrls);
        }
        if (\is_array($this->refundJourneys)) {
            Model::validateArray($this->refundJourneys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containMultiRefund) {
            $res['contain_multi_refund'] = $this->containMultiRefund;
        }

        if (null !== $this->multiRefundDetails) {
            if (\is_array($this->multiRefundDetails)) {
                $res['multi_refund_details'] = [];
                $n1 = 0;
                foreach ($this->multiRefundDetails as $item1) {
                    $res['multi_refund_details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        if (null !== $this->passengerRefundDetails) {
            if (\is_array($this->passengerRefundDetails)) {
                $res['passenger_refund_details'] = [];
                $n1 = 0;
                foreach ($this->passengerRefundDetails as $item1) {
                    $res['passenger_refund_details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paySuccessUtcTime) {
            $res['pay_success_utc_time'] = $this->paySuccessUtcTime;
        }

        if (null !== $this->refundAttachmentUrls) {
            if (\is_array($this->refundAttachmentUrls)) {
                $res['refund_attachment_urls'] = [];
                $n1 = 0;
                foreach ($this->refundAttachmentUrls as $item1) {
                    $res['refund_attachment_urls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundJourneys) {
            if (\is_array($this->refundJourneys)) {
                $res['refund_journeys'] = [];
                $n1 = 0;
                foreach ($this->refundJourneys as $item1) {
                    $res['refund_journeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contain_multi_refund'])) {
            $model->containMultiRefund = $map['contain_multi_refund'];
        }

        if (isset($map['multi_refund_details'])) {
            if (!empty($map['multi_refund_details'])) {
                $model->multiRefundDetails = [];
                $n1 = 0;
                foreach ($map['multi_refund_details'] as $item1) {
                    $model->multiRefundDetails[$n1] = multiRefundDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        if (isset($map['passenger_refund_details'])) {
            if (!empty($map['passenger_refund_details'])) {
                $model->passengerRefundDetails = [];
                $n1 = 0;
                foreach ($map['passenger_refund_details'] as $item1) {
                    $model->passengerRefundDetails[$n1] = passengerRefundDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pay_success_utc_time'])) {
            $model->paySuccessUtcTime = $map['pay_success_utc_time'];
        }

        if (isset($map['refund_attachment_urls'])) {
            if (!empty($map['refund_attachment_urls'])) {
                $model->refundAttachmentUrls = [];
                $n1 = 0;
                foreach ($map['refund_attachment_urls'] as $item1) {
                    $model->refundAttachmentUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['refund_journeys'])) {
            if (!empty($map['refund_journeys'])) {
                $model->refundJourneys = [];
                $n1 = 0;
                foreach ($map['refund_journeys'] as $item1) {
                    $model->refundJourneys[$n1] = refundJourneys::fromMap($item1);
                    ++$n1;
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
