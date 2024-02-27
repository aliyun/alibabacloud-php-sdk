<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class DeductOutstandingBalanceRequest extends Model
{
    /**
     * @description The Deducted Credit to be offset.
     *
     * @example 300
     *
     * @var string
     */
    public $deductAmount;

    /**
     * @description Account UID of Distribution Customer.
     *
     * @example 1133166938931507
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'deductAmount' => 'DeductAmount',
        'uid'          => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deductAmount) {
            $res['DeductAmount'] = $this->deductAmount;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeductOutstandingBalanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeductAmount'])) {
            $model->deductAmount = $map['DeductAmount'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
