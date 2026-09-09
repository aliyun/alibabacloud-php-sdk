<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\QueryAmountResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $amountRatio;

    /**
     * @var string
     */
    public $listFee;

    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $tier;

    /**
     * @var string
     */
    public $totalAmount;
    protected $_name = [
        'aliyunUid' => 'aliyunUid',
        'amount' => 'amount',
        'amountRatio' => 'amountRatio',
        'listFee' => 'listFee',
        'price' => 'price',
        'tier' => 'tier',
        'totalAmount' => 'totalAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['aliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->amountRatio) {
            $res['amountRatio'] = $this->amountRatio;
        }

        if (null !== $this->listFee) {
            $res['listFee'] = $this->listFee;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->tier) {
            $res['tier'] = $this->tier;
        }

        if (null !== $this->totalAmount) {
            $res['totalAmount'] = $this->totalAmount;
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
        if (isset($map['aliyunUid'])) {
            $model->aliyunUid = $map['aliyunUid'];
        }

        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['amountRatio'])) {
            $model->amountRatio = $map['amountRatio'];
        }

        if (isset($map['listFee'])) {
            $model->listFee = $map['listFee'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['tier'])) {
            $model->tier = $map['tier'];
        }

        if (isset($map['totalAmount'])) {
            $model->totalAmount = $map['totalAmount'];
        }

        return $model;
    }
}
