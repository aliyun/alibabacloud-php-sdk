<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowChartResponseBody\flowChart;

class DescribeFlowChartResponseBody extends Model
{
    /**
     * @var flowChart[]
     */
    public $flowChart;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowChart' => 'FlowChart',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->flowChart)) {
            Model::validateArray($this->flowChart);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowChart) {
            if (\is_array($this->flowChart)) {
                $res['FlowChart'] = [];
                $n1 = 0;
                foreach ($this->flowChart as $item1) {
                    $res['FlowChart'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FlowChart'])) {
            if (!empty($map['FlowChart'])) {
                $model->flowChart = [];
                $n1 = 0;
                foreach ($map['FlowChart'] as $item1) {
                    $model->flowChart[$n1++] = flowChart::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
