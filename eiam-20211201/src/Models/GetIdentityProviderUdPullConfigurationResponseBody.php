<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration;

class GetIdentityProviderUdPullConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var udPullConfiguration
     */
    public $udPullConfiguration;
    protected $_name = [
        'requestId'           => 'RequestId',
        'udPullConfiguration' => 'UdPullConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->udPullConfiguration) {
            $this->udPullConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->udPullConfiguration) {
            $res['UdPullConfiguration'] = null !== $this->udPullConfiguration ? $this->udPullConfiguration->toArray($noStream) : $this->udPullConfiguration;
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

        if (isset($map['UdPullConfiguration'])) {
            $model->udPullConfiguration = udPullConfiguration::fromMap($map['UdPullConfiguration']);
        }

        return $model;
    }
}
