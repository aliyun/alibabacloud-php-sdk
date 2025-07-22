<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeleteCouponDeductTagShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $couponId;

    /**
     * @var string
     */
    public $ecIdAccountIdsShrink;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var string
     */
    public $tagKeysShrink;
    protected $_name = [
        'couponId' => 'CouponId',
        'ecIdAccountIdsShrink' => 'EcIdAccountIds',
        'nbid' => 'Nbid',
        'tagKeysShrink' => 'TagKeys',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->couponId) {
            $res['CouponId'] = $this->couponId;
        }
        if (null !== $this->ecIdAccountIdsShrink) {
            $res['EcIdAccountIds'] = $this->ecIdAccountIdsShrink;
        }
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }
        if (null !== $this->tagKeysShrink) {
            $res['TagKeys'] = $this->tagKeysShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCouponDeductTagShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponId'])) {
            $model->couponId = $map['CouponId'];
        }
        if (isset($map['EcIdAccountIds'])) {
            $model->ecIdAccountIdsShrink = $map['EcIdAccountIds'];
        }
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }
        if (isset($map['TagKeys'])) {
            $model->tagKeysShrink = $map['TagKeys'];
        }

        return $model;
    }
}
