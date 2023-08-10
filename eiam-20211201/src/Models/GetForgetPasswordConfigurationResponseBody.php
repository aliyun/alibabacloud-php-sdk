<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetForgetPasswordConfigurationResponseBody\openForgetPasswordConfiguration;
use AlibabaCloud\Tea\Model;

class GetForgetPasswordConfigurationResponseBody extends Model
{
    /**
     * @description The forgot password configurations.
     *
     * @var openForgetPasswordConfiguration
     */
    public $openForgetPasswordConfiguration;

    /**
     * @description The request ID.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'openForgetPasswordConfiguration' => 'OpenForgetPasswordConfiguration',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openForgetPasswordConfiguration) {
            $res['OpenForgetPasswordConfiguration'] = null !== $this->openForgetPasswordConfiguration ? $this->openForgetPasswordConfiguration->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetForgetPasswordConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenForgetPasswordConfiguration'])) {
            $model->openForgetPasswordConfiguration = openForgetPasswordConfiguration::fromMap($map['OpenForgetPasswordConfiguration']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
