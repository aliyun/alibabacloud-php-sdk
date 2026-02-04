<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\ListCouponUsageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var float
     */
    public $amount;

    /**
     * @var float
     */
    public $balance;

    /**
     * @var string
     */
    public $couponId;

    /**
     * @var int
     */
    public $couponTemplateId;

    /**
     * @var string
     */
    public $effDate;

    /**
     * @var string
     */
    public $publishDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $t2PartnerUid;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'account' => 'Account',
        'amount' => 'Amount',
        'balance' => 'Balance',
        'couponId' => 'CouponId',
        'couponTemplateId' => 'CouponTemplateId',
        'effDate' => 'EffDate',
        'publishDate' => 'PublishDate',
        'status' => 'Status',
        't2PartnerUid' => 'T2PartnerUid',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->t2PartnerUid) {
            $res['T2PartnerUid'] = $this->t2PartnerUid;
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

        if (isset($map['T2PartnerUid'])) {
            $model->t2PartnerUid = $map['T2PartnerUid'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
