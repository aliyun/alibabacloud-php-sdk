<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class CreateAgAccountRequest extends Model
{
    /**
     * @description The attribute of the account. To view the attribute of the account, use the account to log on to the Alibaba Cloud Management Console, move the pointer over the profile picture in the upper-right corner, and then click **Security Settings**.
     *
     * @example 1
     *
     * @var string
     */
    public $accountAttr;

    /**
     * @description The name of the city.
     *
     * @example Beijing
     *
     * @var string
     */
    public $cityName;

    /**
     * @description The name of the enterprise.
     *
     * @example Dongguan ChuangNeng Electric Appliance Co., Ltd
     *
     * @var string
     */
    public $enterpriseName;

    /**
     * @description The first name.
     *
     * @example Zhicheng
     *
     * @var string
     */
    public $firstName;

    /**
     * @description The last name.
     *
     * The last name can be up to 64 characters in length.
     * @example Wu
     *
     * @var string
     */
    public $lastName;

    /**
     * @description The email address used to log on to the account.
     *
     * @example email
     *
     * @var string
     */
    public $loginEmail;

    /**
     * @description The country code.
     *
     * @example CN
     *
     * @var string
     */
    public $nationCode;

    /**
     * @description The zip code.
     *
     * @example 350000
     *
     * @var string
     */
    public $postcode;

    /**
     * @description The name of the province. This parameter is optional.
     *
     * @example Beijing
     *
     * @var string
     */
    public $provinceName;
    protected $_name = [
        'accountAttr'    => 'AccountAttr',
        'cityName'       => 'CityName',
        'enterpriseName' => 'EnterpriseName',
        'firstName'      => 'FirstName',
        'lastName'       => 'LastName',
        'loginEmail'     => 'LoginEmail',
        'nationCode'     => 'NationCode',
        'postcode'       => 'Postcode',
        'provinceName'   => 'ProvinceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountAttr) {
            $res['AccountAttr'] = $this->accountAttr;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->enterpriseName) {
            $res['EnterpriseName'] = $this->enterpriseName;
        }
        if (null !== $this->firstName) {
            $res['FirstName'] = $this->firstName;
        }
        if (null !== $this->lastName) {
            $res['LastName'] = $this->lastName;
        }
        if (null !== $this->loginEmail) {
            $res['LoginEmail'] = $this->loginEmail;
        }
        if (null !== $this->nationCode) {
            $res['NationCode'] = $this->nationCode;
        }
        if (null !== $this->postcode) {
            $res['Postcode'] = $this->postcode;
        }
        if (null !== $this->provinceName) {
            $res['ProvinceName'] = $this->provinceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAgAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountAttr'])) {
            $model->accountAttr = $map['AccountAttr'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['EnterpriseName'])) {
            $model->enterpriseName = $map['EnterpriseName'];
        }
        if (isset($map['FirstName'])) {
            $model->firstName = $map['FirstName'];
        }
        if (isset($map['LastName'])) {
            $model->lastName = $map['LastName'];
        }
        if (isset($map['LoginEmail'])) {
            $model->loginEmail = $map['LoginEmail'];
        }
        if (isset($map['NationCode'])) {
            $model->nationCode = $map['NationCode'];
        }
        if (isset($map['Postcode'])) {
            $model->postcode = $map['Postcode'];
        }
        if (isset($map['ProvinceName'])) {
            $model->provinceName = $map['ProvinceName'];
        }

        return $model;
    }
}
