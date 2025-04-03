<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigurationRecorderResponseBody\configurationRecorder;

class UpdateConfigurationRecorderResponseBody extends Model
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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->configurationRecorder) {
            $this->configurationRecorder->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurationRecorder) {
            $res['ConfigurationRecorder'] = null !== $this->configurationRecorder ? $this->configurationRecorder->toArray($noStream) : $this->configurationRecorder;
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
        if (isset($map['ConfigurationRecorder'])) {
            $model->configurationRecorder = configurationRecorder::fromMap($map['ConfigurationRecorder']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
