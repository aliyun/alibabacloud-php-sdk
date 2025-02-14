<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordHistoryConfigurationResponseBody\passwordHistoryConfiguration;

class GetPasswordHistoryConfigurationResponseBody extends Model
{
    /**
     * @var passwordHistoryConfiguration
     */
    public $passwordHistoryConfiguration;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'passwordHistoryConfiguration' => 'PasswordHistoryConfiguration',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->passwordHistoryConfiguration) {
            $this->passwordHistoryConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passwordHistoryConfiguration) {
            $res['PasswordHistoryConfiguration'] = null !== $this->passwordHistoryConfiguration ? $this->passwordHistoryConfiguration->toArray($noStream) : $this->passwordHistoryConfiguration;
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
        if (isset($map['PasswordHistoryConfiguration'])) {
            $model->passwordHistoryConfiguration = passwordHistoryConfiguration::fromMap($map['PasswordHistoryConfiguration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
