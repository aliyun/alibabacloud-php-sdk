<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeCouponItemListShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $couponId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $ecIdAccountIdsShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'couponId' => 'CouponId',
        'currentPage' => 'CurrentPage',
        'ecIdAccountIdsShrink' => 'EcIdAccountIds',
        'name' => 'Name',
        'nbid' => 'Nbid',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->couponId) {
            $res['CouponId'] = $this->couponId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->ecIdAccountIdsShrink) {
            $res['EcIdAccountIds'] = $this->ecIdAccountIdsShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EcIdAccountIds'])) {
            $model->ecIdAccountIdsShrink = $map['EcIdAccountIds'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
