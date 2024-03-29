<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetPasswordPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class passwordPolicy extends Model
{
    /**
     * @description Indicates whether to disable logon after a password expires. Valid values:
     *
     *   true: disables logon after a password expires.
     *   false: does not disable logon after a password expires.
     *
     * @example true
     *
     * @var bool
     */
    public $hardExpire;

    /**
     * @description The number of password retries.
     *
     * Valid values: 0 to 32. The value 0 indicates that the number of password retries is not limited.
     * @example 5
     *
     * @var int
     */
    public $maxLoginAttempts;

    /**
     * @description The validity period of a password.
     *
     * Valid values: 1 to 120. Unit: days.
     * @example 90
     *
     * @var int
     */
    public $maxPasswordAge;

    /**
     * @description The maximum password length.
     *
     * @example 32
     *
     * @var int
     */
    public $maxPasswordLength;

    /**
     * @description The minimum number of different characters in a password.
     *
     * The minimum value is 0, which indicates that the minimum number of different characters in a password is not limited. The maximum value is the value of the `MinPasswordLength` parameter.
     * @example 8
     *
     * @var int
     */
    public $minPasswordDifferentChars;

    /**
     * @description The minimum password length.
     *
     * Valid values: 8 to 32 characters.
     * @example 8
     *
     * @var int
     */
    public $minPasswordLength;

    /**
     * @description Indicates whether to exclude the username from the password. Valid values:
     *
     *   true: A password cannot contain the username.
     *   false: A password can contain the username.
     *
     * @example true
     *
     * @var bool
     */
    public $passwordNotContainUsername;

    /**
     * @description The policy for password history check.
     *
     * >  Passwords that are generated before January 5, 2024 are not counted as historical passwords.
     * @example 1
     *
     * @var int
     */
    public $passwordReusePrevention;

    /**
     * @description Indicates whether lowercase letters are required in a password. Valid values:
     *
     *   true: Lowercase letters are required in a password.
     *   false: Lowercase letters are not required in a password.
     *
     * @example true
     *
     * @var bool
     */
    public $requireLowerCaseChars;

    /**
     * @description Indicates whether digits are required in a password. Valid values:
     *
     *   true: Digits are required in a password.
     *   false: Digits are not required in a password.
     *
     * @example true
     *
     * @var bool
     */
    public $requireNumbers;

    /**
     * @description Indicates whether special characters are required in a password. Valid values:
     *
     *   true: Special characters are required in a password.
     *   false: Special characters are not required in a password.
     *
     * @example true
     *
     * @var bool
     */
    public $requireSymbols;

    /**
     * @description Indicates whether uppercase letters are required in a password. Valid values:
     *
     *   true: Uppercase letters are required in a password.
     *   false: Uppercase letters are not required in a password.
     *
     * @example true
     *
     * @var bool
     */
    public $requireUpperCaseChars;
    protected $_name = [
        'hardExpire'                 => 'HardExpire',
        'maxLoginAttempts'           => 'MaxLoginAttempts',
        'maxPasswordAge'             => 'MaxPasswordAge',
        'maxPasswordLength'          => 'MaxPasswordLength',
        'minPasswordDifferentChars'  => 'MinPasswordDifferentChars',
        'minPasswordLength'          => 'MinPasswordLength',
        'passwordNotContainUsername' => 'PasswordNotContainUsername',
        'passwordReusePrevention'    => 'PasswordReusePrevention',
        'requireLowerCaseChars'      => 'RequireLowerCaseChars',
        'requireNumbers'             => 'RequireNumbers',
        'requireSymbols'             => 'RequireSymbols',
        'requireUpperCaseChars'      => 'RequireUpperCaseChars',
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
        if (null !== $this->maxLoginAttempts) {
            $res['MaxLoginAttempts'] = $this->maxLoginAttempts;
        }
        if (null !== $this->maxPasswordAge) {
            $res['MaxPasswordAge'] = $this->maxPasswordAge;
        }
        if (null !== $this->maxPasswordLength) {
            $res['MaxPasswordLength'] = $this->maxPasswordLength;
        }
        if (null !== $this->minPasswordDifferentChars) {
            $res['MinPasswordDifferentChars'] = $this->minPasswordDifferentChars;
        }
        if (null !== $this->minPasswordLength) {
            $res['MinPasswordLength'] = $this->minPasswordLength;
        }
        if (null !== $this->passwordNotContainUsername) {
            $res['PasswordNotContainUsername'] = $this->passwordNotContainUsername;
        }
        if (null !== $this->passwordReusePrevention) {
            $res['PasswordReusePrevention'] = $this->passwordReusePrevention;
        }
        if (null !== $this->requireLowerCaseChars) {
            $res['RequireLowerCaseChars'] = $this->requireLowerCaseChars;
        }
        if (null !== $this->requireNumbers) {
            $res['RequireNumbers'] = $this->requireNumbers;
        }
        if (null !== $this->requireSymbols) {
            $res['RequireSymbols'] = $this->requireSymbols;
        }
        if (null !== $this->requireUpperCaseChars) {
            $res['RequireUpperCaseChars'] = $this->requireUpperCaseChars;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passwordPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HardExpire'])) {
            $model->hardExpire = $map['HardExpire'];
        }
        if (isset($map['MaxLoginAttempts'])) {
            $model->maxLoginAttempts = $map['MaxLoginAttempts'];
        }
        if (isset($map['MaxPasswordAge'])) {
            $model->maxPasswordAge = $map['MaxPasswordAge'];
        }
        if (isset($map['MaxPasswordLength'])) {
            $model->maxPasswordLength = $map['MaxPasswordLength'];
        }
        if (isset($map['MinPasswordDifferentChars'])) {
            $model->minPasswordDifferentChars = $map['MinPasswordDifferentChars'];
        }
        if (isset($map['MinPasswordLength'])) {
            $model->minPasswordLength = $map['MinPasswordLength'];
        }
        if (isset($map['PasswordNotContainUsername'])) {
            $model->passwordNotContainUsername = $map['PasswordNotContainUsername'];
        }
        if (isset($map['PasswordReusePrevention'])) {
            $model->passwordReusePrevention = $map['PasswordReusePrevention'];
        }
        if (isset($map['RequireLowerCaseChars'])) {
            $model->requireLowerCaseChars = $map['RequireLowerCaseChars'];
        }
        if (isset($map['RequireNumbers'])) {
            $model->requireNumbers = $map['RequireNumbers'];
        }
        if (isset($map['RequireSymbols'])) {
            $model->requireSymbols = $map['RequireSymbols'];
        }
        if (isset($map['RequireUpperCaseChars'])) {
            $model->requireUpperCaseChars = $map['RequireUpperCaseChars'];
        }

        return $model;
    }
}
