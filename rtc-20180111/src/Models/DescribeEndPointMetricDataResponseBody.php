<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointMetricDataResponseBody\pubMetrics;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointMetricDataResponseBody\subMetrics;

class DescribeEndPointMetricDataResponseBody extends Model
{
    /**
     * @var pubMetrics[]
     */
    public $pubMetrics;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subMetrics[]
     */
    public $subMetrics;
    protected $_name = [
        'pubMetrics' => 'PubMetrics',
        'requestId' => 'RequestId',
        'subMetrics' => 'SubMetrics',
    ];

    public function validate()
    {
        if (\is_array($this->pubMetrics)) {
            Model::validateArray($this->pubMetrics);
        }
        if (\is_array($this->subMetrics)) {
            Model::validateArray($this->subMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pubMetrics) {
            if (\is_array($this->pubMetrics)) {
                $res['PubMetrics'] = [];
                $n1 = 0;
                foreach ($this->pubMetrics as $item1) {
                    $res['PubMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subMetrics) {
            if (\is_array($this->subMetrics)) {
                $res['SubMetrics'] = [];
                $n1 = 0;
                foreach ($this->subMetrics as $item1) {
                    $res['SubMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PubMetrics'])) {
            if (!empty($map['PubMetrics'])) {
                $model->pubMetrics = [];
                $n1 = 0;
                foreach ($map['PubMetrics'] as $item1) {
                    $model->pubMetrics[$n1] = pubMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SubMetrics'])) {
            if (!empty($map['SubMetrics'])) {
                $model->subMetrics = [];
                $n1 = 0;
                foreach ($map['SubMetrics'] as $item1) {
                    $model->subMetrics[$n1] = subMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
