<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class BenefitPkgDeliveryInfo extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $isPermanent;
    protected $_name = [
        'amount'      => 'amount',
        'createdAt'   => 'created_at',
        'expireTime'  => 'expire_time',
        'isPermanent' => 'is_permanent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->expireTime) {
            $res['expire_time'] = $this->expireTime;
        }
        if (null !== $this->isPermanent) {
            $res['is_permanent'] = $this->isPermanent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BenefitPkgDeliveryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['expire_time'])) {
            $model->expireTime = $map['expire_time'];
        }
        if (isset($map['is_permanent'])) {
            $model->isPermanent = $map['is_permanent'];
        }

        return $model;
    }
}
