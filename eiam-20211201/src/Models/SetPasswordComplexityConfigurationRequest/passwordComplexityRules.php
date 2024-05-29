<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordComplexityConfigurationRequest;

use AlibabaCloud\Tea\Model;

class passwordComplexityRules extends Model
{
    /**
     * @description The type of the password check. Valid values:
     *
     *   inclusion_upper_case: The password must contain uppercase letters.
     *   inclusion_lower_case: The password must contain lowercase letters.
     *   inclusion_special_case: The password must contain one or more of the following special characters: @ % + \\ / \\" ! # $ ^ ? : , ( ) { } [ ] ~ - _ .
     *   inclusion_number: The password must contain digits.
     *   exclusion_username: The password cannot contain a username.
     *   exclusion_email: The password cannot contain an email prefix.
     *   exclusion_phone_number: The password cannot contain a mobile number.
     *   exclusion_display_name: The password cannot contain a display name.
     *
     * @example inclusion_upper_case
     *
     * @var string
     */
    public $passwordCheckType;
    protected $_name = [
        'passwordCheckType' => 'PasswordCheckType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passwordCheckType) {
            $res['PasswordCheckType'] = $this->passwordCheckType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passwordComplexityRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PasswordCheckType'])) {
            $model->passwordCheckType = $map['PasswordCheckType'];
        }

        return $model;
    }
}
