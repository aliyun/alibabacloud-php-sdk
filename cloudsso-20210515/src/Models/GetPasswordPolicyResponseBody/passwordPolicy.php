<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetPasswordPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class passwordPolicy extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hardExpire;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxLoginAttempts;

    /**
     * @example 90
     *
     * @var int
     */
    public $maxPasswordAge;

    /**
     * @example 32
     *
     * @var int
     */
    public $maxPasswordLength;

    /**
     * @example 8
     *
     * @var int
     */
    public $minPasswordDifferentChars;

    /**
     * @example 8
     *
     * @var int
     */
    public $minPasswordLength;

    /**
     * @example true
     *
     * @var bool
     */
    public $passwordNotContainUsername;

    /**
     * @example 1
     *
     * @var int
     */
    public $passwordReusePrevention;

    /**
     * @example true
     *
     * @var bool
     */
    public $requireLowerCaseChars;

    /**
     * @example true
     *
     * @var bool
     */
    public $requireNumbers;

    /**
     * @example true
     *
     * @var bool
     */
    public $requireSymbols;

    /**
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
