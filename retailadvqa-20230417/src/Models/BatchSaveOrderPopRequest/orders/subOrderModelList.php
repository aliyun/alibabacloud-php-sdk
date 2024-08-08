<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\BatchSaveOrderPopRequest\orders;

use AlibabaCloud\Tea\Model;

class subOrderModelList extends Model
{
    /**
     * @var string
     */
    public $feature;

    /**
     * @description This parameter is required.
     *
     * @example testSubOrderId
     *
     * @var string
     */
    public $openSubOrderId;

    /**
     * @description This parameter is required.
     *
     * @example 10000
     *
     * @var string
     */
    public $orderPayment;

    /**
     * @var string
     */
    public $outProductId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $productAmount;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $refundStatus;

    /**
     * @description This parameter is required.
     *
     * @example TRADE_FINISHED
     *
     * @var string
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @example 10000
     *
     * @var string
     */
    public $totalFee;
    protected $_name = [
        'feature'        => 'Feature',
        'openSubOrderId' => 'OpenSubOrderId',
        'orderPayment'   => 'OrderPayment',
        'outProductId'   => 'OutProductId',
        'productAmount'  => 'ProductAmount',
        'productId'      => 'ProductId',
        'productName'    => 'ProductName',
        'refundStatus'   => 'RefundStatus',
        'status'         => 'Status',
        'totalFee'       => 'TotalFee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->openSubOrderId) {
            $res['OpenSubOrderId'] = $this->openSubOrderId;
        }
        if (null !== $this->orderPayment) {
            $res['OrderPayment'] = $this->orderPayment;
        }
        if (null !== $this->outProductId) {
            $res['OutProductId'] = $this->outProductId;
        }
        if (null !== $this->productAmount) {
            $res['ProductAmount'] = $this->productAmount;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->refundStatus) {
            $res['RefundStatus'] = $this->refundStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalFee) {
            $res['TotalFee'] = $this->totalFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subOrderModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['OpenSubOrderId'])) {
            $model->openSubOrderId = $map['OpenSubOrderId'];
        }
        if (isset($map['OrderPayment'])) {
            $model->orderPayment = $map['OrderPayment'];
        }
        if (isset($map['OutProductId'])) {
            $model->outProductId = $map['OutProductId'];
        }
        if (isset($map['ProductAmount'])) {
            $model->productAmount = $map['ProductAmount'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['RefundStatus'])) {
            $model->refundStatus = $map['RefundStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalFee'])) {
            $model->totalFee = $map['TotalFee'];
        }

        return $model;
    }
}
