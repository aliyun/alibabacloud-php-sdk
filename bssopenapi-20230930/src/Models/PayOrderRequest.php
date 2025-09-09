<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\PayOrderRequest\ecIdAccountIds;

class PayOrderRequest extends Model
{
    /**
     * @var int
     */
    public $buyerId;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $paySubmitUid;

    /**
     * @var int
     */
    public $payerId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'buyerId' => 'BuyerId',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'nbid' => 'Nbid',
        'orderId' => 'OrderId',
        'paySubmitUid' => 'PaySubmitUid',
        'payerId' => 'PayerId',
        'token' => 'Token',
    ];

    public function validate()
    {
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }

        if (null !== $this->ecIdAccountIds) {
            if (\is_array($this->ecIdAccountIds)) {
                $res['EcIdAccountIds'] = [];
                $n1 = 0;
                foreach ($this->ecIdAccountIds as $item1) {
                    $res['EcIdAccountIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->paySubmitUid) {
            $res['PaySubmitUid'] = $this->paySubmitUid;
        }

        if (null !== $this->payerId) {
            $res['PayerId'] = $this->payerId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }

        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n1 = 0;
                foreach ($map['EcIdAccountIds'] as $item1) {
                    $model->ecIdAccountIds[$n1] = ecIdAccountIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PaySubmitUid'])) {
            $model->paySubmitUid = $map['PaySubmitUid'];
        }

        if (isset($map['PayerId'])) {
            $model->payerId = $map['PayerId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
