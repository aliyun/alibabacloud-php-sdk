<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module\expenses;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module\itineraries;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module\paymentInfos;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 10.00
     *
     * @var string
     */
    public $companyAmount;

    /**
     * @example 20.00
     *
     * @var string
     */
    public $companyPayAmount;

    /**
     * @example dinga809ed71b9201f35
     *
     * @var string
     */
    public $corpId;

    /**
     * @var expenses[]
     */
    public $expenses;

    /**
     * @example 2022-05-15T22:27Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var itineraries[]
     */
    public $itineraries;

    /**
     * @var paymentInfos[]
     */
    public $paymentInfos;

    /**
     * @example 10.00
     *
     * @var string
     */
    public $personalAmount;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example RT203956
     *
     * @var string
     */
    public $reimbursementNo;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example wait_commit
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $travelThirdApplyId;

    /**
     * @example userId
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'companyAmount'      => 'company_amount',
        'companyPayAmount'   => 'company_pay_amount',
        'corpId'             => 'corp_id',
        'expenses'           => 'expenses',
        'gmtCreate'          => 'gmt_create',
        'gmtModified'        => 'gmt_modified',
        'itineraries'        => 'itineraries',
        'paymentInfos'       => 'payment_infos',
        'personalAmount'     => 'personal_amount',
        'reason'             => 'reason',
        'reimbursementNo'    => 'reimbursement_no',
        'remark'             => 'remark',
        'status'             => 'status',
        'travelThirdApplyId' => 'travel_third_apply_id',
        'userId'             => 'user_id',
        'userName'           => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->companyAmount) {
            $res['company_amount'] = $this->companyAmount;
        }
        if (null !== $this->companyPayAmount) {
            $res['company_pay_amount'] = $this->companyPayAmount;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->expenses) {
            $res['expenses'] = [];
            if (null !== $this->expenses && \is_array($this->expenses)) {
                $n = 0;
                foreach ($this->expenses as $item) {
                    $res['expenses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->itineraries) {
            $res['itineraries'] = [];
            if (null !== $this->itineraries && \is_array($this->itineraries)) {
                $n = 0;
                foreach ($this->itineraries as $item) {
                    $res['itineraries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->paymentInfos) {
            $res['payment_infos'] = [];
            if (null !== $this->paymentInfos && \is_array($this->paymentInfos)) {
                $n = 0;
                foreach ($this->paymentInfos as $item) {
                    $res['payment_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->personalAmount) {
            $res['personal_amount'] = $this->personalAmount;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->reimbursementNo) {
            $res['reimbursement_no'] = $this->reimbursementNo;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->travelThirdApplyId) {
            $res['travel_third_apply_id'] = $this->travelThirdApplyId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['company_amount'])) {
            $model->companyAmount = $map['company_amount'];
        }
        if (isset($map['company_pay_amount'])) {
            $model->companyPayAmount = $map['company_pay_amount'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['expenses'])) {
            if (!empty($map['expenses'])) {
                $model->expenses = [];
                $n               = 0;
                foreach ($map['expenses'] as $item) {
                    $model->expenses[$n++] = null !== $item ? expenses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }
        if (isset($map['itineraries'])) {
            if (!empty($map['itineraries'])) {
                $model->itineraries = [];
                $n                  = 0;
                foreach ($map['itineraries'] as $item) {
                    $model->itineraries[$n++] = null !== $item ? itineraries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['payment_infos'])) {
            if (!empty($map['payment_infos'])) {
                $model->paymentInfos = [];
                $n                   = 0;
                foreach ($map['payment_infos'] as $item) {
                    $model->paymentInfos[$n++] = null !== $item ? paymentInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['personal_amount'])) {
            $model->personalAmount = $map['personal_amount'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['reimbursement_no'])) {
            $model->reimbursementNo = $map['reimbursement_no'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['travel_third_apply_id'])) {
            $model->travelThirdApplyId = $map['travel_third_apply_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
