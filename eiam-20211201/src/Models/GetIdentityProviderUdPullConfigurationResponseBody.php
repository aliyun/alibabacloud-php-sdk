<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration;
use AlibabaCloud\Tea\Model;

class GetIdentityProviderUdPullConfigurationResponseBody extends Model
{
    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var udPullConfiguration
     */
    public $udPullConfiguration;
    protected $_name = [
        'requestId' => 'RequestId',
        'udPullConfiguration' => 'UdPullConfiguration',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->udPullConfiguration) {
            $res['UdPullConfiguration'] = null !== $this->udPullConfiguration ? $this->udPullConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIdentityProviderUdPullConfigurationResponseBody
     */
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
