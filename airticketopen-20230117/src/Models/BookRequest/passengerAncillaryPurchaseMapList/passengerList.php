<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerAncillaryPurchaseMapList;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerAncillaryPurchaseMapList\passengerList\credential;
use AlibabaCloud\Tea\Model;

class passengerList extends Model
{
    /**
     * @description date of birth (yyyyMMdd)
     *
     * @example 20020320
     *
     * @var string
     */
    public $birthday;

    /**
     * @description travel document
     *
     * @var credential
     */
    public $credential;

    /**
     * @description first name
     *
     * This parameter is required.
     * @example SAN
     *
     * @var string
     */
    public $firstName;

    /**
     * @description gender 0: male; 1: female
     *
     * @example 1
     *
     * @var int
     */
    public $gender;

    /**
     * @description last name
     *
     * This parameter is required.
     * @example ZHANG
     *
     * @var string
     */
    public $lastName;

    /**
     * @description country code for mobile phone number
     *
     * This parameter is required.
     * @example 86
     *
     * @var string
     */
    public $mobileCountryCode;

    /**
     * @description mobile phone number
     *
     * This parameter is required.
     * @example 182******92
     *
     * @var string
     */
    public $mobilePhoneNumber;

    /**
     * @description nationality
     *
     * @example CN
     *
     * @var string
     */
    public $nationality;

    /**
     * @description passenger type 0: adult; 1: child; 8: Infant
     *
     * This parameter is required.
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
     * @return passengerList
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
