<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AccountFlowListResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1000
     *
     * @var float
     */
    public $afterAvailableAmount;

    /**
     * @example 1950.5
     *
     * @var float
     */
    public $beforeAvailableAmount;

    /**
     * @example 49880***971
     *
     * @var int
     */
    public $changeOrderNum;

    /**
     * @example 1627239841225842666
     *
     * @var int
     */
    public $flowId;

    /**
     * @example 1676799185000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1676966530000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 950.5
     *
     * @var float
     */
    public $opAmount;

    /**
     * @example 2
     *
     * @var int
     */
    public $opType;

    /**
     * @example 4988430***971
     *
     * @var int
     */
    public $orderNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
     * @example 4988430***971
     *
     * @var string
     */
    public $outOrderNum;

    /**
     * @example 48430***971
     *
     * @var int
     */
    public $refundOrderNum;
    protected $_name = [
        'afterAvailableAmount'  => 'after_available_amount',
        'beforeAvailableAmount' => 'before_available_amount',
        'changeOrderNum'        => 'change_order_num',
        'flowId'                => 'flow_id',
        'gmtCreate'             => 'gmt_create',
        'gmtModified'           => 'gmt_modified',
        'opAmount'              => 'op_amount',
        'opType'                => 'op_type',
        'orderNum'              => 'order_num',
        'orderType'             => 'order_type',
        'outOrderNum'           => 'out_order_num',
        'refundOrderNum'        => 'refund_order_num',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
