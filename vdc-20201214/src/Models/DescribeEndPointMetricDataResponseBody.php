<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointMetricDataResponseBody\pubMetrics;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointMetricDataResponseBody\subMetrics;
use AlibabaCloud\Tea\Model;

class DescribeEndPointMetricDataResponseBody extends Model
{
    /**
     * @description 订阅端用户指标数据。
     *
     * @var subMetrics[]
     */
    public $subMetrics;

    /**
     * @description 发布端用户指标数据。
     *
     * @var pubMetrics[]
     */
    public $pubMetrics;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'subMetrics' => 'SubMetrics',
        'pubMetrics' => 'PubMetrics',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subMetrics) {
            $res['SubMetrics'] = [];
            if (null !== $this->subMetrics && \is_array($this->subMetrics)) {
                $n = 0;
                foreach ($this->subMetrics as $item) {
                    $res['SubMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (isset($map['SubMetrics'])) {
            if (!empty($map['SubMetrics'])) {
                $model->subMetrics = [];
                $n                 = 0;
                foreach ($map['SubMetrics'] as $item) {
                    $model->subMetrics[$n++] = null !== $item ? subMetrics::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
