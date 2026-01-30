<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetTier2CouponApprovalDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class applicantInfo extends Model
{
    /**
     * @var string
     */
    public $applicableProducts;

    /**
     * @var string
     */
    public $applicationTime;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $t2PartnerName;

    /**
     * @var int
     */
    public $t2PartnerUid;

    /**
     * @var string
     */
    public $validUntil;
    protected $_name = [
        'applicableProducts' => 'ApplicableProducts',
        'applicationTime' => 'ApplicationTime',
        'orderType' => 'OrderType',
        't2PartnerName' => 'T2PartnerName',
        't2PartnerUid' => 'T2PartnerUid',
        'validUntil' => 'ValidUntil',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = $this->applicableProducts;
        }

        if (null !== $this->applicationTime) {
            $res['ApplicationTime'] = $this->applicationTime;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->t2PartnerName) {
            $res['T2PartnerName'] = $this->t2PartnerName;
        }

        if (null !== $this->t2PartnerUid) {
            $res['T2PartnerUid'] = $this->t2PartnerUid;
        }

        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
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
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }

        if (isset($map['ApplicationTime'])) {
            $model->applicationTime = $map['ApplicationTime'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['T2PartnerName'])) {
            $model->t2PartnerName = $map['T2PartnerName'];
        }

        if (isset($map['T2PartnerUid'])) {
            $model->t2PartnerUid = $map['T2PartnerUid'];
        }

        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }

        return $model;
    }
}
