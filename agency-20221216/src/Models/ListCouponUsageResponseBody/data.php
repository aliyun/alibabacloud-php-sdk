<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\ListCouponUsageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example oqevfbveuadcrduzmf@ttirv.net
     *
     * @var string
     */
    public $account;

    /**
     * @var float
     */
    public $amount;

    /**
     * @example 0.01
     *
     * @var float
     */
    public $balance;

    /**
     * @example 59226280
     *
     * @var string
     */
    public $couponId;

    /**
     * @example 503802
     *
     * @var int
     */
    public $couponTemplateId;

    /**
     * @example 2023-04-06 00:00:00 ~ 2023-04-07 00:00:00
     *
     * @var string
     */
    public $effDate;

    /**
     * @example 2023-04-06 19:32:10
     *
     * @var string
     */
    public $publishDate;

    /**
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @example 1647668856741998
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'account'          => 'Account',
        'amount'           => 'Amount',
        'balance'          => 'Balance',
        'couponId'         => 'CouponId',
        'couponTemplateId' => 'CouponTemplateId',
        'effDate'          => 'EffDate',
        'publishDate'      => 'PublishDate',
        'status'           => 'Status',
        'uid'              => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }
        if (null !== $this->couponId) {
            $res['CouponId'] = $this->couponId;
        }
        if (null !== $this->couponTemplateId) {
            $res['CouponTemplateId'] = $this->couponTemplateId;
        }
        if (null !== $this->effDate) {
            $res['EffDate'] = $this->effDate;
        }
        if (null !== $this->publishDate) {
            $res['PublishDate'] = $this->publishDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }
        if (isset($map['CouponId'])) {
            $model->couponId = $map['CouponId'];
        }
        if (isset($map['CouponTemplateId'])) {
            $model->couponTemplateId = $map['CouponTemplateId'];
        }
        if (isset($map['EffDate'])) {
            $model->effDate = $map['EffDate'];
        }
        if (isset($map['PublishDate'])) {
            $model->publishDate = $map['PublishDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
