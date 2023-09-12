<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class OrderResult extends Model
{
    /**
     * @example 2023-09-01T12:00:00.000Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @example 12****01
     *
     * @var string
     */
    public $distributorId;

    /**
     * @example 1
     *
     * @var string
     */
    public $logisticsStatus;

    /**
     * @example 100
     *
     * @var string
     */
    public $orderAmount;

    /**
     * @example 6692****5457
     *
     * @var string
     */
    public $orderId;

    /**
     * @var OrderLineResult[]
     */
    public $orderLineList;

    /**
     * @example 1
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @example D12***111
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createDate'      => 'createDate',
        'distributorId'   => 'distributorId',
        'logisticsStatus' => 'logisticsStatus',
        'orderAmount'     => 'orderAmount',
        'orderId'         => 'orderId',
        'orderLineList'   => 'orderLineList',
        'orderStatus'     => 'orderStatus',
        'requestId'       => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['createDate'] = $this->createDate;
        }
        if (null !== $this->distributorId) {
            $res['distributorId'] = $this->distributorId;
        }
        if (null !== $this->logisticsStatus) {
            $res['logisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->orderAmount) {
            $res['orderAmount'] = $this->orderAmount;
        }
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }
        if (null !== $this->orderLineList) {
            $res['orderLineList'] = [];
            if (null !== $this->orderLineList && \is_array($this->orderLineList)) {
                $n = 0;
                foreach ($this->orderLineList as $item) {
                    $res['orderLineList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderStatus) {
            $res['orderStatus'] = $this->orderStatus;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createDate'])) {
            $model->createDate = $map['createDate'];
        }
        if (isset($map['distributorId'])) {
            $model->distributorId = $map['distributorId'];
        }
        if (isset($map['logisticsStatus'])) {
            $model->logisticsStatus = $map['logisticsStatus'];
        }
        if (isset($map['orderAmount'])) {
            $model->orderAmount = $map['orderAmount'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }
        if (isset($map['orderLineList'])) {
            if (!empty($map['orderLineList'])) {
                $model->orderLineList = [];
                $n                    = 0;
                foreach ($map['orderLineList'] as $item) {
                    $model->orderLineList[$n++] = null !== $item ? OrderLineResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['orderStatus'])) {
            $model->orderStatus = $map['orderStatus'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
