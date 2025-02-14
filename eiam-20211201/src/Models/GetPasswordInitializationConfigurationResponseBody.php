<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordInitializationConfigurationResponseBody\passwordInitializationConfiguration;

class GetPasswordInitializationConfigurationResponseBody extends Model
{
    /**
     * @var passwordInitializationConfiguration
     */
    public $passwordInitializationConfiguration;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'passwordInitializationConfiguration' => 'PasswordInitializationConfiguration',
        'requestId'                           => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->passwordInitializationConfiguration) {
            $this->passwordInitializationConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passwordInitializationConfiguration) {
            $res['PasswordInitializationConfiguration'] = null !== $this->passwordInitializationConfiguration ? $this->passwordInitializationConfiguration->toArray($noStream) : $this->passwordInitializationConfiguration;
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
        if (isset($map['PasswordInitializationConfiguration'])) {
            $model->passwordInitializationConfiguration = passwordInitializationConfiguration::fromMap($map['PasswordInitializationConfiguration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
