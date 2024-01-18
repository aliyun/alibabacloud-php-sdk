<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList\passenger\credential;
use AlibabaCloud\Tea\Model;

class passenger extends Model
{
    /**
     * @example 20020301
     *
     * @var string
     */
    public $birthday;

    /**
     * @var credential
     */
    public $credential;

    /**
     * @example SAN
     *
     * @var string
     */
    public $firstName;

    /**
     * @example 0
     *
     * @var int
     */
    public $gender;

    /**
     * @example ZHANG
     *
     * @var string
     */
    public $lastName;

    /**
     * @example 86
     *
     * @var string
     */
    public $mobileCountryCode;

    /**
     * @example 183******96
     *
     * @var string
     */
    public $mobilePhoneNumber;

    /**
     * @example CN
     *
     * @var string
     */
    public $nationality;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'birthday'          => 'birthday',
        'credential'        => 'credential',
        'firstName'         => 'first_name',
        'gender'            => 'gender',
        'lastName'          => 'last_name',
        'mobileCountryCode' => 'mobile_country_code',
        'mobilePhoneNumber' => 'mobile_phone_number',
        'nationality'       => 'nationality',
        'type'              => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }
        if (null !== $this->credential) {
            $res['credential'] = null !== $this->credential ? $this->credential->toMap() : null;
        }
        if (null !== $this->firstName) {
            $res['first_name'] = $this->firstName;
        }
        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }
        if (null !== $this->lastName) {
            $res['last_name'] = $this->lastName;
        }
        if (null !== $this->mobileCountryCode) {
            $res['mobile_country_code'] = $this->mobileCountryCode;
        }
        if (null !== $this->mobilePhoneNumber) {
            $res['mobile_phone_number'] = $this->mobilePhoneNumber;
        }
        if (null !== $this->nationality) {
            $res['nationality'] = $this->nationality;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passenger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }
        if (isset($map['credential'])) {
            $model->credential = credential::fromMap($map['credential']);
        }
        if (isset($map['first_name'])) {
            $model->firstName = $map['first_name'];
        }
        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }
        if (isset($map['last_name'])) {
            $model->lastName = $map['last_name'];
        }
        if (isset($map['mobile_country_code'])) {
            $model->mobileCountryCode = $map['mobile_country_code'];
        }
        if (isset($map['mobile_phone_number'])) {
            $model->mobilePhoneNumber = $map['mobile_phone_number'];
        }
        if (isset($map['nationality'])) {
            $model->nationality = $map['nationality'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
