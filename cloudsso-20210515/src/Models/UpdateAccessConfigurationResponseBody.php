<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateAccessConfigurationResponseBody\accessConfiguration;

class UpdateAccessConfigurationResponseBody extends Model
{
    /**
     * @var accessConfiguration
     */
    public $accessConfiguration;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessConfiguration' => 'AccessConfiguration',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accessConfiguration) {
            $this->accessConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessConfiguration) {
            $res['AccessConfiguration'] = null !== $this->accessConfiguration ? $this->accessConfiguration->toArray($noStream) : $this->accessConfiguration;
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
        if (isset($map['AccessConfiguration'])) {
            $model->accessConfiguration = accessConfiguration::fromMap($map['AccessConfiguration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
