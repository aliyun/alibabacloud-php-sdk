<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class SetPasswordPolicyRequest extends Model
{
    /**
     * @var int
     */
    public $minimumPasswordLength;

    /**
     * @var bool
     */
    public $requireLowercaseCharacters;

    /**
     * @var bool
     */
    public $requireUppercaseCharacters;

    /**
     * @var bool
     */
    public $requireNumbers;

    /**
     * @var bool
     */
    public $requireSymbols;

    /**
     * @var bool
     */
    public $hardExpiry;

    /**
     * @var int
     */
    public $maxPasswordAge;

    /**
     * @var int
     */
    public $passwordReusePrevention;

    /**
     * @var int
     */
    public $maxLoginAttemps;
    protected $_name = [
        'minimumPasswordLength'      => 'MinimumPasswordLength',
        'requireLowercaseCharacters' => 'RequireLowercaseCharacters',
        'requireUppercaseCharacters' => 'RequireUppercaseCharacters',
        'requireNumbers'             => 'RequireNumbers',
        'requireSymbols'             => 'RequireSymbols',
        'hardExpiry'                 => 'HardExpiry',
        'maxPasswordAge'             => 'MaxPasswordAge',
        'passwordReusePrevention'    => 'PasswordReusePrevention',
        'maxLoginAttemps'            => 'MaxLoginAttemps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minimumPasswordLength) {
            $res['MinimumPasswordLength'] = $this->minimumPasswordLength;
        }
        if (null !== $this->requireLowercaseCharacters) {
            $res['RequireLowercaseCharacters'] = $this->requireLowercaseCharacters;
        }
        if (null !== $this->requireUppercaseCharacters) {
            $res['RequireUppercaseCharacters'] = $this->requireUppercaseCharacters;
        }
        if (null !== $this->requireNumbers) {
            $res['RequireNumbers'] = $this->requireNumbers;
        }
        if (null !== $this->requireSymbols) {
            $res['RequireSymbols'] = $this->requireSymbols;
        }
        if (null !== $this->hardExpiry) {
            $res['HardExpiry'] = $this->hardExpiry;
        }
        if (null !== $this->maxPasswordAge) {
            $res['MaxPasswordAge'] = $this->maxPasswordAge;
        }
        if (null !== $this->passwordReusePrevention) {
            $res['PasswordReusePrevention'] = $this->passwordReusePrevention;
        }
        if (null !== $this->maxLoginAttemps) {
            $res['MaxLoginAttemps'] = $this->maxLoginAttemps;
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
        if (isset($map['MinimumPasswordLength'])) {
            $model->minimumPasswordLength = $map['MinimumPasswordLength'];
        }
        if (isset($map['RequireLowercaseCharacters'])) {
            $model->requireLowercaseCharacters = $map['RequireLowercaseCharacters'];
        }
        if (isset($map['RequireUppercaseCharacters'])) {
            $model->requireUppercaseCharacters = $map['RequireUppercaseCharacters'];
        }
        if (isset($map['RequireNumbers'])) {
            $model->requireNumbers = $map['RequireNumbers'];
        }
        if (isset($map['RequireSymbols'])) {
            $model->requireSymbols = $map['RequireSymbols'];
        }
        if (isset($map['HardExpiry'])) {
            $model->hardExpiry = $map['HardExpiry'];
        }
        if (isset($map['MaxPasswordAge'])) {
            $model->maxPasswordAge = $map['MaxPasswordAge'];
        }
        if (isset($map['PasswordReusePrevention'])) {
            $model->passwordReusePrevention = $map['PasswordReusePrevention'];
        }
        if (isset($map['MaxLoginAttemps'])) {
            $model->maxLoginAttemps = $map['MaxLoginAttemps'];
        }

        return $model;
    }
}
