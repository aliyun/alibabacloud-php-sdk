<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CssProduce extends Model
{
    /**
     * @var string
     */
    public $bid;

    /**
     * @var int
     */
    public $buyerId;

    /**
     * @var int
     */
    public $childId;

    /**
     * @var string
     */
    public $fromApp;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $payerId;

    /**
     * @var CssPurchase[]
     */
    public $purchases;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $skipChannel;

    /**
     * @var string
     */
    public $token;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'bid' => 'bid',
        'buyerId' => 'buyerId',
        'childId' => 'childId',
        'fromApp' => 'fromApp',
        'orderId' => 'orderId',
        'payerId' => 'payerId',
        'purchases' => 'purchases',
        'requestId' => 'requestId',
        'skipChannel' => 'skipChannel',
        'token' => 'token',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->purchases)) {
            Model::validateArray($this->purchases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bid) {
            $res['bid'] = $this->bid;
        }

        if (null !== $this->buyerId) {
            $res['buyerId'] = $this->buyerId;
        }

        if (null !== $this->childId) {
            $res['childId'] = $this->childId;
        }

        if (null !== $this->fromApp) {
            $res['fromApp'] = $this->fromApp;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->payerId) {
            $res['payerId'] = $this->payerId;
        }

        if (null !== $this->purchases) {
            if (\is_array($this->purchases)) {
                $res['purchases'] = [];
                $n1 = 0;
                foreach ($this->purchases as $item1) {
                    $res['purchases'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->skipChannel) {
            $res['skipChannel'] = $this->skipChannel;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['bid'])) {
            $model->bid = $map['bid'];
        }

        if (isset($map['buyerId'])) {
            $model->buyerId = $map['buyerId'];
        }

        if (isset($map['childId'])) {
            $model->childId = $map['childId'];
        }

        if (isset($map['fromApp'])) {
            $model->fromApp = $map['fromApp'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['payerId'])) {
            $model->payerId = $map['payerId'];
        }

        if (isset($map['purchases'])) {
            if (!empty($map['purchases'])) {
                $model->purchases = [];
                $n1 = 0;
                foreach ($map['purchases'] as $item1) {
                    $model->purchases[$n1++] = CssPurchase::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['skipChannel'])) {
            $model->skipChannel = $map['skipChannel'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
