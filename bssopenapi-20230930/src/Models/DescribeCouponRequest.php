<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponRequest\ecIdAccountIds;
use AlibabaCloud\Tea\Model;

class DescribeCouponRequest extends Model
{
    /**
     * @example 351430260343
     *
     * @var int
     */
    public $couponId;

    /**
     * @example 554863270150
     *
     * @var string
     */
    public $couponNo;

    /**
     * @example CERTAIN
     *
     * @var string
     */
    public $couponType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @example 1708423156000
     *
     * @var int
     */
    public $effectiveEndTime;

    /**
     * @example 1684750028000
     *
     * @var int
     */
    public $effectiveStartTime;

    /**
     * @example 1708423156000
     *
     * @var int
     */
    public $expireEndDate;

    /**
     * @example 1684750028000
     *
     * @var int
     */
    public $expireStartDate;

    /**
     * @example 2684201000001
     *
     * @var string
     */
    public $nbid;

    /**
     * @description This parameter is required.
     *
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
    protected $_name = [
        'couponId' => 'CouponId',
        'couponNo' => 'CouponNo',
        'couponType' => 'CouponType',
        'currentPage' => 'CurrentPage',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'effectiveEndTime' => 'EffectiveEndTime',
        'effectiveStartTime' => 'EffectiveStartTime',
        'expireEndDate' => 'ExpireEndDate',
        'expireStartDate' => 'ExpireStartDate',
        'nbid' => 'Nbid',
        'pageSize' => 'PageSize',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->couponId) {
            $res['CouponId'] = $this->couponId;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->couponType) {
            $res['CouponType'] = $this->couponType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->ecIdAccountIds) {
            $res['EcIdAccountIds'] = [];
            if (null !== $this->ecIdAccountIds && \is_array($this->ecIdAccountIds)) {
                $n = 0;
                foreach ($this->ecIdAccountIds as $item) {
                    $res['EcIdAccountIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->effectiveEndTime) {
            $res['EffectiveEndTime'] = $this->effectiveEndTime;
        }
        if (null !== $this->effectiveStartTime) {
            $res['EffectiveStartTime'] = $this->effectiveStartTime;
        }
        if (null !== $this->expireEndDate) {
            $res['ExpireEndDate'] = $this->expireEndDate;
        }
        if (null !== $this->expireStartDate) {
            $res['ExpireStartDate'] = $this->expireStartDate;
        }
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCouponRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponId'])) {
            $model->couponId = $map['CouponId'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['CouponType'])) {
            $model->couponType = $map['CouponType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n = 0;
                foreach ($map['EcIdAccountIds'] as $item) {
                    $model->ecIdAccountIds[$n++] = null !== $item ? ecIdAccountIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EffectiveEndTime'])) {
            $model->effectiveEndTime = $map['EffectiveEndTime'];
        }
        if (isset($map['EffectiveStartTime'])) {
            $model->effectiveStartTime = $map['EffectiveStartTime'];
        }
        if (isset($map['ExpireEndDate'])) {
            $model->expireEndDate = $map['ExpireEndDate'];
        }
        if (isset($map['ExpireStartDate'])) {
            $model->expireStartDate = $map['ExpireStartDate'];
        }
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
