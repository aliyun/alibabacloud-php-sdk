<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class ListTier2CouponApprovalRequest extends Model
{
    /**
     * @var string
     */
    public $applicationSheetId;

    /**
     * @var string
     */
    public $approvalStatus;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $t2PartnerName;

    /**
     * @var int
     */
    public $t2PartnerUid;
    protected $_name = [
        'applicationSheetId' => 'ApplicationSheetId',
        'approvalStatus' => 'ApprovalStatus',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        't2PartnerName' => 'T2PartnerName',
        't2PartnerUid' => 'T2PartnerUid',
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

        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->t2PartnerName) {
            $res['T2PartnerName'] = $this->t2PartnerName;
        }

        if (null !== $this->t2PartnerUid) {
            $res['T2PartnerUid'] = $this->t2PartnerUid;
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

        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['T2PartnerName'])) {
            $model->t2PartnerName = $map['T2PartnerName'];
        }

        if (isset($map['T2PartnerUid'])) {
            $model->t2PartnerUid = $map['T2PartnerUid'];
        }

        return $model;
    }
}
