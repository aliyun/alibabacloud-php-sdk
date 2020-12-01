<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetPasswordPolicyResponse;

use AlibabaCloud\Tea\Model;

class passwordPolicy extends Model
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
    public $hardExpire;

    /**
     * @var int
     */
    public $maxLoginAttemps;

    /**
     * @var int
     */
    public $passwordReusePrevention;

    /**
     * @var int
     */
    public $maxPasswordAge;

    /**
     * @var int
     */
    public $minimumPasswordDifferentCharacter;

    /**
     * @var bool
     */
    public $passwordNotContainUserName;
    protected $_name = [
        'minimumPasswordLength'             => 'MinimumPasswordLength',
        'requireLowercaseCharacters'        => 'RequireLowercaseCharacters',
        'requireUppercaseCharacters'        => 'RequireUppercaseCharacters',
        'requireNumbers'                    => 'RequireNumbers',
        'requireSymbols'                    => 'RequireSymbols',
        'hardExpire'                        => 'HardExpire',
        'maxLoginAttemps'                   => 'MaxLoginAttemps',
        'passwordReusePrevention'           => 'PasswordReusePrevention',
        'maxPasswordAge'                    => 'MaxPasswordAge',
        'minimumPasswordDifferentCharacter' => 'MinimumPasswordDifferentCharacter',
        'passwordNotContainUserName'        => 'PasswordNotContainUserName',
    ];

    public function validate()
    {
        Model::validateRequired('minimumPasswordLength', $this->minimumPasswordLength, true);
        Model::validateRequired('requireLowercaseCharacters', $this->requireLowercaseCharacters, true);
        Model::validateRequired('requireUppercaseCharacters', $this->requireUppercaseCharacters, true);
        Model::validateRequired('requireNumbers', $this->requireNumbers, true);
        Model::validateRequired('requireSymbols', $this->requireSymbols, true);
        Model::validateRequired('hardExpire', $this->hardExpire, true);
        Model::validateRequired('maxLoginAttemps', $this->maxLoginAttemps, true);
        Model::validateRequired('passwordReusePrevention', $this->passwordReusePrevention, true);
        Model::validateRequired('maxPasswordAge', $this->maxPasswordAge, true);
        Model::validateRequired('minimumPasswordDifferentCharacter', $this->minimumPasswordDifferentCharacter, true);
        Model::validateRequired('passwordNotContainUserName', $this->passwordNotContainUserName, true);
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
        if (null !== $this->hardExpire) {
            $res['HardExpire'] = $this->hardExpire;
        }
        if (null !== $this->maxLoginAttemps) {
            $res['MaxLoginAttemps'] = $this->maxLoginAttemps;
        }
        if (null !== $this->passwordReusePrevention) {
            $res['PasswordReusePrevention'] = $this->passwordReusePrevention;
        }
        if (null !== $this->maxPasswordAge) {
            $res['MaxPasswordAge'] = $this->maxPasswordAge;
        }
        if (null !== $this->minimumPasswordDifferentCharacter) {
            $res['MinimumPasswordDifferentCharacter'] = $this->minimumPasswordDifferentCharacter;
        }
        if (null !== $this->passwordNotContainUserName) {
            $res['PasswordNotContainUserName'] = $this->passwordNotContainUserName;
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
        if (isset($map['HardExpire'])) {
            $model->hardExpire = $map['HardExpire'];
        }
        if (isset($map['MaxLoginAttemps'])) {
            $model->maxLoginAttemps = $map['MaxLoginAttemps'];
        }
        if (isset($map['PasswordReusePrevention'])) {
            $model->passwordReusePrevention = $map['PasswordReusePrevention'];
        }
        if (isset($map['MaxPasswordAge'])) {
            $model->maxPasswordAge = $map['MaxPasswordAge'];
        }
        if (isset($map['MinimumPasswordDifferentCharacter'])) {
            $model->minimumPasswordDifferentCharacter = $map['MinimumPasswordDifferentCharacter'];
        }
        if (isset($map['PasswordNotContainUserName'])) {
            $model->passwordNotContainUserName = $map['PasswordNotContainUserName'];
        }

        return $model;
    }
}
