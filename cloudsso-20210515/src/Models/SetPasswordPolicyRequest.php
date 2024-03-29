<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class SetPasswordPolicyRequest extends Model
{
    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The number of password retries.
     *
     * Valid values: 0 to 32. The value 0 specifies that the number of password retries is not limited.
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
     * @description The minimum number of unique characters in a password.
     *
     * The minimum value is 0, which specifies that the minimum number of unique characters in a password is not limited. The maximum value is the value of the `MinPasswordLength` parameter.
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
     * @description Specifies whether a password can contain the username. Valid value:
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
    protected $_name = [
        'directoryId'                => 'DirectoryId',
        'maxLoginAttempts'           => 'MaxLoginAttempts',
        'maxPasswordAge'             => 'MaxPasswordAge',
        'minPasswordDifferentChars'  => 'MinPasswordDifferentChars',
        'minPasswordLength'          => 'MinPasswordLength',
        'passwordNotContainUsername' => 'PasswordNotContainUsername',
        'passwordReusePrevention'    => 'PasswordReusePrevention',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->maxLoginAttempts) {
            $res['MaxLoginAttempts'] = $this->maxLoginAttempts;
        }
        if (null !== $this->maxPasswordAge) {
            $res['MaxPasswordAge'] = $this->maxPasswordAge;
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['MaxLoginAttempts'])) {
            $model->maxLoginAttempts = $map['MaxLoginAttempts'];
        }
        if (isset($map['MaxPasswordAge'])) {
            $model->maxPasswordAge = $map['MaxPasswordAge'];
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

        return $model;
    }
}
