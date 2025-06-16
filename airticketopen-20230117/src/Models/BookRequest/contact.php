<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest;

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
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

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
        'firstName' => 'first_name',
        'lastName' => 'last_name',
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

        if (null !== $this->firstName) {
            $res['first_name'] = $this->firstName;
        }

        if (null !== $this->lastName) {
            $res['last_name'] = $this->lastName;
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

        if (isset($map['first_name'])) {
            $model->firstName = $map['first_name'];
        }

        if (isset($map['last_name'])) {
            $model->lastName = $map['last_name'];
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
