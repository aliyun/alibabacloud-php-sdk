<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateUserRequest extends Model
{
    /**
     * @description The remarks of the user that you want to add. The remarks can be up to 500 characters in length.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The display name of the user that you want to add. The display name can be up to 128 characters in length.
     *
     * >  If you leave this parameter empty, the logon name is used as the display name.
     *
     * @example Bob
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The end time of the validity period of the user. Specify a UNIX timestamp. Unit: seconds.
     *
     * @example 1672502400
     *
     * @var int
     */
    public $effectiveEndTime;

    /**
     * @description The start time of the validity period of the user. Specify a UNIX timestamp. Unit: seconds.
     *
     * @example 1669630029
     *
     * @var int
     */
    public $effectiveStartTime;

    /**
     * @description The email address of the user that you want to add.
     *
     * >
     *
     *   This parameter is required if TwoFactorStatus is set to Enable and TwoFactorMethods is set to email, or if TwoFactorStatus is set to Global and TwoFactorMethods is set to email in the global two-factor authentication settings.
     *
     *   You can call the [GetInstanceTwoFactor](https://help.aliyun.com/document_detail/462968.html) operation to query the global two-factor authentication settings.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The ID of the bastion host to which you want to add a user.
     *
     * > You can call the [DescribeInstances](https://help.aliyun.com/document_detail/153281.html) operation to query the bastion host ID.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required if LanguageStatus is set to Custom. Valid values:
     *
     *   **zh-cn**: simplified Chinese.
     *   **en**: English.
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
     * >  If you leave this parameter empty, the default value Global is used.
     *
     * @example Custom
     *
     * @var string
     */
    public $languageStatus;

    /**
     * @description The mobile phone number of the user that you want to add.
     *
     * >
     *
     *   This parameter is required if TwoFactorStatus is set to Enable and TwoFactorMethods is set to sms or dingtalk, or if TwoFactorStatus is set to Global and TwoFactorMethods is set to sms or dingtalk in the global two-factor authentication settings.
     *
     *   You can call the [GetInstanceTwoFactor](https://help.aliyun.com/document_detail/462968.html) operation to query the global two-factor authentication settings.
     *
     * @example 1359999****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description The location where the mobile phone number of the user is registered. Default value: CN. Valid values:
     *
     *   **CN**: the Chinese mainland, whose international dialing code is +86.
     *   **HK**: Hong Kong (China), whose international dialing code is +852.
     *   **MO**: Macao (China), whose international dialing code is +853.
     *   **TW**: Taiwan (China), whose international dialing code is +886.
     *   **RU**: Russia, whose international dialing code is +7.
     *   **SG**: Singapore, whose international dialing code is +65.
     *   **MY**: Malaysia, whose international dialing code is +60.
     *   **ID**: Indonesia, whose international dialing code is +62.
     *   **DE**: Germany, whose international dialing code is +49.
     *   **AU**: Australia, whose international dialing code is +61.
     *   **US**: US, whose international dialing code is +1.
     *   **AE**: United Arab Emirates, whose international dialing code is +971.
     *   **JP**: Japan, whose international dialing code is +81.
     *   **GB**: UK, whose international dialing code is +44.
     *   **IN**: India, whose international dialing code is +91.
     *   **KR**: Republic of Korea, whose international dialing code is +82.
     *   **PH**: Philippines, whose international dialing code is +63.
     *   **CH**: Switzerland, whose international dialing code is +41.
     *   **SE:** Sweden, whose international dialing code is +46.
     *   **SA:** Saudi Arabia, whose international dialing code is +966.
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
     * >  If you leave this parameter empty, the default value false is used.
     *
     * @example true
     *
     * @var bool
     */
    public $needResetPassword;

    /**
     * @description The logon password of the user that you want to add. The logon password must be 8 to 128 characters in length. It must contain uppercase letters, lowercase letters, digits, and special characters.
     *
     * > This parameter is required if Source is set to Local.
     *
     * @example 213****
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID of the bastion host to which you want to add a user.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the user that you want to add. Valid values:
     *
     *   **Local**: a local user.
     *   **Ram**: a RAM user.
     *   **AD**: an AD-authenticated user.
     *   **LDAP**: an LDAP-authenticated user.
     *
     * This parameter is required.
     *
     * @example local
     *
     * @var string
     */
    public $source;

    /**
     * @description The unique ID of the user that you want to add.
     *
     * >
     *
     *   This parameter uniquely identifies a RAM user of the bastion host. This parameter is required if Source is set to Ram. You can call the [ListUsers](https://help.aliyun.com/document_detail/28684.html) operation in RAM to obtain the unique ID of the user from the UserId response parameter.
     *
     *   This parameter is required if Source is set to AD or LDAP. Specify the distinguished name (DN) of the Active Directory (AD)-authenticated user or Lightweight Directory Access Protocol (LDAP)-authenticated user that you want to add.
     *
     * @example 122748924538****
     *
     * @var string
     */
    public $sourceUserId;

    /**
     * @description The two-factor authentication method. You can select only one method. Valid values:
     *
     *   **sms**: text message-based two-factor authentication.
     *   **email**: email-based two-factor authentication.
     *   **dingtalk**: DingTalk-based two-factor authentication.
     *   **totp OTP**: one-time password (OTP) token-based two-factor authentication.
     *
     * >  If TwoFactorStatus is set to Enable, you must select one of the preceding values for TwoFactorMethods.
     *
     * @example ["sms"]
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
     * >  If you leave this parameter empty, the default value Global is used.
     *
     * @example Enable
     *
     * @var string
     */
    public $twoFactorStatus;

    /**
     * @description The logon name of the user that you want to add. The logon name must be 1 to 128 characters in length and can contain only letters, digits, and underscores (_).
     *
     * This parameter is required.
     *
     * @example abc_def
     *
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

    /**
     * @param array $map
     *
     * @return CreateUserRequest
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
