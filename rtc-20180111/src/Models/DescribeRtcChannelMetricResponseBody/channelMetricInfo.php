<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\channelMetric;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\duration;
use AlibabaCloud\Tea\Model;

class channelMetricInfo extends Model
{
    /**
     * @var duration
     */
    public $duration;

    /**
     * @var channelMetric
     */
    public $channelMetric;
    protected $_name = [
        'duration'      => 'Duration',
        'channelMetric' => 'ChannelMetric',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = null !== $this->duration ? $this->duration->toMap() : null;
        }
        if (null !== $this->channelMetric) {
            $res['ChannelMetric'] = null !== $this->channelMetric ? $this->channelMetric->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelMetricInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = duration::fromMap($map['Duration']);
        }
        if (isset($map['ChannelMetric'])) {
            $model->channelMetric = channelMetric::fromMap($map['ChannelMetric']);
        }

        return $model;
    }
}
