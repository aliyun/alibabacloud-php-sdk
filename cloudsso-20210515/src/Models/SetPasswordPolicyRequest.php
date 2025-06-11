<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class SetPasswordPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var int
     */
    public $maxLoginAttempts;

    /**
     * @var int
     */
    public $maxPasswordAge;

    /**
     * @var int
     */
    public $minPasswordDifferentChars;

    /**
     * @var int
     */
    public $minPasswordLength;

    /**
     * @var bool
     */
    public $passwordNotContainUsername;

    /**
     * @var int
     */
    public $passwordReusePrevention;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'maxLoginAttempts' => 'MaxLoginAttempts',
        'maxPasswordAge' => 'MaxPasswordAge',
        'minPasswordDifferentChars' => 'MinPasswordDifferentChars',
        'minPasswordLength' => 'MinPasswordLength',
        'passwordNotContainUsername' => 'PasswordNotContainUsername',
        'passwordReusePrevention' => 'PasswordReusePrevention',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
