<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealOrderDetailQueryResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var string
     */
    public $corpCodeOrderId;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var int
     */
    public $corpPayAmount;

    /**
     * @var int
     */
    public $corpRefundAmount;

    /**
     * @var string
     */
    public $mealReason;

    /**
     * @var string
     */
    public $merchantName;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var int
     */
    public $orderSubStatus;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $payAmount;

    /**
     * @var int
     */
    public $payType;

    /**
     * @var int
     */
    public $personPayAmount;

    /**
     * @var int
     */
    public $personRefundAmount;

    /**
     * @var int
     */
    public $refundAmount;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $settleTime;

    /**
     * @var string
     */
    public $thirdPartApplyId;

    /**
     * @var string
     */
    public $userAlipayId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'applyId' => 'apply_id',
        'corpCodeOrderId' => 'corp_code_order_id',
        'corpId' => 'corp_id',
        'corpPayAmount' => 'corp_pay_amount',
        'corpRefundAmount' => 'corp_refund_amount',
        'mealReason' => 'meal_reason',
        'merchantName' => 'merchant_name',
        'orderId' => 'order_id',
        'orderStatus' => 'order_status',
        'orderSubStatus' => 'order_sub_status',
        'orderType' => 'order_type',
        'payAmount' => 'pay_amount',
        'payType' => 'pay_type',
        'personPayAmount' => 'person_pay_amount',
        'personRefundAmount' => 'person_refund_amount',
        'refundAmount' => 'refund_amount',
        'sceneName' => 'scene_name',
        'settleTime' => 'settle_time',
        'thirdPartApplyId' => 'third_part_apply_id',
        'userAlipayId' => 'user_alipay_id',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

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

        if (null !== $this->mealReason) {
            $res['meal_reason'] = $this->mealReason;
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

        if (null !== $this->thirdPartApplyId) {
            $res['third_part_apply_id'] = $this->thirdPartApplyId;
        }

        if (null !== $this->userAlipayId) {
            $res['user_alipay_id'] = $this->userAlipayId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

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

        if (isset($map['meal_reason'])) {
            $model->mealReason = $map['meal_reason'];
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

        if (isset($map['third_part_apply_id'])) {
            $model->thirdPartApplyId = $map['third_part_apply_id'];
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
