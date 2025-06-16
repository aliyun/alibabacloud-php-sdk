<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AccountFlowListResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var float
     */
    public $afterAvailableAmount;

    /**
     * @var float
     */
    public $beforeAvailableAmount;

    /**
     * @var int
     */
    public $changeOrderNum;

    /**
     * @var int
     */
    public $flowId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var float
     */
    public $opAmount;

    /**
     * @var int
     */
    public $opType;

    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var string
     */
    public $outOrderNum;

    /**
     * @var int
     */
    public $refundOrderNum;
    protected $_name = [
        'afterAvailableAmount' => 'after_available_amount',
        'beforeAvailableAmount' => 'before_available_amount',
        'changeOrderNum' => 'change_order_num',
        'flowId' => 'flow_id',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'opAmount' => 'op_amount',
        'opType' => 'op_type',
        'orderNum' => 'order_num',
        'orderType' => 'order_type',
        'outOrderNum' => 'out_order_num',
        'refundOrderNum' => 'refund_order_num',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->afterAvailableAmount) {
            $res['after_available_amount'] = $this->afterAvailableAmount;
        }

        if (null !== $this->beforeAvailableAmount) {
            $res['before_available_amount'] = $this->beforeAvailableAmount;
        }

        if (null !== $this->changeOrderNum) {
            $res['change_order_num'] = $this->changeOrderNum;
        }

        if (null !== $this->flowId) {
            $res['flow_id'] = $this->flowId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }

        if (null !== $this->opAmount) {
            $res['op_amount'] = $this->opAmount;
        }

        if (null !== $this->opType) {
            $res['op_type'] = $this->opType;
        }

        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }

        if (null !== $this->outOrderNum) {
            $res['out_order_num'] = $this->outOrderNum;
        }

        if (null !== $this->refundOrderNum) {
            $res['refund_order_num'] = $this->refundOrderNum;
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
        if (isset($map['after_available_amount'])) {
            $model->afterAvailableAmount = $map['after_available_amount'];
        }

        if (isset($map['before_available_amount'])) {
            $model->beforeAvailableAmount = $map['before_available_amount'];
        }

        if (isset($map['change_order_num'])) {
            $model->changeOrderNum = $map['change_order_num'];
        }

        if (isset($map['flow_id'])) {
            $model->flowId = $map['flow_id'];
        }

        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }

        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }

        if (isset($map['op_amount'])) {
            $model->opAmount = $map['op_amount'];
        }

        if (isset($map['op_type'])) {
            $model->opType = $map['op_type'];
        }

        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        if (isset($map['order_type'])) {
            $model->orderType = $map['order_type'];
        }

        if (isset($map['out_order_num'])) {
            $model->outOrderNum = $map['out_order_num'];
        }

        if (isset($map['refund_order_num'])) {
            $model->refundOrderNum = $map['refund_order_num'];
        }

        return $model;
    }
}
