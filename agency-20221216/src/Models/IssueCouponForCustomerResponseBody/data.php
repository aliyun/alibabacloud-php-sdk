<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\IssueCouponForCustomerResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 5075915
     *
     * @var int
     */
    public $couponTemplateId;

    /**
     * @example 2024-03-05 18:24:07
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 111,2222
     *
     * @var string
     */
    public $uidlist;
    protected $_name = [
        'couponTemplateId' => 'CouponTemplateId',
        'createTime'       => 'CreateTime',
        'uidlist'          => 'Uidlist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->couponTemplateId) {
            $res['CouponTemplateId'] = $this->couponTemplateId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->uidlist) {
            $res['Uidlist'] = $this->uidlist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponTemplateId'])) {
            $model->couponTemplateId = $map['CouponTemplateId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Uidlist'])) {
            $model->uidlist = $map['Uidlist'];
        }

        return $model;
    }
}
