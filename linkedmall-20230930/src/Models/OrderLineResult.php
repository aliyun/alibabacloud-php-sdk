<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class OrderLineResult extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $logisticsStatus;

    /**
     * @example 1
     *
     * @var string
     */
    public $number;

    /**
     * @example 6692****5457
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 6692****5458
     *
     * @var string
     */
    public $orderLineId;

    /**
     * @example 1
     *
     * @var string
     */
    public $orderLineStatus;

    /**
     * @example 100
     *
     * @var int
     */
    public $payFee;

    /**
     * @example 6600****6736
     *
     * @var string
     */
    public $productId;

    /**
     * @example //img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0
     *
     * @var string
     */
    public $productPic;

    /**
     * @example 儿童学习桌
     *
     * @var string
     */
    public $productTitle;

    /**
     * @example 6600****6737
     *
     * @var string
     */
    public $skuId;

    /**
     * @example 浅绿色
     *
     * @var string
     */
    public $skuTitle;
    protected $_name = [
        'logisticsStatus' => 'logisticsStatus',
        'number'          => 'number',
        'orderId'         => 'orderId',
        'orderLineId'     => 'orderLineId',
        'orderLineStatus' => 'orderLineStatus',
        'payFee'          => 'payFee',
        'productId'       => 'productId',
        'productPic'      => 'productPic',
        'productTitle'    => 'productTitle',
        'skuId'           => 'skuId',
        'skuTitle'        => 'skuTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logisticsStatus) {
            $res['logisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }
        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
        }
        if (null !== $this->orderLineStatus) {
            $res['orderLineStatus'] = $this->orderLineStatus;
        }
        if (null !== $this->payFee) {
            $res['payFee'] = $this->payFee;
        }
        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }
        if (null !== $this->productPic) {
            $res['productPic'] = $this->productPic;
        }
        if (null !== $this->productTitle) {
            $res['productTitle'] = $this->productTitle;
        }
        if (null !== $this->skuId) {
            $res['skuId'] = $this->skuId;
        }
        if (null !== $this->skuTitle) {
            $res['skuTitle'] = $this->skuTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderLineResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logisticsStatus'])) {
            $model->logisticsStatus = $map['logisticsStatus'];
        }
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }
        if (isset($map['orderLineId'])) {
            $model->orderLineId = $map['orderLineId'];
        }
        if (isset($map['orderLineStatus'])) {
            $model->orderLineStatus = $map['orderLineStatus'];
        }
        if (isset($map['payFee'])) {
            $model->payFee = $map['payFee'];
        }
        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }
        if (isset($map['productPic'])) {
            $model->productPic = $map['productPic'];
        }
        if (isset($map['productTitle'])) {
            $model->productTitle = $map['productTitle'];
        }
        if (isset($map['skuId'])) {
            $model->skuId = $map['skuId'];
        }
        if (isset($map['skuTitle'])) {
            $model->skuTitle = $map['skuTitle'];
        }

        return $model;
    }
}
