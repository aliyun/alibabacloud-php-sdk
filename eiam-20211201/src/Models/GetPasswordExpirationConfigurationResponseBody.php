<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordExpirationConfigurationResponseBody\passwordExpirationConfiguration;

class GetPasswordExpirationConfigurationResponseBody extends Model
{
    /**
     * @var passwordExpirationConfiguration
     */
    public $passwordExpirationConfiguration;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'passwordExpirationConfiguration' => 'PasswordExpirationConfiguration',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->passwordExpirationConfiguration) {
            $this->passwordExpirationConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passwordExpirationConfiguration) {
            $res['PasswordExpirationConfiguration'] = null !== $this->passwordExpirationConfiguration ? $this->passwordExpirationConfiguration->toArray($noStream) : $this->passwordExpirationConfiguration;
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
        if (isset($map['PasswordExpirationConfiguration'])) {
            $model->passwordExpirationConfiguration = passwordExpirationConfiguration::fromMap($map['PasswordExpirationConfiguration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
