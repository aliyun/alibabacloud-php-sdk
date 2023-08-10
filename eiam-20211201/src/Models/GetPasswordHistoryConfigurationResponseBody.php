<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordHistoryConfigurationResponseBody\passwordHistoryConfiguration;
use AlibabaCloud\Tea\Model;

class GetPasswordHistoryConfigurationResponseBody extends Model
{
    /**
     * @description The password history configurations.
     *
     * @var passwordHistoryConfiguration
     */
    public $passwordHistoryConfiguration;

    /**
     * @description The request ID.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'passwordHistoryConfiguration' => 'PasswordHistoryConfiguration',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passwordHistoryConfiguration) {
            $res['PasswordHistoryConfiguration'] = null !== $this->passwordHistoryConfiguration ? $this->passwordHistoryConfiguration->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPasswordHistoryConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PasswordHistoryConfiguration'])) {
            $model->passwordHistoryConfiguration = passwordHistoryConfiguration::fromMap($map['PasswordHistoryConfiguration']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
