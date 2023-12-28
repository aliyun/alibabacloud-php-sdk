<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo;
use AlibabaCloud\Tea\Model;

class DescribeRtcChannelMetricResponseBody extends Model
{
    /**
     * @var channelMetricInfo
     */
    public $channelMetricInfo;

    /**
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'channelMetricInfo' => 'ChannelMetricInfo',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelMetricInfo) {
            $res['ChannelMetricInfo'] = null !== $this->channelMetricInfo ? $this->channelMetricInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ChannelMetricInfo'])) {
            $model->channelMetricInfo = channelMetricInfo::fromMap($map['ChannelMetricInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
