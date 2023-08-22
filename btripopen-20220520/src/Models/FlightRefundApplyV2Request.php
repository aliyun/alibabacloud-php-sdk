<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyV2Request\passengerSegmentRelations;
use AlibabaCloud\Tea\Model;

class FlightRefundApplyV2Request extends Model
{
    /**
     * @example cheshiapi
     *
     * @var string
     */
    public $isvName;

    /**
     * @example 1683901850297448082
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 1017002195370467137
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 1019195836916039
     *
     * @var string
     */
    public $outSubOrderId;

    /**
     * @var passengerSegmentRelations[]
     */
    public $passengerSegmentRelations;

    /**
     * @example 2
     *
     * @var int
     */
    public $preCalType;

    /**
     * @var string
     */
    public $refundReason;

    /**
     * @example 2
     *
     * @var int
     */
    public $refundReasonType;

    /**
     * @var string[]
     */
    public $ticketNos;

    /**
     * @example 10000
     *
     * @var int
     */
    public $totalRefundPrice;

    /**
     * @var string
     */
    public $uploadPictUrls;

    /**
     * @example true
     *
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'isvName'                   => 'isv_name',
        'orderId'                   => 'order_id',
        'outOrderId'                => 'out_order_id',
        'outSubOrderId'             => 'out_sub_order_id',
        'passengerSegmentRelations' => 'passenger_segment_relations',
        'preCalType'                => 'pre_cal_type',
        'refundReason'              => 'refund_reason',
        'refundReasonType'          => 'refund_reason_type',
        'ticketNos'                 => 'ticket_nos',
        'totalRefundPrice'          => 'total_refund_price',
        'uploadPictUrls'            => 'upload_pict_urls',
        'voluntary'                 => 'voluntary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->outSubOrderId) {
            $res['out_sub_order_id'] = $this->outSubOrderId;
        }
        if (null !== $this->passengerSegmentRelations) {
            $res['passenger_segment_relations'] = [];
            if (null !== $this->passengerSegmentRelations && \is_array($this->passengerSegmentRelations)) {
                $n = 0;
                foreach ($this->passengerSegmentRelations as $item) {
                    $res['passenger_segment_relations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preCalType) {
            $res['pre_cal_type'] = $this->preCalType;
        }
        if (null !== $this->refundReason) {
            $res['refund_reason'] = $this->refundReason;
        }
        if (null !== $this->refundReasonType) {
            $res['refund_reason_type'] = $this->refundReasonType;
        }
        if (null !== $this->ticketNos) {
            $res['ticket_nos'] = $this->ticketNos;
        }
        if (null !== $this->totalRefundPrice) {
            $res['total_refund_price'] = $this->totalRefundPrice;
        }
        if (null !== $this->uploadPictUrls) {
            $res['upload_pict_urls'] = $this->uploadPictUrls;
        }
        if (null !== $this->voluntary) {
            $res['voluntary'] = $this->voluntary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightRefundApplyV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['out_sub_order_id'])) {
            $model->outSubOrderId = $map['out_sub_order_id'];
        }
        if (isset($map['passenger_segment_relations'])) {
            if (!empty($map['passenger_segment_relations'])) {
                $model->passengerSegmentRelations = [];
                $n                                = 0;
                foreach ($map['passenger_segment_relations'] as $item) {
                    $model->passengerSegmentRelations[$n++] = null !== $item ? passengerSegmentRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pre_cal_type'])) {
            $model->preCalType = $map['pre_cal_type'];
        }
        if (isset($map['refund_reason'])) {
            $model->refundReason = $map['refund_reason'];
        }
        if (isset($map['refund_reason_type'])) {
            $model->refundReasonType = $map['refund_reason_type'];
        }
        if (isset($map['ticket_nos'])) {
            if (!empty($map['ticket_nos'])) {
                $model->ticketNos = $map['ticket_nos'];
            }
        }
        if (isset($map['total_refund_price'])) {
            $model->totalRefundPrice = $map['total_refund_price'];
        }
        if (isset($map['upload_pict_urls'])) {
            $model->uploadPictUrls = $map['upload_pict_urls'];
        }
        if (isset($map['voluntary'])) {
            $model->voluntary = $map['voluntary'];
        }

        return $model;
    }
}
