<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetPasswordPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class passwordPolicy extends Model
{
    /**
     * @description Indicates whether to disable logon after the password expires.
     *
     * @example false
     *
     * @var bool
     */
    public $hardExpire;

    /**
     * @description The maximum number of password retries.
     *
     * @example 0
     *
     * @var int
     */
    public $maxLoginAttemps;

    /**
     * @description The validity period of the password.
     *
     * @example 0
     *
     * @var int
     */
    public $maxPasswordAge;

    /**
     * @description The minimum number of unique characters in the password.
     *
     * @example 0
     *
     * @var int
     */
    public $minimumPasswordDifferentCharacter;

    /**
     * @description The minimum required number of characters in a password.
     *
     * @example 8
     *
     * @var int
     */
    public $minimumPasswordLength;

    /**
     * @description Indicates whether to exclude the username from the password.
     *
     * @example false
     *
     * @var bool
     */
    public $passwordNotContainUserName;

    /**
     * @description The policy for password history check.
     *
     * @example 0
     *
     * @var int
     */
    public $passwordReusePrevention;

    /**
     * @description Indicates whether the password must contain lowercase letters.
     *
     * @example false
     *
     * @var bool
     */
    public $requireLowercaseCharacters;

    /**
     * @description Indicates whether the password must contain digits.
     *
     * @example false
     *
     * @var bool
     */
    public $requireNumbers;

    /**
     * @description Indicates whether the password must contain special characters.
     *
     * @example false
     *
     * @var bool
     */
    public $requireSymbols;

    /**
     * @description Indicates whether the password must contain uppercase letters.
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
     * @return passwordPolicy
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
