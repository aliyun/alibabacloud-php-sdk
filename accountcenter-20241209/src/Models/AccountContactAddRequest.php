<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;

class AccountContactAddRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var bool
     */
    public $asyncEmailVerify;

    /**
     * @var bool
     */
    public $asyncMobileVerify;

    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $contactMobile;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $contactPosition;

    /**
     * @var string
     */
    public $emailCode;

    /**
     * @var string
     */
    public $mobileCode;

    /**
     * @var string
     */
    public $orientedEcId;

    /**
     * @var string
     */
    public $orientedLeId;

    /**
     * @var string
     */
    public $orientedNbId;

    /**
     * @var bool
     */
    public $sharedContact;
    protected $_name = [
        'appName' => 'AppName',
        'asyncEmailVerify' => 'AsyncEmailVerify',
        'asyncMobileVerify' => 'AsyncMobileVerify',
        'contactEmail' => 'ContactEmail',
        'contactMobile' => 'ContactMobile',
        'contactName' => 'ContactName',
        'contactPosition' => 'ContactPosition',
        'emailCode' => 'EmailCode',
        'mobileCode' => 'MobileCode',
        'orientedEcId' => 'OrientedEcId',
        'orientedLeId' => 'OrientedLeId',
        'orientedNbId' => 'OrientedNbId',
        'sharedContact' => 'SharedContact',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->asyncEmailVerify) {
            $res['AsyncEmailVerify'] = $this->asyncEmailVerify;
        }

        if (null !== $this->asyncMobileVerify) {
            $res['AsyncMobileVerify'] = $this->asyncMobileVerify;
        }

        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }

        if (null !== $this->contactMobile) {
            $res['ContactMobile'] = $this->contactMobile;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->contactPosition) {
            $res['ContactPosition'] = $this->contactPosition;
        }

        if (null !== $this->emailCode) {
            $res['EmailCode'] = $this->emailCode;
        }

        if (null !== $this->mobileCode) {
            $res['MobileCode'] = $this->mobileCode;
        }

        if (null !== $this->orientedEcId) {
            $res['OrientedEcId'] = $this->orientedEcId;
        }

        if (null !== $this->orientedLeId) {
            $res['OrientedLeId'] = $this->orientedLeId;
        }

        if (null !== $this->orientedNbId) {
            $res['OrientedNbId'] = $this->orientedNbId;
        }

        if (null !== $this->sharedContact) {
            $res['SharedContact'] = $this->sharedContact;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AsyncEmailVerify'])) {
            $model->asyncEmailVerify = $map['AsyncEmailVerify'];
        }

        if (isset($map['AsyncMobileVerify'])) {
            $model->asyncMobileVerify = $map['AsyncMobileVerify'];
        }

        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }

        if (isset($map['ContactMobile'])) {
            $model->contactMobile = $map['ContactMobile'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['ContactPosition'])) {
            $model->contactPosition = $map['ContactPosition'];
        }

        if (isset($map['EmailCode'])) {
            $model->emailCode = $map['EmailCode'];
        }

        if (isset($map['MobileCode'])) {
            $model->mobileCode = $map['MobileCode'];
        }

        if (isset($map['OrientedEcId'])) {
            $model->orientedEcId = $map['OrientedEcId'];
        }

        if (isset($map['OrientedLeId'])) {
            $model->orientedLeId = $map['OrientedLeId'];
        }

        if (isset($map['OrientedNbId'])) {
            $model->orientedNbId = $map['OrientedNbId'];
        }

        if (isset($map['SharedContact'])) {
            $model->sharedContact = $map['SharedContact'];
        }

        return $model;
    }
}
