<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterTransferToMemberRequest extends Model
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
     * @var string
     */
    public $idempotencyKey;

    /**
     * @var float
     */
    public $monthlyQuota;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'amount' => 'amount',
        'balanceType' => 'balanceType',
        'idempotencyKey' => 'idempotencyKey',
        'monthlyQuota' => 'monthlyQuota',
        'remark' => 'remark',
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

        if (null !== $this->idempotencyKey) {
            $res['idempotencyKey'] = $this->idempotencyKey;
        }

        if (null !== $this->monthlyQuota) {
            $res['monthlyQuota'] = $this->monthlyQuota;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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

        if (isset($map['idempotencyKey'])) {
            $model->idempotencyKey = $map['idempotencyKey'];
        }

        if (isset($map['monthlyQuota'])) {
            $model->monthlyQuota = $map['monthlyQuota'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
