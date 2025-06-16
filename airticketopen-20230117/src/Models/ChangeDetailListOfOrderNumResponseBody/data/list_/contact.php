<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class contact extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $mobileCountryCode;

    /**
     * @var string
     */
    public $mobilePhoneNum;
    protected $_name = [
        'email' => 'email',
        'mobileCountryCode' => 'mobile_country_code',
        'mobilePhoneNum' => 'mobile_phone_num',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
