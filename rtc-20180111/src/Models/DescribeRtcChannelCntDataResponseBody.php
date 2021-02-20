<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelCntDataResponseBody\channelCntDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeRtcChannelCntDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var channelCntDataPerInterval
     */
    public $channelCntDataPerInterval;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'channelCntDataPerInterval' => 'ChannelCntDataPerInterval',
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
        if (null !== $this->channelCntDataPerInterval) {
            $res['ChannelCntDataPerInterval'] = null !== $this->channelCntDataPerInterval ? $this->channelCntDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcChannelCntDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ChannelCntDataPerInterval'])) {
            $model->channelCntDataPerInterval = channelCntDataPerInterval::fromMap($map['ChannelCntDataPerInterval']);
        }

        return $model;
    }
}
