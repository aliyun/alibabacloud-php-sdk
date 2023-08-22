<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightRefundApplyV2ShrinkRequest extends Model
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
     * @var string
     */
    public $passengerSegmentRelationsShrink;

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
     * @var string
     */
    public $ticketNosShrink;

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
        'isvName'                         => 'isv_name',
        'orderId'                         => 'order_id',
        'outOrderId'                      => 'out_order_id',
        'outSubOrderId'                   => 'out_sub_order_id',
        'passengerSegmentRelationsShrink' => 'passenger_segment_relations',
        'preCalType'                      => 'pre_cal_type',
        'refundReason'                    => 'refund_reason',
        'refundReasonType'                => 'refund_reason_type',
        'ticketNosShrink'                 => 'ticket_nos',
        'totalRefundPrice'                => 'total_refund_price',
        'uploadPictUrls'                  => 'upload_pict_urls',
        'voluntary'                       => 'voluntary',
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
        if (null !== $this->passengerSegmentRelationsShrink) {
            $res['passenger_segment_relations'] = $this->passengerSegmentRelationsShrink;
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
        if (null !== $this->ticketNosShrink) {
            $res['ticket_nos'] = $this->ticketNosShrink;
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
     * @return FlightRefundApplyV2ShrinkRequest
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
            $model->passengerSegmentRelationsShrink = $map['passenger_segment_relations'];
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
            $model->ticketNosShrink = $map['ticket_nos'];
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
