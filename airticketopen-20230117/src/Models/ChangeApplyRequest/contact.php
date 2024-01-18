<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeApplyRequest;

use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @example gao******@gmail.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 86
     *
     * @var string
     */
    public $mobileCountryCode;

    /**
     * @example 183*****92
     *
     * @var string
     */
    public $mobilePhoneNum;
    protected $_name = [
        'email'             => 'email',
        'mobileCountryCode' => 'mobile_country_code',
        'mobilePhoneNum'    => 'mobile_phone_num',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->mobileCountryCode) {
            $res['mobile_country_code'] = $this->mobileCountryCode;
        }
        if (null !== $this->mobilePhoneNum) {
            $res['mobile_phone_num'] = $this->mobilePhoneNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['mobile_country_code'])) {
            $model->mobileCountryCode = $map['mobile_country_code'];
        }
        if (isset($map['mobile_phone_num'])) {
            $model->mobilePhoneNum = $map['mobile_phone_num'];
        }

        return $model;
    }
}
