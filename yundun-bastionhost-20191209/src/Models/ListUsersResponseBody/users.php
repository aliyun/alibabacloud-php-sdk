<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUsersResponseBody;

use AlibabaCloud\Dara\Model;

class users extends Model
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
    public $source;

    /**
     * @var string
     */
    public $sourceUserId;

    /**
     * @var string[]
     */
    public $twoFactorMethods;

    /**
     * @var string
     */
    public $twoFactorStatus;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string[]
     */
    public $userState;
    protected $_name = [
        'comment' => 'Comment',
        'displayName' => 'DisplayName',
        'effectiveEndTime' => 'EffectiveEndTime',
        'effectiveStartTime' => 'EffectiveStartTime',
        'email' => 'Email',
        'language' => 'Language',
        'languageStatus' => 'LanguageStatus',
        'mobile' => 'Mobile',
        'mobileCountryCode' => 'MobileCountryCode',
        'needResetPassword' => 'NeedResetPassword',
        'source' => 'Source',
        'sourceUserId' => 'SourceUserId',
        'twoFactorMethods' => 'TwoFactorMethods',
        'twoFactorStatus' => 'TwoFactorStatus',
        'userId' => 'UserId',
        'userName' => 'UserName',
        'userState' => 'UserState',
    ];

    public function validate()
    {
        if (\is_array($this->twoFactorMethods)) {
            Model::validateArray($this->twoFactorMethods);
        }
        if (\is_array($this->userState)) {
            Model::validateArray($this->userState);
        }
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

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceUserId) {
            $res['SourceUserId'] = $this->sourceUserId;
        }

        if (null !== $this->twoFactorMethods) {
            if (\is_array($this->twoFactorMethods)) {
                $res['TwoFactorMethods'] = [];
                $n1 = 0;
                foreach ($this->twoFactorMethods as $item1) {
                    $res['TwoFactorMethods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->twoFactorStatus) {
            $res['TwoFactorStatus'] = $this->twoFactorStatus;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userState) {
            if (\is_array($this->userState)) {
                $res['UserState'] = [];
                $n1 = 0;
                foreach ($this->userState as $item1) {
                    $res['UserState'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceUserId'])) {
            $model->sourceUserId = $map['SourceUserId'];
        }

        if (isset($map['TwoFactorMethods'])) {
            if (!empty($map['TwoFactorMethods'])) {
                $model->twoFactorMethods = [];
                $n1 = 0;
                foreach ($map['TwoFactorMethods'] as $item1) {
                    $model->twoFactorMethods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TwoFactorStatus'])) {
            $model->twoFactorStatus = $map['TwoFactorStatus'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserState'])) {
            if (!empty($map['UserState'])) {
                $model->userState = [];
                $n1 = 0;
                foreach ($map['UserState'] as $item1) {
                    $model->userState[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
