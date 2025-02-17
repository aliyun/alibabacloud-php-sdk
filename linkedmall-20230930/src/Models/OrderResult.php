<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class OrderResult extends Model
{
    /**
     * @var string
     */
    public $createDate;
    /**
     * @var string
     */
    public $distributorId;
    /**
     * @var string
     */
    public $logisticsStatus;
    /**
     * @var int
     */
    public $orderAmount;
    /**
     * @var string
     */
    public $orderClosedReason;
    /**
     * @var string
     */
    public $orderId;
    /**
     * @var OrderLineResult[]
     */
    public $orderLineList;
    /**
     * @var string
     */
    public $orderStatus;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createDate'        => 'createDate',
        'distributorId'     => 'distributorId',
        'logisticsStatus'   => 'logisticsStatus',
        'orderAmount'       => 'orderAmount',
        'orderClosedReason' => 'orderClosedReason',
        'orderId'           => 'orderId',
        'orderLineList'     => 'orderLineList',
        'orderStatus'       => 'orderStatus',
        'requestId'         => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->orderLineList)) {
            Model::validateArray($this->orderLineList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->orderClosedReason) {
            $res['orderClosedReason'] = $this->orderClosedReason;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->orderLineList) {
            if (\is_array($this->orderLineList)) {
                $res['orderLineList'] = [];
                $n1                   = 0;
                foreach ($this->orderLineList as $item1) {
                    $res['orderLineList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['orderClosedReason'])) {
            $model->orderClosedReason = $map['orderClosedReason'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['orderLineList'])) {
            if (!empty($map['orderLineList'])) {
                $model->orderLineList = [];
                $n1                   = 0;
                foreach ($map['orderLineList'] as $item1) {
                    $model->orderLineList[$n1++] = OrderLineResult::fromMap($item1);
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
