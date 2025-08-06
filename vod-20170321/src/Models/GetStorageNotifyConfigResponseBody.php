<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageNotifyConfigResponseBody\ossNotifyConfig;

class GetStorageNotifyConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var ossNotifyConfig
     */
    public $ossNotifyConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configType' => 'ConfigType',
        'ossNotifyConfig' => 'OssNotifyConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->ossNotifyConfig) {
            $this->ossNotifyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->ossNotifyConfig) {
            $res['OssNotifyConfig'] = null !== $this->ossNotifyConfig ? $this->ossNotifyConfig->toArray($noStream) : $this->ossNotifyConfig;
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
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['OssNotifyConfig'])) {
            $model->ossNotifyConfig = ossNotifyConfig::fromMap($map['OssNotifyConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
