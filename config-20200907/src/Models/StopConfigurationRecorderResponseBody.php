<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class StopConfigurationRecorderResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $stopConfigurationRecorderResult;
    protected $_name = [
        'requestId'                       => 'RequestId',
        'stopConfigurationRecorderResult' => 'StopConfigurationRecorderResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stopConfigurationRecorderResult) {
            $res['StopConfigurationRecorderResult'] = $this->stopConfigurationRecorderResult;
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

        if (isset($map['StopConfigurationRecorderResult'])) {
            $model->stopConfigurationRecorderResult = $map['StopConfigurationRecorderResult'];
        }

        return $model;
    }
}
