<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetForgetPasswordConfigurationResponseBody\openForgetPasswordConfiguration;

class GetForgetPasswordConfigurationResponseBody extends Model
{
    /**
     * @var openForgetPasswordConfiguration
     */
    public $openForgetPasswordConfiguration;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'openForgetPasswordConfiguration' => 'OpenForgetPasswordConfiguration',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->openForgetPasswordConfiguration) {
            $this->openForgetPasswordConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openForgetPasswordConfiguration) {
            $res['OpenForgetPasswordConfiguration'] = null !== $this->openForgetPasswordConfiguration ? $this->openForgetPasswordConfiguration->toArray($noStream) : $this->openForgetPasswordConfiguration;
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
        if (isset($map['OpenForgetPasswordConfiguration'])) {
            $model->openForgetPasswordConfiguration = openForgetPasswordConfiguration::fromMap($map['OpenForgetPasswordConfiguration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
