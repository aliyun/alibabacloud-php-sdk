<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\IssueCouponForCustomerResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $couponTemplateId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $uidlist;
    protected $_name = [
        'couponTemplateId' => 'CouponTemplateId',
        'createTime' => 'CreateTime',
        'uidlist' => 'Uidlist',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
