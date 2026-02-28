<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordComplexityConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordComplexityConfigurationResponseBody\passwordComplexityConfiguration\passwordComplexityRules;

class passwordComplexityConfiguration extends Model
{
    /**
     * @var bool
     */
    public $disabledWeakPasswordLogin;

    /**
     * @var int
     */
    public $disabledWeakPasswordLoginStartedAt;

    /**
     * @var passwordComplexityRules[]
     */
    public $passwordComplexityRules;

    /**
     * @var int
     */
    public $passwordMinLength;
    protected $_name = [
        'disabledWeakPasswordLogin' => 'DisabledWeakPasswordLogin',
        'disabledWeakPasswordLoginStartedAt' => 'DisabledWeakPasswordLoginStartedAt',
        'passwordComplexityRules' => 'PasswordComplexityRules',
        'passwordMinLength' => 'PasswordMinLength',
    ];

    public function validate()
    {
        if (\is_array($this->passwordComplexityRules)) {
            Model::validateArray($this->passwordComplexityRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disabledWeakPasswordLogin) {
            $res['DisabledWeakPasswordLogin'] = $this->disabledWeakPasswordLogin;
        }

        if (null !== $this->disabledWeakPasswordLoginStartedAt) {
            $res['DisabledWeakPasswordLoginStartedAt'] = $this->disabledWeakPasswordLoginStartedAt;
        }

        if (null !== $this->passwordComplexityRules) {
            if (\is_array($this->passwordComplexityRules)) {
                $res['PasswordComplexityRules'] = [];
                $n1 = 0;
                foreach ($this->passwordComplexityRules as $item1) {
                    $res['PasswordComplexityRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passwordMinLength) {
            $res['PasswordMinLength'] = $this->passwordMinLength;
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
        if (isset($map['DisabledWeakPasswordLogin'])) {
            $model->disabledWeakPasswordLogin = $map['DisabledWeakPasswordLogin'];
        }

        if (isset($map['DisabledWeakPasswordLoginStartedAt'])) {
            $model->disabledWeakPasswordLoginStartedAt = $map['DisabledWeakPasswordLoginStartedAt'];
        }

        if (isset($map['PasswordComplexityRules'])) {
            if (!empty($map['PasswordComplexityRules'])) {
                $model->passwordComplexityRules = [];
                $n1 = 0;
                foreach ($map['PasswordComplexityRules'] as $item1) {
                    $model->passwordComplexityRules[$n1] = passwordComplexityRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PasswordMinLength'])) {
            $model->passwordMinLength = $map['PasswordMinLength'];
        }

        return $model;
    }
}
