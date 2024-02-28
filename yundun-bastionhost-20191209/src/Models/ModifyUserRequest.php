<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserRequest extends Model
{
    /**
     * @description The new description of the user. The description can be up to 500 characters in length.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The new display name of the user. This display name can be up to 128 characters in length.
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
     * @description The new email address of the user.
     *
     * > This parameter is required when the TwoFactorStatus parameter is set to Enable and the TwoFactorMethods parameter is set to email.
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The ID of the bastion host where you want to modify user information.
     *
     * > You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw****
     *
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
     * @description The new mobile number of the user.
     *
     * > This parameter is required when the TwoFactorStatus parameter is set to Enable and the TwoFactorMethods parameter is set to sms or dingtalk.
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
     * - false: no
     * @example true
     *
     * @var bool
     */
    public $needResetPassword;

    /**
     * @description The new password of the user. The password must be 8 to 128 characters in length and must contain lowercase letters, uppercase letters, digits, and special characters.
     *
     * @example 321****
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID of the bastion host where you want to modify user information.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The two-factor authentication method. You can select only one method. Valid values:
     *
     *   **sms:** text message
     *   **email:** email
     *   **dingtalk:** DingTalk
     *   **totp OTP:** time-based one-time password (TOTP) app
     *
     * > *   When the TwoFactorStatus parameter is set to Enable, you must specify one of the preceding values.
     * @example sms
     *
     * @var string
     */
    public $twoFactorMethods;

    /**
     * @description The two-factor authentication status of the user. Valid values:
     *
     *   **Global:** follows the global settings
     *   **Disable:** disables two-factor authentication
     *   **Enable:** enable two-factor authentication and follows settings of the single user
     *
     * @example Enable
     *
     * @var string
     */
    public $twoFactorStatus;

    /**
     * @description The ID of the user whose information you want to modify.
     *
     * @example 1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'comment'            => 'Comment',
        'displayName'        => 'DisplayName',
        'effectiveEndTime'   => 'EffectiveEndTime',
        'effectiveStartTime' => 'EffectiveStartTime',
        'email'              => 'Email',
        'instanceId'         => 'InstanceId',
        'language'           => 'Language',
        'languageStatus'     => 'LanguageStatus',
        'mobile'             => 'Mobile',
        'mobileCountryCode'  => 'MobileCountryCode',
        'needResetPassword'  => 'NeedResetPassword',
        'password'           => 'Password',
        'regionId'           => 'RegionId',
        'twoFactorMethods'   => 'TwoFactorMethods',
        'twoFactorStatus'    => 'TwoFactorStatus',
        'userId'             => 'UserId',
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
