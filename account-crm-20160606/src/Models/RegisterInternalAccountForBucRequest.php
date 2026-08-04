<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class RegisterInternalAccountForBucRequest extends Model
{
    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $isEmailConfirmed;

    /**
     * @var bool
     */
    public $isMobileConfirmed;

    /**
     * @var bool
     */
    public $isMobileLogin;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $nationalityCode;

    /**
     * @var string
     */
    public $plainPassword;

    /**
     * @var string
     */
    public $preferredLanguage;

    /**
     * @var string
     */
    public $accountTypeCode;
    protected $_name = [
        'bid' => 'Bid',
        'email' => 'Email',
        'isEmailConfirmed' => 'IsEmailConfirmed',
        'isMobileConfirmed' => 'IsMobileConfirmed',
        'isMobileLogin' => 'IsMobileLogin',
        'mobile' => 'Mobile',
        'nationalityCode' => 'NationalityCode',
        'plainPassword' => 'PlainPassword',
        'preferredLanguage' => 'PreferredLanguage',
        'accountTypeCode' => 'accountTypeCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->isEmailConfirmed) {
            $res['IsEmailConfirmed'] = $this->isEmailConfirmed;
        }

        if (null !== $this->isMobileConfirmed) {
            $res['IsMobileConfirmed'] = $this->isMobileConfirmed;
        }

        if (null !== $this->isMobileLogin) {
            $res['IsMobileLogin'] = $this->isMobileLogin;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->nationalityCode) {
            $res['NationalityCode'] = $this->nationalityCode;
        }

        if (null !== $this->plainPassword) {
            $res['PlainPassword'] = $this->plainPassword;
        }

        if (null !== $this->preferredLanguage) {
            $res['PreferredLanguage'] = $this->preferredLanguage;
        }

        if (null !== $this->accountTypeCode) {
            $res['accountTypeCode'] = $this->accountTypeCode;
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
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['IsEmailConfirmed'])) {
            $model->isEmailConfirmed = $map['IsEmailConfirmed'];
        }

        if (isset($map['IsMobileConfirmed'])) {
            $model->isMobileConfirmed = $map['IsMobileConfirmed'];
        }

        if (isset($map['IsMobileLogin'])) {
            $model->isMobileLogin = $map['IsMobileLogin'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['NationalityCode'])) {
            $model->nationalityCode = $map['NationalityCode'];
        }

        if (isset($map['PlainPassword'])) {
            $model->plainPassword = $map['PlainPassword'];
        }

        if (isset($map['PreferredLanguage'])) {
            $model->preferredLanguage = $map['PreferredLanguage'];
        }

        if (isset($map['accountTypeCode'])) {
            $model->accountTypeCode = $map['accountTypeCode'];
        }

        return $model;
    }
}
