<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class StopConfigurationRecorderResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example AB2E892E-8A43-5B0F-8FE3-B53ADA53CB2D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $stopConfigurationRecorderResult;
    protected $_name = [
        'requestId'                       => 'RequestId',
        'stopConfigurationRecorderResult' => 'StopConfigurationRecorderResult',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return StopConfigurationRecorderResponseBody
     */
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
