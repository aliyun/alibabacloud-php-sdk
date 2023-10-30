<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetUserResponseBody;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @description The description of the user.
     *
     * @example commet
     *
     * @var string
     */
    public $comment;

    /**
     * @description The display name of the user.
     *
     * @example Bob
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The end of the validity period of the user. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1672502400
     *
     * @var int
     */
    public $effectiveEndTime;

    /**
     * @description The beginning of the validity period of the user. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1669630029
     *
     * @var int
     */
    public $effectiveStartTime;

    /**
     * @description The email address of the user.
     *
     * @example 1099**@qq.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The mobile phone number of the user.
     *
     * @example 1359999****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The location in which the mobile number of the user is registered. Valid values:
     *
     *   **CN**: the Chinese mainland, whose country calling code is +86
     *   **HK**: Hong Kong (China), whose country calling code is +852
     *   **MO**: Macao (China), whose country calling code is +853
     *   **TW**: Taiwan (China), whose country calling code is +886
     *   **RU**: Russia, whose country calling code is +7
     *   **SG**: Singapore, whose country calling code is +65
     *   **MY**: Malaysia, whose country calling code is +60
     *   **ID**: Indonesia, whose country calling code is +62
     *   **DE**: Germany, whose country calling code is +49
     *   **AU**: Australia, whose country calling code is +61
     *   **US**: US, whose country calling code is +1
     *   **AE**: United Arab Emirates, whose country calling code is +971
     *   **JP:** Japan, whose country calling code is +81
     *   **GB**: UK, whose country calling code is +44
     *   **IN**: India, whose country calling code is +91
     *   **KR**: Republic of Korea, whose country calling code is +82
     *   **PH**: Philippines, whose country calling code is +63
     *   **CH**: Switzerland, whose country calling code is +41
     *   **SE**: Sweden, whose country calling code is +46
     *
     * @example CN
     *
     * @var string
     */
    public $mobileCountryCode;

    /**
     * @description Specifies whether password reset is required upon the next logon. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $needResetPassword;

    /**
     * @description The source of the user. Valid values:
     *
     *   **Local**: a local user
     *   **Ram**: a RAM user
     *
     * @example Local
     *
     * @var string
     */
    public $source;

    /**
     * @description The unique ID of the user.
     *
     * > This parameter uniquely identifies a RAM user of the bastion host. A value is returned for this parameter if the **Source** parameter is set to **Ram**. No value is returned for this parameter if the **Source** parameter is set to **Local**.
     * @example 122748924538****
     *
     * @var string
     */
    public $sourceUserId;

    /**
     * @description An array that consists of the details of the two-factor authentication method.
     *
     * @var string[]
     */
    public $twoFactorMethods;

    /**
     * @description The two-factor authentication status of the user. Valid values:
     *
     *   **Global**: The global settings are used.
     *   **Disable**: The two-factor authentication is disabled.
     *   **Enable**: The two-factor authentication is enabled and the user-specific setting is used.
     *
     * @example Enable
     *
     * @var string
     */
    public $twoFactorStatus;

    /**
     * @description The ID of the user.
     *
     * @example 1
     *
     * @var string
     */
    public $userId;

    /**
     * @description The logon name of the user.
     *
     * @example abcabc_def
     *
     * @var string
     */
    public $userName;

    /**
     * @description An array that consists of the details of the user status.
     *
     * @var string[]
     */
    public $userState;
    protected $_name = [
        'comment'            => 'Comment',
        'displayName'        => 'DisplayName',
        'effectiveEndTime'   => 'EffectiveEndTime',
        'effectiveStartTime' => 'EffectiveStartTime',
        'email'              => 'Email',
        'mobile'             => 'Mobile',
        'mobileCountryCode'  => 'MobileCountryCode',
        'needResetPassword'  => 'NeedResetPassword',
        'source'             => 'Source',
        'sourceUserId'       => 'SourceUserId',
        'twoFactorMethods'   => 'TwoFactorMethods',
        'twoFactorStatus'    => 'TwoFactorStatus',
        'userId'             => 'UserId',
        'userName'           => 'UserName',
        'userState'          => 'UserState',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['TwoFactorMethods'] = $this->twoFactorMethods;
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
            $res['UserState'] = $this->userState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
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
                $model->twoFactorMethods = $map['TwoFactorMethods'];
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
                $model->userState = $map['UserState'];
            }
        }

        return $model;
    }
}
