<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordInitializationConfigurationResponseBody\passwordInitializationConfiguration;
use AlibabaCloud\Tea\Model;

class GetPasswordInitializationConfigurationResponseBody extends Model
{
    /**
     * @description The password initialization configurations.
     *
     * @var passwordInitializationConfiguration
     */
    public $passwordInitializationConfiguration;

    /**
     * @description The request ID.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'passwordInitializationConfiguration' => 'PasswordInitializationConfiguration',
        'requestId'                           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passwordInitializationConfiguration) {
            $res['PasswordInitializationConfiguration'] = null !== $this->passwordInitializationConfiguration ? $this->passwordInitializationConfiguration->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPasswordInitializationConfigurationResponseBody
     */
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
