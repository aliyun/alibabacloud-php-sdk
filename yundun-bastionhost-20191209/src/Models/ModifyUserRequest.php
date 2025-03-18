<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserRequest extends Model
{
    /**
     * @description The new remarks of the user. The remarks can be up to 500 characters in length.
     *
     * >  Leave this parameter empty if you do not want to change the remarks of the user.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The new display name of the user. The display name can be up to 128 characters in length.
     *
     * >  Leave this parameter empty if you do not want to change the display name of the user.
     *
     * @example Bob
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The end time of the validity period of the user. Specify a UNIX timestamp. Unit: seconds.
     *
     * >  Leave this parameter empty if you do not want to change the end time of the validity period.
     *
     * @example 1672502400
     *
     * @var int
     */
    public $effectiveEndTime;

    /**
     * @description The start time of the validity period of the user. Specify a UNIX timestamp. Unit: seconds.
     *
     * >  Leave this parameter empty if you do not want to change the start time of the validity period.
     *
     * @example 1669630029
     *
     * @var int
     */
    public $effectiveStartTime;

    /**
     * @description The new email address of the user.
     *
     * >
     *
     *   This parameter is required if TwoFactorStatus is set to Enable and TwoFactorMethods is set to email, or if TwoFactorStatus is set to Global and TwoFactorMethods is set to email in the global two-factor authentication settings.
     *
     *   You can call the [GetInstanceTwoFactor](https://help.aliyun.com/document_detail/462968.html) operation to query the global two-factor authentication settings.
     *
     *   Leave this parameter empty if you do not want to change the email address of the user.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The ID of the bastion host on which you want to modify the information about the user.
     *
     * >  You can call the [DescribeInstances](https://help.aliyun.com/document_detail/153281.html) operation to query the bastion host ID.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required if LanguageStatus is set to Custom.
     *
     * - **zh-cn**: simplified Chinese
     * - **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description Specifies whether to send notifications in the language specified in the global settings or a custom language.
     *
     *   **Global**
     *   **Custom**
     *
     * >  Leave this parameter empty if you do not want to change the natural language used to notify the user.
     *
     * @example Custom
     *
     * @var string
     */
    public $languageStatus;

    /**
     * @description The new mobile phone number of the user.
     *
     * >
     *
     *   This parameter is required if TwoFactorStatus is set to Enable and TwoFactorMethods is set to sms or dingtalk, or if TwoFactorStatus is set to Global and TwoFactorMethods is set to sms or dingtalk in the global two-factor authentication settings.
     *
     *   You can call the [GetInstanceTwoFactor](https://help.aliyun.com/document_detail/462968.html) operation to query the global two-factor authentication settings.
     *
     *   Leave this parameter empty if you do not want to change the mobile phone number of the user.
     *
     * @example 1358888****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The country where the new mobile number of the user is registered. Valid values:
     *
     *   **CN:** the Chinese mainland, whose country calling code is +86
     *   **HK:** Hong Kong (China), whose country calling code is +852
     *   **MO:** Macao (China), whose country calling code is +853
     *   **TW:** Taiwan (China), whose country calling code is +886
     *   **RU:** Russia, whose country calling code is +7
     *   **SG:** Singapore, whose country calling code is +65
     *   **MY:** Malaysia, whose country calling code is +60
     *   **ID:** Indonesia, whose country calling code is +62
     *   **DE:** Germany, whose country calling code is +49
     *   **AU:** Australia, whose country calling code is +61
     *   **US:** US, whose country calling code is +1
     *   **AE:** United Arab Emirates, whose country calling code is +971
     *   **JP:** Japan, whose country calling code is +81
     *   **GB:** UK, whose country calling code is +44
     *   **IN:** India, whose country calling code is +91
     *   **KR:** Republic of Korea, whose country calling code is +82
     *   **PH:** Philippines, whose country calling code is +63
     *   **CH:** Switzerland, whose country calling code is +41
     *   **SE:** Sweden, whose country calling code is +46
     *   **SA:** Saudi Arabia, whose country calling code is +966
     *
     * @example CN
     *
     * @var string
     */
    public $mobileCountryCode;

    /**
     * @description Specifies whether password reset is required upon the next logon. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  Leave this parameter empty if you do not want to change the password reset settings for the user.
     *
     * @example true
     *
     * @var bool
     */
    public $needResetPassword;

    /**
     * @description The new password of the user. The password must be 8 to 128 characters in length. It must contain uppercase letters, lowercase letters, digits, and special characters.
     *
     * > Leave this parameter empty if you do not want to change the password of the user.
     *
     * @example 321****
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID of the bastion host on which you want to modify the information about the user.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The two-factor authentication method. You can select only one method. Valid values:
     *
     *   **sms**: text message-based two-factor authentication.
     *   **email**: email-based two-factor authentication.
     *   **dingtalk**: DingTalk-based two-factor authentication.
     *   **totp OTP:** one-time password (OTP) token-based two-factor authentication.
     *
     * >  If TwoFactorStatus is set to Enable, you must specify one of the valid values as TwoFactorMethods.
     *
     * @example sms
     *
     * @var string
     */
    public $twoFactorMethods;

    /**
     * @description Specifies whether two-factor authentication is enabled for the user. Valid values:
     *
     *   **Global**: The global settings apply.
     *   **Disable**: Two-factor authentication is disabled.
     *   **Enable**: Two-factor authentication is enabled and user-specific settings apply.
     *
     * >  Leave this parameter empty if you do not want to change the two-factory authentication settings for the user.
     *
     * @example Enable
     *
     * @var string
     */
    public $twoFactorStatus;

    /**
     * @description The ID of the user whose information you want to modify.
     *
     * >  You can call the [ListUsers](https://help.aliyun.com/document_detail/204522.html) operation to query the user ID.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $userId;
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
        'twoFactorMethods' => 'TwoFactorMethods',
        'twoFactorStatus' => 'TwoFactorStatus',
        'userId' => 'UserId',
    ];

    public function validate() {}

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
        if (null !== $this->twoFactorMethods) {
            $res['TwoFactorMethods'] = $this->twoFactorMethods;
        }
        if (null !== $this->twoFactorStatus) {
            $res['TwoFactorStatus'] = $this->twoFactorStatus;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserRequest
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
        if (isset($map['TwoFactorMethods'])) {
            $model->twoFactorMethods = $map['TwoFactorMethods'];
        }
        if (isset($map['TwoFactorStatus'])) {
            $model->twoFactorStatus = $map['TwoFactorStatus'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
