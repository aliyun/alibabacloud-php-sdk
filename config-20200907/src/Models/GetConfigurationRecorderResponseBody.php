<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigurationRecorderResponseBody\configurationRecorder;
use AlibabaCloud\Tea\Model;

class GetConfigurationRecorderResponseBody extends Model
{
    /**
     * @description The details of the configuration recorder that monitors resources.
     *
     * @var configurationRecorder
     */
    public $configurationRecorder;

    /**
     * @description The request ID.
     *
     * @example AE43696A-B3AF-5E55-9845-11393127E6D3
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
     * @return GetConfigurationRecorderResponseBody
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
