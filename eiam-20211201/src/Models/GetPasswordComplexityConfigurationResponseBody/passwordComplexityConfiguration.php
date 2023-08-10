<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordComplexityConfigurationResponseBody;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordComplexityConfigurationResponseBody\passwordComplexityConfiguration\passwordComplexityRules;
use AlibabaCloud\Tea\Model;

class passwordComplexityConfiguration extends Model
{
    /**
     * @description The password complexity rules.
     *
     * @var passwordComplexityRules[]
     */
    public $passwordComplexityRules;

    /**
     * @description The minimum number of characters in a password.
     *
     * @example 3
     *
     * @var int
     */
    public $passwordMinLength;
    protected $_name = [
        'passwordComplexityRules' => 'PasswordComplexityRules',
        'passwordMinLength'       => 'PasswordMinLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passwordComplexityRules) {
            $res['PasswordComplexityRules'] = [];
            if (null !== $this->passwordComplexityRules && \is_array($this->passwordComplexityRules)) {
                $n = 0;
                foreach ($this->passwordComplexityRules as $item) {
                    $res['PasswordComplexityRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passwordMinLength) {
            $res['PasswordMinLength'] = $this->passwordMinLength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passwordComplexityConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PasswordComplexityRules'])) {
            if (!empty($map['PasswordComplexityRules'])) {
                $model->passwordComplexityRules = [];
                $n                              = 0;
                foreach ($map['PasswordComplexityRules'] as $item) {
                    $model->passwordComplexityRules[$n++] = null !== $item ? passwordComplexityRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PasswordMinLength'])) {
            $model->passwordMinLength = $map['PasswordMinLength'];
        }

        return $model;
    }
}
