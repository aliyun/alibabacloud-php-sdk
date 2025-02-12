<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\duration\pubDuration;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo\duration\subDuration;

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

    public function validate()
    {
        if (null !== $this->pubDuration) {
            $this->pubDuration->validate();
        }
        if (null !== $this->subDuration) {
            $this->subDuration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pubDuration) {
            $res['PubDuration'] = null !== $this->pubDuration ? $this->pubDuration->toArray($noStream) : $this->pubDuration;
        }

        if (null !== $this->subDuration) {
            $res['SubDuration'] = null !== $this->subDuration ? $this->subDuration->toArray($noStream) : $this->subDuration;
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
        if (isset($map['PubDuration'])) {
            $model->pubDuration = pubDuration::fromMap($map['PubDuration']);
        }

        if (isset($map['SubDuration'])) {
            $model->subDuration = subDuration::fromMap($map['SubDuration']);
        }

        return $model;
    }
}
