<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class IssueCouponForCustomerRequest extends Model
{
    /**
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description This parameter is required.
     *
     * @example 5075915
     *
     * @var int
     */
    public $couponTemplateId;

    /**
     * @description This parameter is required.
     *
     * @example 111,2222
     *
     * @var string
     */
    public $uidlist;
    protected $_name = [
        'acceptLanguage'   => 'AcceptLanguage',
        'couponTemplateId' => 'CouponTemplateId',
        'uidlist'          => 'Uidlist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->couponTemplateId) {
            $res['CouponTemplateId'] = $this->couponTemplateId;
        }
        if (null !== $this->uidlist) {
            $res['Uidlist'] = $this->uidlist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IssueCouponForCustomerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['CouponTemplateId'])) {
            $model->couponTemplateId = $map['CouponTemplateId'];
        }
        if (isset($map['Uidlist'])) {
            $model->uidlist = $map['Uidlist'];
        }

        return $model;
    }
}
