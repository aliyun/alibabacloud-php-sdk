<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsNotifyUrlConfigResponseBody\liveStreamsNotifyConfig;

class DescribeVsStreamsNotifyUrlConfigResponseBody extends Model
{
    /**
     * @var liveStreamsNotifyConfig
     */
    public $liveStreamsNotifyConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveStreamsNotifyConfig' => 'LiveStreamsNotifyConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveStreamsNotifyConfig) {
            $this->liveStreamsNotifyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamsNotifyConfig) {
            $res['LiveStreamsNotifyConfig'] = null !== $this->liveStreamsNotifyConfig ? $this->liveStreamsNotifyConfig->toArray($noStream) : $this->liveStreamsNotifyConfig;
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
        if (isset($map['LiveStreamsNotifyConfig'])) {
            $model->liveStreamsNotifyConfig = liveStreamsNotifyConfig::fromMap($map['LiveStreamsNotifyConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
