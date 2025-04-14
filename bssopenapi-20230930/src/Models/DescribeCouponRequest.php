<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponRequest\ecIdAccountIds;

class DescribeCouponRequest extends Model
{
    /**
     * @var int
     */
    public $couponId;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $couponType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var int
     */
    public $effectiveEndTime;

    /**
     * @var int
     */
    public $effectiveStartTime;

    /**
     * @var int
     */
    public $expireEndDate;

    /**
     * @var int
     */
    public $expireStartDate;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $pageSize;

    /**
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

    public function validate()
    {
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ecIdAccountIds)) {
                $res['EcIdAccountIds'] = [];
                $n1 = 0;
                foreach ($this->ecIdAccountIds as $item1) {
                    $res['EcIdAccountIds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['EcIdAccountIds'] as $item1) {
                    $model->ecIdAccountIds[$n1++] = ecIdAccountIds::fromMap($item1);
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
