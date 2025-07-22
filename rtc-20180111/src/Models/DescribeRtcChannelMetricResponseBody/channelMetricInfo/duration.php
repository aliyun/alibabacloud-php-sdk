<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\duration\pubDuration;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\duration\subDuration;
use AlibabaCloud\Tea\Model;

class duration extends Model
{
    /**
     * @var pubDuration
     */
    public $pubDuration;

    /**
     * @var subDuration
     */
    public $subDuration;
    protected $_name = [
        'pubDuration' => 'PubDuration',
        'subDuration' => 'SubDuration',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pubDuration) {
            $res['PubDuration'] = null !== $this->pubDuration ? $this->pubDuration->toMap() : null;
        }
        if (null !== $this->subDuration) {
            $res['SubDuration'] = null !== $this->subDuration ? $this->subDuration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return duration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PubDuration'])) {
            $model->pubDuration = pubDuration::fromMap($map['PubDuration']);
        }
        if (isset($map['SubDuration'])) {
            $model->subDuration = subDuration::fromMap($map['SubDuration']);
        }

        return $model;
    }
}
