<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationSampleResponseBody\sample;

class GetResourceConfigurationSampleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sample
     */
    public $sample;
    protected $_name = [
        'requestId' => 'RequestId',
        'sample' => 'Sample',
    ];

    public function validate()
    {
        if (null !== $this->sample) {
            $this->sample->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sample) {
            $res['Sample'] = null !== $this->sample ? $this->sample->toArray($noStream) : $this->sample;
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

        if (isset($map['Sample'])) {
            $model->sample = sample::fromMap($map['Sample']);
        }

        return $model;
    }
}
