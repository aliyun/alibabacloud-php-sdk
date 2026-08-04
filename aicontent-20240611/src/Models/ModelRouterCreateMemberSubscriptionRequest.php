<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterCreateMemberSubscriptionRequest extends Model
{
    /**
     * @var float
     */
    public $amount;

    /**
     * @var string
     */
    public $balanceType;

    /**
     * @var int
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $idempotencyKey;
    protected $_name = [
        'amount' => 'amount',
        'balanceType' => 'balanceType',
        'effectiveTime' => 'effectiveTime',
        'idempotencyKey' => 'idempotencyKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->balanceType) {
            $res['balanceType'] = $this->balanceType;
        }

        if (null !== $this->effectiveTime) {
            $res['effectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->idempotencyKey) {
            $res['idempotencyKey'] = $this->idempotencyKey;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['balanceType'])) {
            $model->balanceType = $map['balanceType'];
        }

        if (isset($map['effectiveTime'])) {
            $model->effectiveTime = $map['effectiveTime'];
        }

        if (isset($map['idempotencyKey'])) {
            $model->idempotencyKey = $map['idempotencyKey'];
        }

        return $model;
    }
}
