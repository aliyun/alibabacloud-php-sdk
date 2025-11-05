<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class IssueCouponForCustomerRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var int
     */
    public $couponTemplateId;

    /**
     * @var bool
     */
    public $isUseBenefit;

    /**
     * @var string
     */
    public $uidlist;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'couponTemplateId' => 'CouponTemplateId',
        'isUseBenefit' => 'IsUseBenefit',
        'uidlist' => 'Uidlist',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->couponTemplateId) {
            $res['CouponTemplateId'] = $this->couponTemplateId;
        }

        if (null !== $this->isUseBenefit) {
            $res['IsUseBenefit'] = $this->isUseBenefit;
        }

        if (null !== $this->uidlist) {
            $res['Uidlist'] = $this->uidlist;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['CouponTemplateId'])) {
            $model->couponTemplateId = $map['CouponTemplateId'];
        }

        if (isset($map['IsUseBenefit'])) {
            $model->isUseBenefit = $map['IsUseBenefit'];
        }

        if (isset($map['Uidlist'])) {
            $model->uidlist = $map['Uidlist'];
        }

        return $model;
    }
}
