<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\SetPasswordPolicyResponse;

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
    public $hardExpire;

    /**
     * @var bool
     */
    public $requireLowercaseCharacters;

    /**
     * @var bool
     */
    public $requireNumbers;

    /**
     * @var int
     */
    public $maxLoginAttemps;

    /**
     * @var int
     */
    public $maxPasswordAge;

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
    public $requireUppercaseCharacters;

    /**
     * @var int
     */
    public $minimumPasswordDifferentCharacter;

    /**
     * @var bool
     */
    public $requireSymbols;
    protected $_name = [
        'minimumPasswordLength'             => 'MinimumPasswordLength',
        'hardExpire'                        => 'HardExpire',
        'requireLowercaseCharacters'        => 'RequireLowercaseCharacters',
        'requireNumbers'                    => 'RequireNumbers',
        'maxLoginAttemps'                   => 'MaxLoginAttemps',
        'maxPasswordAge'                    => 'MaxPasswordAge',
        'passwordNotContainUserName'        => 'PasswordNotContainUserName',
        'passwordReusePrevention'           => 'PasswordReusePrevention',
        'requireUppercaseCharacters'        => 'RequireUppercaseCharacters',
        'minimumPasswordDifferentCharacter' => 'MinimumPasswordDifferentCharacter',
        'requireSymbols'                    => 'RequireSymbols',
    ];

    public function validate()
    {
        Model::validateRequired('minimumPasswordLength', $this->minimumPasswordLength, true);
        Model::validateRequired('hardExpire', $this->hardExpire, true);
        Model::validateRequired('requireLowercaseCharacters', $this->requireLowercaseCharacters, true);
        Model::validateRequired('requireNumbers', $this->requireNumbers, true);
        Model::validateRequired('maxLoginAttemps', $this->maxLoginAttemps, true);
        Model::validateRequired('maxPasswordAge', $this->maxPasswordAge, true);
        Model::validateRequired('passwordNotContainUserName', $this->passwordNotContainUserName, true);
        Model::validateRequired('passwordReusePrevention', $this->passwordReusePrevention, true);
        Model::validateRequired('requireUppercaseCharacters', $this->requireUppercaseCharacters, true);
        Model::validateRequired('minimumPasswordDifferentCharacter', $this->minimumPasswordDifferentCharacter, true);
        Model::validateRequired('requireSymbols', $this->requireSymbols, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minimumPasswordLength) {
            $res['MinimumPasswordLength'] = $this->minimumPasswordLength;
        }
        if (null !== $this->hardExpire) {
            $res['HardExpire'] = $this->hardExpire;
        }
        if (null !== $this->requireLowercaseCharacters) {
            $res['RequireLowercaseCharacters'] = $this->requireLowercaseCharacters;
        }
        if (null !== $this->requireNumbers) {
            $res['RequireNumbers'] = $this->requireNumbers;
        }
        if (null !== $this->maxLoginAttemps) {
            $res['MaxLoginAttemps'] = $this->maxLoginAttemps;
        }
        if (null !== $this->maxPasswordAge) {
            $res['MaxPasswordAge'] = $this->maxPasswordAge;
        }
        if (null !== $this->passwordNotContainUserName) {
            $res['PasswordNotContainUserName'] = $this->passwordNotContainUserName;
        }
        if (null !== $this->passwordReusePrevention) {
            $res['PasswordReusePrevention'] = $this->passwordReusePrevention;
        }
        if (null !== $this->requireUppercaseCharacters) {
            $res['RequireUppercaseCharacters'] = $this->requireUppercaseCharacters;
        }
        if (null !== $this->minimumPasswordDifferentCharacter) {
            $res['MinimumPasswordDifferentCharacter'] = $this->minimumPasswordDifferentCharacter;
        }
        if (null !== $this->requireSymbols) {
            $res['RequireSymbols'] = $this->requireSymbols;
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
        if (isset($map['HardExpire'])) {
            $model->hardExpire = $map['HardExpire'];
        }
        if (isset($map['RequireLowercaseCharacters'])) {
            $model->requireLowercaseCharacters = $map['RequireLowercaseCharacters'];
        }
        if (isset($map['RequireNumbers'])) {
            $model->requireNumbers = $map['RequireNumbers'];
        }
        if (isset($map['MaxLoginAttemps'])) {
            $model->maxLoginAttemps = $map['MaxLoginAttemps'];
        }
        if (isset($map['MaxPasswordAge'])) {
            $model->maxPasswordAge = $map['MaxPasswordAge'];
        }
        if (isset($map['PasswordNotContainUserName'])) {
            $model->passwordNotContainUserName = $map['PasswordNotContainUserName'];
        }
        if (isset($map['PasswordReusePrevention'])) {
            $model->passwordReusePrevention = $map['PasswordReusePrevention'];
        }
        if (isset($map['RequireUppercaseCharacters'])) {
            $model->requireUppercaseCharacters = $map['RequireUppercaseCharacters'];
        }
        if (isset($map['MinimumPasswordDifferentCharacter'])) {
            $model->minimumPasswordDifferentCharacter = $map['MinimumPasswordDifferentCharacter'];
        }
        if (isset($map['RequireSymbols'])) {
            $model->requireSymbols = $map['RequireSymbols'];
        }

        return $model;
    }
}
