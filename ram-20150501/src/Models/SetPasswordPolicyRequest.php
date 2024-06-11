<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class SetPasswordPolicyRequest extends Model
{
    /**
     * @description Specifies whether a password will expire.
     *
     * Valid values: `true` and `false`. Default value: `false`. If you leave this parameter unspecified, the default value false is used.
     *
     *   If you set this parameter to `true`, the Alibaba Cloud account to which the RAM users belong must reset the passwords before the RAM users can log on to the Alibaba Cloud Management Console.
     *   If you set this parameter to `false`, the RAM users can change the passwords after the passwords expire and then log on to the Alibaba Cloud Management Console.
     *
     * @example false
     *
     * @var bool
     */
    public $hardExpiry;

    /**
     * @description The maximum number of permitted logon attempts within one hour. The number of logon attempts is reset to zero if a RAM user changes the password.
     *
     * @example 5
     *
     * @var int
     */
    public $maxLoginAttemps;

    /**
     * @description The number of days for which a password is valid. Default value: 0. The default value indicates that the password never expires.
     *
     * @example 0
     *
     * @var int
     */
    public $maxPasswordAge;

    /**
     * @description The minimum required number of characters in a password.
     *
     * Valid values: 8 to 32. Default value: 8.
     * @example 12
     *
     * @var int
     */
    public $minimumPasswordLength;

    /**
     * @description The number of previous passwords that a RAM user is prevented from reusing. Default value: 0. The default value indicates that the RAM user can reuse previous passwords.
     *
     * @example 0
     *
     * @var int
     */
    public $passwordReusePrevention;

    /**
     * @description Specifies whether a password must contain one or more lowercase letters.
     *
     * @example true
     *
     * @var bool
     */
    public $requireLowercaseCharacters;

    /**
     * @description Specifies whether a password must contain one or more digits.
     *
     * @example true
     *
     * @var bool
     */
    public $requireNumbers;

    /**
     * @description Specifies whether a password must contain one or more special characters.
     *
     * @example true
     *
     * @var bool
     */
    public $requireSymbols;

    /**
     * @description Specifies whether a password must contain one or more uppercase letters.
     *
     * @example true
     *
     * @var bool
     */
    public $requireUppercaseCharacters;
    protected $_name = [
        'hardExpiry'                 => 'HardExpiry',
        'maxLoginAttemps'            => 'MaxLoginAttemps',
        'maxPasswordAge'             => 'MaxPasswordAge',
        'minimumPasswordLength'      => 'MinimumPasswordLength',
        'passwordReusePrevention'    => 'PasswordReusePrevention',
        'requireLowercaseCharacters' => 'RequireLowercaseCharacters',
        'requireNumbers'             => 'RequireNumbers',
        'requireSymbols'             => 'RequireSymbols',
        'requireUppercaseCharacters' => 'RequireUppercaseCharacters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hardExpiry) {
            $res['HardExpiry'] = $this->hardExpiry;
        }
        if (null !== $this->maxLoginAttemps) {
            $res['MaxLoginAttemps'] = $this->maxLoginAttemps;
        }
        if (null !== $this->maxPasswordAge) {
            $res['MaxPasswordAge'] = $this->maxPasswordAge;
        }
        if (null !== $this->minimumPasswordLength) {
            $res['MinimumPasswordLength'] = $this->minimumPasswordLength;
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
        if (isset($map['HardExpiry'])) {
            $model->hardExpiry = $map['HardExpiry'];
        }
        if (isset($map['MaxLoginAttemps'])) {
            $model->maxLoginAttemps = $map['MaxLoginAttemps'];
        }
        if (isset($map['MaxPasswordAge'])) {
            $model->maxPasswordAge = $map['MaxPasswordAge'];
        }
        if (isset($map['MinimumPasswordLength'])) {
            $model->minimumPasswordLength = $map['MinimumPasswordLength'];
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
