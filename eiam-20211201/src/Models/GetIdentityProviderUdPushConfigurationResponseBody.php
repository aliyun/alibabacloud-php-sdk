<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPushConfigurationResponseBody\udPushConfiguration;

class GetIdentityProviderUdPushConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var udPushConfiguration
     */
    public $udPushConfiguration;
    protected $_name = [
        'requestId' => 'RequestId',
        'udPushConfiguration' => 'UdPushConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->udPushConfiguration) {
            $this->udPushConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->udPushConfiguration) {
            $res['UdPushConfiguration'] = null !== $this->udPushConfiguration ? $this->udPushConfiguration->toArray($noStream) : $this->udPushConfiguration;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UdPushConfiguration'])) {
            $model->udPushConfiguration = udPushConfiguration::fromMap($map['UdPushConfiguration']);
        }

        return $model;
    }
}
