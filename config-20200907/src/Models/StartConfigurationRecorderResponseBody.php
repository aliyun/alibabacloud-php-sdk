<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\StartConfigurationRecorderResponseBody\configurationRecorder;
use AlibabaCloud\Tea\Model;

class StartConfigurationRecorderResponseBody extends Model
{
    /**
     * @var configurationRecorder
     */
    public $configurationRecorder;

    /**
     * @example 4D994662-6B27-536F-B320-38F4B3D58705
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configurationRecorder' => 'ConfigurationRecorder',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationRecorder) {
            $res['ConfigurationRecorder'] = null !== $this->configurationRecorder ? $this->configurationRecorder->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartConfigurationRecorderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationRecorder'])) {
            $model->configurationRecorder = configurationRecorder::fromMap($map['ConfigurationRecorder']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
