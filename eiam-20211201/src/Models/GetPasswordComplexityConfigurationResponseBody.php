<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordComplexityConfigurationResponseBody\passwordComplexityConfiguration;

class GetPasswordComplexityConfigurationResponseBody extends Model
{
    /**
     * @var passwordComplexityConfiguration
     */
    public $passwordComplexityConfiguration;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'passwordComplexityConfiguration' => 'PasswordComplexityConfiguration',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->passwordComplexityConfiguration) {
            $this->passwordComplexityConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passwordComplexityConfiguration) {
            $res['PasswordComplexityConfiguration'] = null !== $this->passwordComplexityConfiguration ? $this->passwordComplexityConfiguration->toArray($noStream) : $this->passwordComplexityConfiguration;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PasswordComplexityConfiguration'])) {
            $model->passwordComplexityConfiguration = passwordComplexityConfiguration::fromMap($map['PasswordComplexityConfiguration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
