<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SendCouponRequest;

use AlibabaCloud\Tea\Model;

class userAmountModelList extends Model
{
    /**
     * @example 100
     *
     * @var float
     */
    public $amount;

    /**
     * @example 18284742893
     *
     * @var int
     */
    public $uid;

    /**
     * @var int
     */
    public $userId;

    /**
     * @example 39584
     *
     * @var int
     */
    public $youhuiId;
    protected $_name = [
        'amount'   => 'Amount',
        'uid'      => 'Uid',
        'userId'   => 'UserId',
        'youhuiId' => 'YouhuiId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->youhuiId) {
            $res['YouhuiId'] = $this->youhuiId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userAmountModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['YouhuiId'])) {
            $model->youhuiId = $map['YouhuiId'];
        }

        return $model;
    }
}
