<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class SetPasswordPolicyRequest extends Model
{
    /**
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

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
