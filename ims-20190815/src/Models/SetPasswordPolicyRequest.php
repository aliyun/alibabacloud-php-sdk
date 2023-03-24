<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetPasswordPolicyRequest extends Model
{
    /**
     * @description Specifies whether to disable logon after the password expires. Valid values:
     *
     *   true: After the password expires, you cannot use the password to log on to the console. You can log on to the console only after you reset the password by using your Alibaba Cloud account or as a RAM user that has administrative rights.
     *   false: After the password expires, you can change the password to log on to the console. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $hardExpire;

    /**
     * @description The maximum number of password retries. If you enter the wrong passwords for the specified consecutive times, the account is locked for one hour.
     *
     * The default value is 0, which indicates that the password retries are not limited.
     * @example 0
     *
     * @var int
     */
    public $maxLoginAttemps;

    /**
     * @description The validity period of the password.
     *
     * The default value is 0, which indicates that the password never expires.
     * @example 0
     *
     * @var int
     */
    public $maxPasswordAge;

    /**
     * @description The minimum number of unique characters in the password.
     *
     * The default value is 0, which indicates that no limits are imposed on the number of unique characters in a password.
     * @example 0
     *
     * @var int
     */
    public $minimumPasswordDifferentCharacter;

    /**
     * @description The minimum number of characters in the password.
     *
     * Valid values: 8 to 32. Default value: 8.
     * @example 8
     *
     * @var int
     */
    public $minimumPasswordLength;

    /**
     * @description Specifies whether to exclude the username from the password. Valid values:
     *
     *   true: A password cannot contain the username.
     *   false: A password can contain the username. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $passwordNotContainUserName;

    /**
     * @description The policy for password history check.
     *
     * The default value is 0, which indicates that RAM users can reuse previous passwords.
     * @example 0
     *
     * @var int
     */
    public $passwordReusePrevention;

    /**
     * @description Specifies whether the password must contain lowercase letters. Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $requireLowercaseCharacters;

    /**
     * @description Specifies whether the password must contain digits. Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $requireNumbers;

    /**
     * @description Specifies whether the password must contain special characters. Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $requireSymbols;

    /**
     * @description Specifies whether the password must contain uppercase letters. Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $requireUppercaseCharacters;
    protected $_name = [
        'hardExpire'                        => 'HardExpire',
        'maxLoginAttemps'                   => 'MaxLoginAttemps',
        'maxPasswordAge'                    => 'MaxPasswordAge',
        'minimumPasswordDifferentCharacter' => 'MinimumPasswordDifferentCharacter',
        'minimumPasswordLength'             => 'MinimumPasswordLength',
        'passwordNotContainUserName'        => 'PasswordNotContainUserName',
        'passwordReusePrevention'           => 'PasswordReusePrevention',
        'requireLowercaseCharacters'        => 'RequireLowercaseCharacters',
        'requireNumbers'                    => 'RequireNumbers',
        'requireSymbols'                    => 'RequireSymbols',
        'requireUppercaseCharacters'        => 'RequireUppercaseCharacters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hardExpire) {
            $res['HardExpire'] = $this->hardExpire;
        }
        if (null !== $this->maxLoginAttemps) {
            $res['MaxLoginAttemps'] = $this->maxLoginAttemps;
        }
        if (null !== $this->maxPasswordAge) {
            $res['MaxPasswordAge'] = $this->maxPasswordAge;
        }
        if (null !== $this->minimumPasswordDifferentCharacter) {
            $res['MinimumPasswordDifferentCharacter'] = $this->minimumPasswordDifferentCharacter;
        }
        if (null !== $this->minimumPasswordLength) {
            $res['MinimumPasswordLength'] = $this->minimumPasswordLength;
        }
        if (null !== $this->passwordNotContainUserName) {
            $res['PasswordNotContainUserName'] = $this->passwordNotContainUserName;
        }
        if (null !== $this->passwordReusePrevention) {
            $res['PasswordReusePrevention'] = $this->passwordReusePrevention;
        }
        if (null !== $this->requireLowercaseCharacters) {
            $res['RequireLowercaseCharacters'] = $this->requireLowercaseCharacters;
        }
        if (null !== $this->requireNumbers) {
            $res['RequireNumbers'] = $this->requireNumbers;
        }
        if (null !== $this->requireSymbols) {
            $res['RequireSymbols'] = $this->requireSymbols;
        }
        if (null !== $this->requireUppercaseCharacters) {
            $res['RequireUppercaseCharacters'] = $this->requireUppercaseCharacters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetPasswordPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HardExpire'])) {
            $model->hardExpire = $map['HardExpire'];
        }
        if (isset($map['MaxLoginAttemps'])) {
            $model->maxLoginAttemps = $map['MaxLoginAttemps'];
        }
        if (isset($map['MaxPasswordAge'])) {
            $model->maxPasswordAge = $map['MaxPasswordAge'];
        }
        if (isset($map['MinimumPasswordDifferentCharacter'])) {
            $model->minimumPasswordDifferentCharacter = $map['MinimumPasswordDifferentCharacter'];
        }
        if (isset($map['MinimumPasswordLength'])) {
            $model->minimumPasswordLength = $map['MinimumPasswordLength'];
        }
        if (isset($map['PasswordNotContainUserName'])) {
            $model->passwordNotContainUserName = $map['PasswordNotContainUserName'];
        }
        if (isset($map['PasswordReusePrevention'])) {
            $model->passwordReusePrevention = $map['PasswordReusePrevention'];
        }
        if (isset($map['RequireLowercaseCharacters'])) {
            $model->requireLowercaseCharacters = $map['RequireLowercaseCharacters'];
        }
        if (isset($map['RequireNumbers'])) {
            $model->requireNumbers = $map['RequireNumbers'];
        }
        if (isset($map['RequireSymbols'])) {
            $model->requireSymbols = $map['RequireSymbols'];
        }
        if (isset($map['RequireUppercaseCharacters'])) {
            $model->requireUppercaseCharacters = $map['RequireUppercaseCharacters'];
        }

        return $model;
    }
}
