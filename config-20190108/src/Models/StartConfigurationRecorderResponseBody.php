<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\StartConfigurationRecorderResponseBody\configurationRecorder;
use AlibabaCloud\Tea\Model;

class StartConfigurationRecorderResponseBody extends Model
{
    /**
     * @var configurationRecorder
     */
    public $configurationRecorder;

    /**
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
