<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class CreateUserRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $effectiveEndTime;

    /**
     * @var int
     */
    public $effectiveStartTime;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $languageStatus;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $mobileCountryCode;

    /**
     * @var bool
     */
    public $needResetPassword;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceUserId;

    /**
     * @var string
     */
    public $twoFactorMethods;

    /**
     * @var string
     */
    public $twoFactorStatus;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'comment' => 'Comment',
        'displayName' => 'DisplayName',
        'effectiveEndTime' => 'EffectiveEndTime',
        'effectiveStartTime' => 'EffectiveStartTime',
        'email' => 'Email',
        'instanceId' => 'InstanceId',
        'language' => 'Language',
        'languageStatus' => 'LanguageStatus',
        'mobile' => 'Mobile',
        'mobileCountryCode' => 'MobileCountryCode',
        'needResetPassword' => 'NeedResetPassword',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'source' => 'Source',
        'sourceUserId' => 'SourceUserId',
        'twoFactorMethods' => 'TwoFactorMethods',
        'twoFactorStatus' => 'TwoFactorStatus',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->effectiveEndTime) {
            $res['EffectiveEndTime'] = $this->effectiveEndTime;
        }

        if (null !== $this->effectiveStartTime) {
            $res['EffectiveStartTime'] = $this->effectiveStartTime;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->languageStatus) {
            $res['LanguageStatus'] = $this->languageStatus;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->mobileCountryCode) {
            $res['MobileCountryCode'] = $this->mobileCountryCode;
        }

        if (null !== $this->needResetPassword) {
            $res['NeedResetPassword'] = $this->needResetPassword;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceUserId) {
            $res['SourceUserId'] = $this->sourceUserId;
        }

        if (null !== $this->twoFactorMethods) {
            $res['TwoFactorMethods'] = $this->twoFactorMethods;
        }

        if (null !== $this->twoFactorStatus) {
            $res['TwoFactorStatus'] = $this->twoFactorStatus;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EffectiveEndTime'])) {
            $model->effectiveEndTime = $map['EffectiveEndTime'];
        }

        if (isset($map['EffectiveStartTime'])) {
            $model->effectiveStartTime = $map['EffectiveStartTime'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['LanguageStatus'])) {
            $model->languageStatus = $map['LanguageStatus'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['MobileCountryCode'])) {
            $model->mobileCountryCode = $map['MobileCountryCode'];
        }

        if (isset($map['NeedResetPassword'])) {
            $model->needResetPassword = $map['NeedResetPassword'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceUserId'])) {
            $model->sourceUserId = $map['SourceUserId'];
        }

        if (isset($map['TwoFactorMethods'])) {
            $model->twoFactorMethods = $map['TwoFactorMethods'];
        }

        if (isset($map['TwoFactorStatus'])) {
            $model->twoFactorStatus = $map['TwoFactorStatus'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
