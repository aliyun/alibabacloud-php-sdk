<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo;
use AlibabaCloud\Tea\Model;

class DescribeRtcChannelMetricResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var channelMetricInfo
     */
    public $channelMetricInfo;
    protected $_name = [
        'requestId'         => 'RequestId',
        'channelMetricInfo' => 'ChannelMetricInfo',
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
        if (null !== $this->channelMetricInfo) {
            $res['ChannelMetricInfo'] = null !== $this->channelMetricInfo ? $this->channelMetricInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcChannelMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ChannelMetricInfo'])) {
            $model->channelMetricInfo = channelMetricInfo::fromMap($map['ChannelMetricInfo']);
        }

        return $model;
    }
}
