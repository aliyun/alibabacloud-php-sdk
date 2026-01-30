<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetTier2CouponApprovalDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class couponReceiptUidList extends Model
{
    /**
     * @var string
     */
    public $nominalValue;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'nominalValue' => 'NominalValue',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nominalValue) {
            $res['NominalValue'] = $this->nominalValue;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['NominalValue'])) {
            $model->nominalValue = $map['NominalValue'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
