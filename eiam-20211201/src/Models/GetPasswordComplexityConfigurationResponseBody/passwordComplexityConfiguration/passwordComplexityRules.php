<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordComplexityConfigurationResponseBody\passwordComplexityConfiguration;

use AlibabaCloud\Dara\Model;

class passwordComplexityRules extends Model
{
    /**
     * @var string
     */
    public $passwordCheckType;
    protected $_name = [
        'passwordCheckType' => 'PasswordCheckType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passwordCheckType) {
            $res['PasswordCheckType'] = $this->passwordCheckType;
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
        if (isset($map['PasswordCheckType'])) {
            $model->passwordCheckType = $map['PasswordCheckType'];
        }

        return $model;
    }
}
