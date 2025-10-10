<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\channelMetric;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\duration;

class channelMetricInfo extends Model
{
    /**
     * @var channelMetric
     */
    public $channelMetric;

    /**
     * @var duration
     */
    public $duration;
    protected $_name = [
        'channelMetric' => 'ChannelMetric',
        'duration' => 'Duration',
    ];

    public function validate()
    {
        if (null !== $this->channelMetric) {
            $this->channelMetric->validate();
        }
        if (null !== $this->duration) {
            $this->duration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelMetric) {
            $res['ChannelMetric'] = null !== $this->channelMetric ? $this->channelMetric->toArray($noStream) : $this->channelMetric;
        }

        if (null !== $this->duration) {
            $res['Duration'] = null !== $this->duration ? $this->duration->toArray($noStream) : $this->duration;
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
        if (isset($map['ChannelMetric'])) {
            $model->channelMetric = channelMetric::fromMap($map['ChannelMetric']);
        }

        if (isset($map['Duration'])) {
            $model->duration = duration::fromMap($map['Duration']);
        }

        return $model;
    }
}
