<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DescribePlayMetricAuthResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $metricList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricList' => 'MetricList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->metricList)) {
            Model::validateArray($this->metricList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricList) {
            if (\is_array($this->metricList)) {
                $res['MetricList'] = [];
                $n1 = 0;
                foreach ($this->metricList as $item1) {
                    $res['MetricList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MetricList'])) {
            if (!empty($map['MetricList'])) {
                $model->metricList = [];
                $n1 = 0;
                foreach ($map['MetricList'] as $item1) {
                    $model->metricList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
