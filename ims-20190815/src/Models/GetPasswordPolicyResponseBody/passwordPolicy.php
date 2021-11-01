<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetPasswordPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class passwordPolicy extends Model
{
    /**
     * @var bool
     */
    public $hardExpire;

    /**
     * @var int
     */
    public $maxLoginAttemps;

    /**
     * @var int
     */
    public $maxPasswordAge;

    /**
     * @var int
     */
    public $minimumPasswordDifferentCharacter;

    /**
     * @var int
     */
    public $minimumPasswordLength;

    /**
     * @var bool
     */
    public $passwordNotContainUserName;

    /**
     * @var int
     */
    public $passwordReusePrevention;

    /**
     * @var bool
     */
    public $requireLowercaseCharacters;

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
