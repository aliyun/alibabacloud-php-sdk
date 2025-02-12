<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo;

class DescribeRtcChannelMetricResponseBody extends Model
{
    /**
     * @var channelMetricInfo
     */
    public $channelMetricInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'channelMetricInfo' => 'ChannelMetricInfo',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->channelMetricInfo) {
            $this->channelMetricInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelMetricInfo) {
            $res['ChannelMetricInfo'] = null !== $this->channelMetricInfo ? $this->channelMetricInfo->toArray($noStream) : $this->channelMetricInfo;
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
        if (isset($map['ChannelMetricInfo'])) {
            $model->channelMetricInfo = channelMetricInfo::fromMap($map['ChannelMetricInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
