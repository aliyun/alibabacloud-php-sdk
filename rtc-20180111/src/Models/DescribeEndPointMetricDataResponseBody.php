<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointMetricDataResponseBody\pubMetrics;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointMetricDataResponseBody\subMetrics;
use AlibabaCloud\Tea\Model;

class DescribeEndPointMetricDataResponseBody extends Model
{
    /**
     * @var pubMetrics[]
     */
    public $pubMetrics;

    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;

    /**
     * @var subMetrics[]
     */
    public $subMetrics;
    protected $_name = [
        'pubMetrics' => 'PubMetrics',
        'requestId'  => 'RequestId',
        'subMetrics' => 'SubMetrics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pubMetrics) {
            $res['PubMetrics'] = [];
            if (null !== $this->pubMetrics && \is_array($this->pubMetrics)) {
                $n = 0;
                foreach ($this->pubMetrics as $item) {
                    $res['PubMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subMetrics) {
            $res['SubMetrics'] = [];
            if (null !== $this->subMetrics && \is_array($this->subMetrics)) {
                $n = 0;
                foreach ($this->subMetrics as $item) {
                    $res['SubMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEndPointMetricDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PubMetrics'])) {
            if (!empty($map['PubMetrics'])) {
                $model->pubMetrics = [];
                $n                 = 0;
                foreach ($map['PubMetrics'] as $item) {
                    $model->pubMetrics[$n++] = null !== $item ? pubMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubMetrics'])) {
            if (!empty($map['SubMetrics'])) {
                $model->subMetrics = [];
                $n                 = 0;
                foreach ($map['SubMetrics'] as $item) {
                    $model->subMetrics[$n++] = null !== $item ? subMetrics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
