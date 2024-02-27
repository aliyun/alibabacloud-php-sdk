<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class ListCouponUsageRequest extends Model
{
    /**
     * @example oqevfbveuadcrduzmf@ttirv.net
     *
     * @var string
     */
    public $account;

    /**
     * @example 5075915
     *
     * @var int
     */
    public $couponTemplateId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @example 1133166938931507
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'account'          => 'Account',
        'couponTemplateId' => 'CouponTemplateId',
        'page'             => 'Page',
        'pageSize'         => 'PageSize',
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
        if (null !== $this->couponTemplateId) {
            $res['CouponTemplateId'] = $this->couponTemplateId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return ListCouponUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['CouponTemplateId'])) {
            $model->couponTemplateId = $map['CouponTemplateId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
