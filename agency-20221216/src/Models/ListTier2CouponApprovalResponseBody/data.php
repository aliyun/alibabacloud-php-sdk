<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\ListTier2CouponApprovalResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $applicationSheetId;

    /**
     * @var string
     */
    public $applicationTime;

    /**
     * @var string
     */
    public $approvalStatus;

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
    public $totalAmount;
    protected $_name = [
        'applicationSheetId' => 'ApplicationSheetId',
        'applicationTime' => 'ApplicationTime',
        'approvalStatus' => 'ApprovalStatus',
        't2PartnerName' => 'T2PartnerName',
        't2PartnerUid' => 'T2PartnerUid',
        'totalAmount' => 'TotalAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationSheetId) {
            $res['ApplicationSheetId'] = $this->applicationSheetId;
        }

        if (null !== $this->applicationTime) {
            $res['ApplicationTime'] = $this->applicationTime;
        }

        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }

        if (null !== $this->t2PartnerName) {
            $res['T2PartnerName'] = $this->t2PartnerName;
        }

        if (null !== $this->t2PartnerUid) {
            $res['T2PartnerUid'] = $this->t2PartnerUid;
        }

        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
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
        if (isset($map['ApplicationSheetId'])) {
            $model->applicationSheetId = $map['ApplicationSheetId'];
        }

        if (isset($map['ApplicationTime'])) {
            $model->applicationTime = $map['ApplicationTime'];
        }

        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }

        if (isset($map['T2PartnerName'])) {
            $model->t2PartnerName = $map['T2PartnerName'];
        }

        if (isset($map['T2PartnerUid'])) {
            $model->t2PartnerUid = $map['T2PartnerUid'];
        }

        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }

        return $model;
    }
}
