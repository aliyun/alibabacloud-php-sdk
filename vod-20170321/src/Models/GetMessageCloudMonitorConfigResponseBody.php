<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCloudMonitorConfigResponseBody\messageCloudMonitorConfig;

class GetMessageCloudMonitorConfigResponseBody extends Model
{
    /**
     * @var messageCloudMonitorConfig
     */
    public $messageCloudMonitorConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageCloudMonitorConfig' => 'MessageCloudMonitorConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->messageCloudMonitorConfig) {
            $this->messageCloudMonitorConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageCloudMonitorConfig) {
            $res['MessageCloudMonitorConfig'] = null !== $this->messageCloudMonitorConfig ? $this->messageCloudMonitorConfig->toArray($noStream) : $this->messageCloudMonitorConfig;
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
        if (isset($map['MessageCloudMonitorConfig'])) {
            $model->messageCloudMonitorConfig = messageCloudMonitorConfig::fromMap($map['MessageCloudMonitorConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
