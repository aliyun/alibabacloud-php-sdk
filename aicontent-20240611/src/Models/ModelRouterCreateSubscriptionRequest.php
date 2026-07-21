<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterCreateSubscriptionRequest extends Model
{
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

    /**
     * @var float
     */
    public $subscriptionAmount;
    protected $_name = [
        'balanceType' => 'balanceType',
        'effectiveTime' => 'effectiveTime',
        'idempotencyKey' => 'idempotencyKey',
        'subscriptionAmount' => 'subscriptionAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->balanceType) {
            $res['balanceType'] = $this->balanceType;
        }

        if (null !== $this->effectiveTime) {
            $res['effectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->idempotencyKey) {
            $res['idempotencyKey'] = $this->idempotencyKey;
        }

        if (null !== $this->subscriptionAmount) {
            $res['subscriptionAmount'] = $this->subscriptionAmount;
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
        if (isset($map['balanceType'])) {
            $model->balanceType = $map['balanceType'];
        }

        if (isset($map['effectiveTime'])) {
            $model->effectiveTime = $map['effectiveTime'];
        }

        if (isset($map['idempotencyKey'])) {
            $model->idempotencyKey = $map['idempotencyKey'];
        }

        if (isset($map['subscriptionAmount'])) {
            $model->subscriptionAmount = $map['subscriptionAmount'];
        }

        return $model;
    }
}
