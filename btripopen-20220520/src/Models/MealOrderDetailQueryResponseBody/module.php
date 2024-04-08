<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderDetailQueryResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 2024032522001423601409393178
     *
     * @var string
     */
    public $corpCodeOrderId;

    /**
     * @example dingaa15ca45cba9ee744a5
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 100
     *
     * @var int
     */
    public $corpPayAmount;

    /**
     * @example 100
     *
     * @var int
     */
    public $corpRefundAmount;

    /**
     * @var string
     */
    public $merchantName;

    /**
     * @example 1034088398073015303
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderSubStatus;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @example 100
     *
     * @var int
     */
    public $payAmount;

    /**
     * @example 1
     *
     * @var int
     */
    public $payType;

    /**
     * @example 100
     *
     * @var int
     */
    public $personPayAmount;

    /**
     * @example 100
     *
     * @var int
     */
    public $personRefundAmount;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundAmount;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @example 1711702782
     *
     * @var string
     */
    public $settleTime;

    /**
     * @example 17509140000
     *
     * @var string
     */
    public $userAlipayId;

    /**
     * @example 014134681304653773
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'corpCodeOrderId'    => 'corp_code_order_id',
        'corpId'             => 'corp_id',
        'corpPayAmount'      => 'corp_pay_amount',
        'corpRefundAmount'   => 'corp_refund_amount',
        'merchantName'       => 'merchant_name',
        'orderId'            => 'order_id',
        'orderStatus'        => 'order_status',
        'orderSubStatus'     => 'order_sub_status',
        'orderType'          => 'order_type',
        'payAmount'          => 'pay_amount',
        'payType'            => 'pay_type',
        'personPayAmount'    => 'person_pay_amount',
        'personRefundAmount' => 'person_refund_amount',
        'refundAmount'       => 'refund_amount',
        'sceneName'          => 'scene_name',
        'settleTime'         => 'settle_time',
        'userAlipayId'       => 'user_alipay_id',
        'userId'             => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpCodeOrderId) {
            $res['corp_code_order_id'] = $this->corpCodeOrderId;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->corpPayAmount) {
            $res['corp_pay_amount'] = $this->corpPayAmount;
        }
        if (null !== $this->corpRefundAmount) {
            $res['corp_refund_amount'] = $this->corpRefundAmount;
        }
        if (null !== $this->merchantName) {
            $res['merchant_name'] = $this->merchantName;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }
        if (null !== $this->orderSubStatus) {
            $res['order_sub_status'] = $this->orderSubStatus;
        }
        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }
        if (null !== $this->payAmount) {
            $res['pay_amount'] = $this->payAmount;
        }
        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }
        if (null !== $this->personPayAmount) {
            $res['person_pay_amount'] = $this->personPayAmount;
        }
        if (null !== $this->personRefundAmount) {
            $res['person_refund_amount'] = $this->personRefundAmount;
        }
        if (null !== $this->refundAmount) {
            $res['refund_amount'] = $this->refundAmount;
        }
        if (null !== $this->sceneName) {
            $res['scene_name'] = $this->sceneName;
        }
        if (null !== $this->settleTime) {
            $res['settle_time'] = $this->settleTime;
        }
        if (null !== $this->userAlipayId) {
            $res['user_alipay_id'] = $this->userAlipayId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corp_code_order_id'])) {
            $model->corpCodeOrderId = $map['corp_code_order_id'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['corp_pay_amount'])) {
            $model->corpPayAmount = $map['corp_pay_amount'];
        }
        if (isset($map['corp_refund_amount'])) {
            $model->corpRefundAmount = $map['corp_refund_amount'];
        }
        if (isset($map['merchant_name'])) {
            $model->merchantName = $map['merchant_name'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }
        if (isset($map['order_sub_status'])) {
            $model->orderSubStatus = $map['order_sub_status'];
        }
        if (isset($map['order_type'])) {
            $model->orderType = $map['order_type'];
        }
        if (isset($map['pay_amount'])) {
            $model->payAmount = $map['pay_amount'];
        }
        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }
        if (isset($map['person_pay_amount'])) {
            $model->personPayAmount = $map['person_pay_amount'];
        }
        if (isset($map['person_refund_amount'])) {
            $model->personRefundAmount = $map['person_refund_amount'];
        }
        if (isset($map['refund_amount'])) {
            $model->refundAmount = $map['refund_amount'];
        }
        if (isset($map['scene_name'])) {
            $model->sceneName = $map['scene_name'];
        }
        if (isset($map['settle_time'])) {
            $model->settleTime = $map['settle_time'];
        }
        if (isset($map['user_alipay_id'])) {
            $model->userAlipayId = $map['user_alipay_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
